# 📦 Instalación del Tema iaivan WordPress

## Método 1: PowerShell Script (Recomendado)

### Requisitos
- Windows 10/11
- PowerShell 5.1 o superior
- Acceso FTP a tu servidor

### Pasos

1. **Abre PowerShell como Administrador**
   - Presiona `Win + X`
   - Selecciona "Windows PowerShell (Administrador)"

2. **Navega a la carpeta del tema**
   ```powershell
   cd "C:\ruta\a\wordpress-theme"
   ```

3. **Permite la ejecución de scripts** (solo primera vez)
   ```powershell
   Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned
   ```

4. **Ejecuta el script de despliegue**
   ```powershell
   .\deploy.ps1
   ```

5. **Sigue las instrucciones en pantalla**
   - Opción 1: Subida automática via FTP
   - Opción 2: Instrucciones para subida manual

---

## Método 2: Subida Manual (cPanel)

### Pasos

1. **Crear ZIP** (Ejecuta el script simple)
   ```powershell
   .\deploy-simple.ps1
   ```

2. **Accede a tu cPanel**
   - URL: `https://tu-servidor.com/cpanel`
   - Inicia sesión con tus credenciales

3. **Abre el Administrador de Archivos**
   - Ve a "Files" → "File Manager"
   - Navega a: `/public_html/wp-content/themes/`

4. **Sube el archivo ZIP**
   - Haz clic en "Upload"
   - Selecciona: `iaivan-theme.zip`
   - Espera a que termine la subida

5. **Descomprime el tema**
   - Selecciona: `iaivan-theme.zip`
   - Clic derecho → "Extract"
   - Confirma la extracción

6. **Activa el tema en WordPress**
   - Ve a: WordPress Admin Dashboard
   - Menú: `Apariencia` → `Temas`
   - Encuentra "iaivan Theme"
   - Haz clic en "Activar"

---

## Método 3: FileZilla (FTP Client)

### Requisitos
- Descargar FileZilla: https://filezilla-project.org/

### Pasos

1. **Crear ZIP del tema**
   ```powershell
   .\deploy-simple.ps1
   ```

2. **Conecta via FTP con FileZilla**
   - Host: `ftp.tu-servidor.com` o IP del servidor
   - Usuario: Tu usuario FTP
   - Contraseña: Tu contraseña FTP
   - Puerto: `21` (FTP) o `22` (SFTP)

3. **Navega en el servidor remoto**
   - Panel derecho → `/public_html/wp-content/themes/`

4. **Sube el ZIP**
   - Panel izquierdo → Encuentra `iaivan-theme.zip`
   - Arrastra al panel derecho

5. **Descomprime via cPanel** (ver Método 2, pasos 5-6)

---

## Personalización del Tema

Una vez activado el tema, personalízalo:

### 1. Accede al Personalizador
- WordPress Admin → `Apariencia` → `Personalizar`

### 2. Secciones Disponibles

#### **Configuración General**
- Título del sitio
- Tagline
- Logo

#### **Sección Hero**
- Título principal
- Subtítulo
- Texto del botón CTA
- URL del botón

#### **Solución Integral**
- Título
- Descripción
- Texto del botón
- URL del botón

#### **Planes de Servicio**
- **Plan Gratis**: Nombre, precio, características, texto botón, URL
- **Plan Profesional**: Nombre, precio, características, texto botón, URL
- **Plan Enterprise**: Nombre, precio, características, texto botón, URL

#### **Footer**
- Enlaces legales (4 enlaces personalizables)

### 3. Guarda los Cambios
- Haz clic en "Publicar"

---

## Solución de Problemas

### El tema no aparece en WordPress
- **Verifica** que la carpeta esté en: `/wp-content/themes/iaivan-theme/`
- **Comprueba** que `style.css` y `index.php` existan dentro de la carpeta

### Errores de estilo
- **Limpia caché** del navegador: `Ctrl + Shift + R`
- **Verifica** permisos de archivos: 644 para archivos, 755 para carpetas

### Animaciones no funcionan
- **Comprueba** que `js/scripts.js` se haya subido correctamente
- **Verifica** en consola del navegador (F12) si hay errores JavaScript

### PowerShell no ejecuta scripts
```powershell
Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned
```

---

## Soporte

Si tienes problemas:
1. Revisa los logs de WordPress: `/wp-content/debug.log`
2. Verifica permisos de archivos en el servidor
3. Consulta la documentación de tu hosting

---

## Estructura de Archivos

```
iaivan-theme/
├── style.css              # Estilos principales + metadata del tema
├── functions.php          # Funcionalidades y personalización
├── header.php             # Cabecera del sitio
├── footer.php             # Pie de página
├── index.php              # Plantilla principal
├── js/
│   └── scripts.js         # JavaScript para interactividad
├── deploy.ps1             # Script de despliegue completo
├── deploy-simple.ps1      # Script simple para crear ZIP
├── INSTALACION.md         # Este archivo
└── README.md              # Documentación general
```

---

## Checklist Final ✅

- [ ] Tema subido a `/wp-content/themes/iaivan-theme/`
- [ ] Tema activado en WordPress Admin
- [ ] Personalización realizada en Apariencia → Personalizar
- [ ] Menús configurados
- [ ] Enlaces de footer actualizados
- [ ] Precios y características de planes actualizados
- [ ] Botones con URLs correctas
- [ ] Sitio probado en móvil y escritorio

🎉 ¡Tu sitio iaivan está listo!
