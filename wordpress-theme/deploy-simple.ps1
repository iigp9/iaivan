# Script Simple - Solo Crear ZIP
# Uso: .\deploy-simple.ps1

Write-Host "Creando ZIP del tema iaivan..." -ForegroundColor Cyan

$THEME_NAME = "iaivan-theme"
$currentPath = Get-Location
$zipPath = "$currentPath\$THEME_NAME.zip"

# Eliminar ZIP anterior
if (Test-Path $zipPath) {
    Remove-Item $zipPath -Force
}

# Crear ZIP
$filesToZip = Get-ChildItem -Path $currentPath -Exclude "*.ps1","*.zip","README.md"
Compress-Archive -Path $filesToZip.FullName -DestinationPath $zipPath -Force

Write-Host "✓ ZIP creado: $zipPath" -ForegroundColor Green
Write-Host ""
Write-Host "Sube este archivo a tu servidor WordPress en:" -ForegroundColor Yellow
Write-Host "/wp-content/themes/" -ForegroundColor Cyan
Write-Host ""
Write-Host "Luego descomprime y activa el tema desde:" -ForegroundColor Yellow
Write-Host "WordPress Admin > Apariencia > Temas" -ForegroundColor Cyan

# Abrir carpeta
Invoke-Item $currentPath
