# Deploy Landing Builder to bilohash.com/landing_builder/
param([switch]$PackOnly)

$ErrorActionPreference = 'Stop'
$root = Split-Path $PSScriptRoot -Parent
$configPath = 'C:\bilohash\shop\scripts\deploy.config.local.ps1'
if (-not (Test-Path $configPath)) { throw "Missing $configPath" }
. $configPath

$RemoteRoot = '/home/u762384583/domains/bilohash.com/public_html/landing_builder'
$zipPath = Join-Path $root '_deploy-landing_builder.zip'
$staging = Join-Path $env:TEMP ('lb-deploy-' + [guid]::NewGuid().ToString('n'))

try {
    New-Item -ItemType Directory -Path $staging -Force | Out-Null
    $items = @(
        '.htaccess', 'config.php', 'init.php', 'index.php', 'builder.php', 'demo-install.php',
        'README.md', 'composer.json', 'Dockerfile',
        'includes', 'lang', 'assets', 'docs'
    )
    foreach ($item in $items) {
        $src = Join-Path $root $item
        if (-not (Test-Path $src)) { throw "Missing $src" }
        Copy-Item -Path $src -Destination (Join-Path $staging $item) -Recurse -Force
    }
    if (Test-Path $zipPath) { Remove-Item $zipPath -Force }
    Push-Location $staging
    try { & tar -a -c -f $zipPath * } finally { Pop-Location }
    Write-Host "Packed $(Get-Item $zipPath | Select-Object -ExpandProperty Length) bytes"

    if ($PackOnly) { return }

    Import-Module Posh-SSH -ErrorAction Stop
    $cred = New-Object PSCredential ($User, (ConvertTo-SecureString $Password -AsPlainText -Force))
    $sshParams = @{ ComputerName = $DeployHost; Port = $Port; Credential = $cred; AcceptKey = $true; ConnectionTimeout = 45 }
    $scpParams = @{ ComputerName = $DeployHost; Port = $Port; Credential = $cred; AcceptKey = $true; ConnectionTimeout = 120 }
    $s = New-SSHSession @sshParams
    try {
        Invoke-SSHCommand -SessionId $s.SessionId -Command "mkdir -p '$RemoteRoot'" -TimeOut 20 | Out-Null
        Set-SCPItem @scpParams -Path $zipPath -Destination $RemoteRoot -NewName '_deploy-landing_builder.zip'
        $cmd = "cd '$RemoteRoot' && unzip -o _deploy-landing_builder.zip && rm -f _deploy-landing_builder.zip && chmod -R 755 assets docs 2>/dev/null; echo DEPLOY_OK"
        $r = Invoke-SSHCommand -SessionId $s.SessionId -Command $cmd -TimeOut 90
        Write-Host $r.Output
        if ($r.Output -notmatch 'DEPLOY_OK') { throw ($r.Error + $r.Output) }
        Write-Host 'Deploy OK: https://bilohash.com/landing_builder/'
    } finally {
        Remove-SSHSession -SessionId $s.SessionId | Out-Null
    }
} finally {
    if (Test-Path $staging) { Remove-Item $staging -Recurse -Force -ErrorAction SilentlyContinue }
    if (Test-Path $zipPath) { Remove-Item $zipPath -Force -ErrorAction SilentlyContinue }
}