# Dra. Gloria Rivera — Sitio web (NameCheap)

Proyecto PHP listo para subir a NameCheap shared hosting.

## Estructura

```
dragloriarivera-namecheap/
├── .htaccess                  ← Apache config (URLs limpias, gzip, caché)
├── index.php                  ← Página de inicio  (/)
├── invisalign-bogota.php      ← /invisalign-bogota
├── resultados.php             ← /resultados
├── ladoctora.php              ← /ladoctora
├── blog.php                   ← /blog
├── agendar-valoracion.php     ← /agendar-valoracion
├── vsl.php                    ← /vsl
├── aviso-legal.php            ← /aviso-legal
├── politica-privacidad.php    ← /politica-privacidad
├── terminos-condiciones.php   ← /terminos-condiciones
├── articulo-cuanto-cuesta-invisalign.php
├── articulo-cuanto-dura-invisalign.php
├── articulo-invisalign-duele.php
├── articulo-invisalign-vs-brackets.php
├── articulo-soy-candidato-invisalign.php
├── partials/
│   ├── header.php             ← Header común a TODAS las páginas
│   └── footer.php             ← Footer común a TODAS las páginas
├── assets/
│   └── logos/
│       ├── dragloria-logo-nav.png
│       └── dragloria-logo-footer.png
└── README.md
```

## Cómo cambiar el header o el footer

Edita **solo** el archivo correspondiente:
- `partials/header.php` → toda la barra superior (utility, nav, logo, CTA, overlay móvil)
- `partials/footer.php` → toda la zona inferior (4 columnas + copyright)

Sube ese archivo a NameCheap y el cambio aparece automáticamente en las **15 páginas**.

## Cómo subir a NameCheap

### Opción A — cPanel File Manager

1. Entra a tu cPanel: `https://servername.namecheap.com:2083`
2. Abre **File Manager**.
3. Navega a `public_html/`.
4. Borra los archivos viejos si los hay (o muévelos a una carpeta `backup/`).
5. Click **Upload** y sube TODO el contenido de esta carpeta — incluyendo el archivo oculto `.htaccess` (en File Manager: Settings → Show Hidden Files).
6. Listo. Visita `https://dragloriarivera.com/` para verificar.

### Opción B — FTP

1. Cliente FTP recomendado: **FileZilla** o **WinSCP**.
2. Host: lo da NameCheap en cPanel → "FTP Accounts".
3. Sube el contenido de la carpeta a `public_html/` en el servidor.

## Verificación post-deploy

Visita estas URLs y confirma que cargan correctamente:

- https://dragloriarivera.com/
- https://dragloriarivera.com/invisalign-bogota
- https://dragloriarivera.com/resultados
- https://dragloriarivera.com/ladoctora
- https://dragloriarivera.com/blog
- https://dragloriarivera.com/agendar-valoracion
- https://dragloriarivera.com/vsl
- https://dragloriarivera.com/aviso-legal
- https://dragloriarivera.com/politica-privacidad
- https://dragloriarivera.com/terminos-condiciones
- https://dragloriarivera.com/articulo-cuanto-cuesta-invisalign
- https://dragloriarivera.com/articulo-cuanto-dura-invisalign
- https://dragloriarivera.com/articulo-invisalign-duele
- https://dragloriarivera.com/articulo-invisalign-vs-brackets
- https://dragloriarivera.com/articulo-soy-candidato-invisalign

## Activar HTTPS (recomendado)

NameCheap incluye SSL gratis con AutoSSL:

1. cPanel → SSL/TLS Status.
2. Click "Run AutoSSL" o "Install Certificate".
3. Una vez activo, edita `.htaccess` y descomenta el bloque `# Forzar HTTPS`.

## Notas técnicas

- Las **imágenes de contenido** (fotos doctora, casos, videos) siguen viviendo en Cloudinary (`res.cloudinary.com/dafmpak8s/...`). No requieren acción.
- Los **2 logos** viven localmente en `assets/logos/` → más estables, sin dependencias externas.
- Cada **canonical** y **og:url** ya apunta a `dragloriarivera.com/...` → SEO listo.
- `home2.html` (3 MB) quedó excluido del build por su tamaño. Si lo necesitas, externalizo las 24 imágenes y lo agrego.

## Requisitos de hosting

- PHP 7.4+ (NameCheap default: PHP 8.x ✓)
- Apache + mod_rewrite (estándar en NameCheap ✓)
- mod_expires + mod_deflate + mod_headers (estándar ✓)
