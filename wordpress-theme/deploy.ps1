# Script de Despliegue del Tema iaivan WordPress
# Uso: .\deploy.ps1

Write-Host "==================================" -ForegroundColor Cyan
Write-Host "  Tema iaivan - Deploy a Servidor" -ForegroundColor Cyan
Write-Host "==================================" -ForegroundColor Cyan
Write-Host ""

# Configuración - EDITA ESTOS VALORES
$SERVER = "tu-servidor.com"
$USERNAME = "tu-usuario-ftp"
$PASSWORD = "tu-contraseña"
$REMOTE_PATH = "/public_html/wp-content/themes/"
$THEME_NAME = "iaivan-theme"

# Crear ZIP del tema
Write-Host "[1/4] Creando archivo ZIP del tema..." -ForegroundColor Yellow

$currentPath = Get-Location
$themePath = "$currentPath"
$zipPath = "$currentPath\$THEME_NAME.zip"

# Eliminar ZIP anterior si existe
if (Test-Path $zipPath) {
    Remove-Item $zipPath -Force
}

# Crear ZIP excluyendo archivos innecesarios
$filesToZip = Get-ChildItem -Path $themePath -Exclude "deploy.ps1","*.zip","README.md"
Compress-Archive -Path $filesToZip.FullName -DestinationPath $zipPath -Force

Write-Host "✓ Archivo ZIP creado: $THEME_NAME.zip" -ForegroundColor Green
Write-Host ""

# Mostrar opciones de subida
Write-Host "[2/4] Selecciona método de subida:" -ForegroundColor Yellow
Write-Host "  1. Subir via FTP (WinSCP necesario)"
Write-Host "  2. Subir via cPanel/Administrador de Archivos (Manual)"
Write-Host "  3. Cancelar"
Write-Host ""

$option = Read-Host "Selecciona opción (1-3)"

switch ($option) {
    "1" {
        Write-Host ""
        Write-Host "[3/4] Intentando subir via FTP..." -ForegroundColor Yellow
        
        # Verificar si WinSCP está instalado
        $winscpPath = "C:\Program Files (x86)\WinSCP\WinSCP.com"
        
        if (Test-Path $winscpPath) {
            # Crear script temporal de WinSCP
            $winscpScript = @"
option batch abort
option confirm off
open ftp://${USERNAME}:${PASSWORD}@${SERVER}
cd $REMOTE_PATH
put `"$zipPath`"
exit
"@
            
            $scriptPath = "$currentPath\winscp_script.txt"
            $winscpScript | Out-File -FilePath $scriptPath -Encoding ASCII
            
            # Ejecutar WinSCP
            & $winscpPath /script=$scriptPath
            
            # Limpiar script temporal
            Remove-Item $scriptPath -Force
            
            Write-Host "✓ Tema subido exitosamente via FTP" -ForegroundColor Green
            Write-Host ""
            Write-Host "[4/4] Pasos finales en tu servidor:" -ForegroundColor Yellow
            Write-Host "  1. Accede a tu hosting via cPanel o SSH"
            Write-Host "  2. Ve a: /wp-content/themes/"
            Write-Host "  3. Descomprime: $THEME_NAME.zip"
            Write-Host "  4. Renombra la carpeta descomprimida a: $THEME_NAME"
            Write-Host "  5. Ve a WordPress > Apariencia > Temas"
            Write-Host "  6. Activa el tema 'iaivan Theme'"
        }
        else {
            Write-Host "✗ WinSCP no encontrado en la ruta estándar" -ForegroundColor Red
            Write-Host ""
            Write-Host "Opciones:" -ForegroundColor Yellow
            Write-Host "  A. Instala WinSCP desde: https://winscp.net/download/WinSCP-5.21-Setup.exe"
            Write-Host "  B. Usa FileZilla: https://filezilla-project.org/"
            Write-Host "  C. Sube manualmente el ZIP via cPanel (opción 2)"
        }
    }
    
    "2" {
        Write-Host ""
        Write-Host "[3/4] Instrucciones para subida manual:" -ForegroundColor Yellow
        Write-Host ""
        Write-Host "PASO 1: Accede a tu cPanel o administrador de archivos" -ForegroundColor Cyan
        Write-Host "  - URL: https://$SERVER/cpanel"
        Write-Host "  - Usuario: $USERNAME"
        Write-Host ""
        Write-Host "PASO 2: Sube el archivo ZIP" -ForegroundColor Cyan
        Write-Host "  - Ve a: Administrador de Archivos"
        Write-Host "  - Navega a: /public_html/wp-content/themes/"
        Write-Host "  - Haz clic en 'Subir' y selecciona: $zipPath"
        Write-Host ""
        Write-Host "PASO 3: Descomprime el tema" -ForegroundColor Cyan
        Write-Host "  - Clic derecho en: $THEME_NAME.zip"
        Write-Host "  - Selecciona: 'Extract' o 'Descomprimir'"
        Write-Host "  - Renombra la carpeta a: $THEME_NAME"
        Write-Host ""
        Write-Host "PASO 4: Activa el tema en WordPress" -ForegroundColor Cyan
        Write-Host "  - Ve a: WordPress Admin > Apariencia > Temas"
        Write-Host "  - Busca: 'iaivan Theme'"
        Write-Host "  - Haz clic en: 'Activar'"
        Write-Host ""
        Write-Host "PASO 5: Personaliza el tema" -ForegroundColor Cyan
        Write-Host "  - Ve a: Apariencia > Personalizar"
        Write-Host "  - Edita textos, precios y URLs"
        Write-Host ""
        Write-Host "✓ Archivo ZIP listo en: $zipPath" -ForegroundColor Green
        
        # Abrir explorador de archivos en la ubicación del ZIP
        Invoke-Item $currentPath
    }
    
    "3" {
        Write-Host ""
        Write-Host "✗ Despliegue cancelado" -ForegroundColor Red
        exit
    }
    
    default {
        Write-Host ""
        Write-Host "✗ Opción no válida" -ForegroundColor Red
        exit
    }
}

Write-Host ""
Write-Host "==================================" -ForegroundColor Cyan
Write-Host "  Despliegue Completado" -ForegroundColor Cyan
Write-Host "==================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Documentación completa en: README.md" -ForegroundColor Gray
