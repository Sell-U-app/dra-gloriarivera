# Home de Dra. Gloria Rivera — Bloques para OneFunnel

## ⚡ MÉTODO RÁPIDO (recomendado) — usar **FULL-HOME-BUNDLE.html**

OneFunnel suele romper estilos cuando partes la página en bloques separados (mete cada uno en sus propios contenedores con padding/max-width que sobreescriben).

**Solución:** un solo bloque autocontenido con TODO embebido (fuentes + CSS + HTML + scripts).

### Pasos

1. Abre [`FULL-HOME-BUNDLE.html`](FULL-HOME-BUNDLE.html) en un editor de texto.
2. Selecciona TODO el contenido (`Ctrl+A`) y cópialo (`Ctrl+C`).
3. En OneFunnel, en la página del home, añade UN solo elemento tipo **"Custom HTML"** / **"HTML Block"** / **"Raw HTML"** (el nombre varía según el builder) ocupando toda la página.
4. Pega el contenido y guarda.
5. El home renderiza completo, con fuentes, animaciones, carrusel y todo.

### Notas

- **Logos:** ya están con URL absoluta a `https://dragloriarivera.com/assets/logos/...`. Funcionan mientras el sitio en NameCheap esté vivo. Si lo apagas, sube los logos a OneFunnel/Cloudinary y reemplaza esas 2 URLs.
- **CTAs internos** (`/agenda-valoracion`, `/invisalign`, `/resultados`, `/ladoctora`, `/blog`) apuntan a rutas relativas. Si OneFunnel sirve este home bajo el mismo dominio funcionarán; si está en `funnels.tu-app.com` y las otras páginas están en otro lado, busca-y-reemplaza esas 5 rutas por URLs absolutas (`https://dragloriarivera.com/agenda-valoracion`, etc).
- **PHP del carrusel:** ya está pre-renderizado a HTML estático (20 cards de testimonios reales).

---

## 🧩 MÉTODO ALTERNATIVO — bloques separados (solo si necesitas editar secciones individualmente)

Si OneFunnel sí respeta `<style>` global y permite Custom CSS + Custom JS por separado, puedes usar los 13 bloques:

| Archivo | Qué es | Dónde |
|---|---|---|
| `00-global-css.html` | Tokens + estilos completos | Settings → Head / Custom CSS (una vez) |
| `01-header.html` | Utility bar + nav + overlay móvil | Global Header |
| `02-section-hero-video.html` | Hero video Cloudinary | Sección 1 |
| `03-section-hero-editorial.html` | Hero foto + título + CTA | Sección 2 |
| `04-section-credentials.html` | Strip "Avalada por" + 4 logos | Sección 3 |
| `05-section-philosophy.html` | Filosofía Dra. + cita | Sección 4 |
| `06-section-problems.html` | 5 casos clínicos | Sección 5 |
| `07-section-reasons.html` | 4 razones diferenciales | Sección 6 |
| `08-section-process.html` | 5 pasos del proceso | Sección 7 |
| `09-section-testimonials.html` | Carrusel 20 cards (PHP pre-renderizado) | Sección 8 (full-width) |
| `10-section-final-cta.html` | CTA final agenda | Sección 9 |
| `11-footer.html` | Footer oscuro 4 columnas | Global Footer |
| `12-page-scripts.html` | JS de nav, scroll, overlay, reveal | Body End Scripts (una vez) |

### Reglas

1. `00-global-css.html` debe pegarse PRIMERO en el head global.
2. `12-page-scripts.html` al FINAL en body-end scripts.
3. Las secciones 02–10 son HTML puro — pegan tal cual.
4. Si OneFunnel filtra `<style>` o selectores como `html`/`body`/`*`, ese builder no soporta este enfoque — **usa el método rápido (`FULL-HOME-BUNDLE.html`)**.

---

## 🐛 Si después de pegar todavía se ve mal

Síntoma → Causa probable → Fix:

| Síntoma | Causa | Fix |
|---|---|---|
| Texto en Times/Arial | Google Fonts no cargaron | Verifica que los `<link>` al inicio del bundle están presentes |
| Sin colores ni dorado | El CSS no se aplicó | El builder filtró `<style>`. Usa `FULL-HOME-BUNDLE.html` o pega CSS en panel global |
| Layout apilado sin grid | `*{box-sizing}` o `.kit-container` no aplicaron | Mismo que arriba — el CSS global no llegó |
| Carrusel estático | Keyframes `t-marquee-ltr/rtl` no cargaron | Mismo — falta CSS global |
| Logos rotos (ícono "imagen rota") | URLs relativas `/assets/logos/...` no resuelven | Usar `FULL-HOME-BUNDLE.html` (ya trae URLs absolutas) o subir logos a OneFunnel |
| Hero video no autoplay | Algunos navegadores requieren interacción | El video tiene `muted autoplay playsinline` (debería auto-reproducir). Si no, no es un problema de estilos |
| Padding/márgenes raros | OneFunnel envuelve el bloque en su propio contenedor con padding | Edita el contenedor padre del HTML element en OneFunnel y ponle `padding:0; margin:0; max-width:none` |
