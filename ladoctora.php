<!DOCTYPE html>
<html lang="es-CO">
<head>
<!-- Dra. Gloria Rivera · La Doctora · build OneFunnel autocontenido -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Dra. Gloria Rivera — Ortodoncista Top Doctor Emerald en Bogotá</title>
<meta name="description" content="Conoce a la Dra. Gloria Rivera, ortodoncista certificada Top Doctor Emerald Invisalign® en Bogotá. Formación, filosofía clínica y trayectoria profesional." />
<link rel="canonical" href="/ladoctora" />

<meta property="og:type" content="profile" />
<meta property="og:locale" content="es_CO" />
<meta property="og:site_name" content="Dra. Gloria Rivera" />
<meta property="og:url" content="https://dragloriarivera.com/ladoctora" />
<meta property="og:title" content="Dra. Gloria Rivera — Ortodoncista Top Doctor Emerald en Bogotá" />
<meta property="og:description" content="Ortodoncista certificada Top Doctor Emerald Invisalign® en Bogotá. Formación, filosofía clínica y trayectoria profesional." />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Dra. Gloria Rivera — Ortodoncista Top Doctor Emerald en Bogotá" />
<meta name="twitter:description" content="Ortodoncista certificada Top Doctor Emerald Invisalign® en Bogotá." />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500&family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
<link href="https://api.fontshare.com/v2/css?f[]=general-sans@200,300,400,500,600&display=swap" rel="stylesheet">

<style>
/* ===== colors_and_type.css ===== */
/* ============================================================
   Dr. Gloria Rivera — Colors, Type, Spacing
   Source: Manual de Marca (Opción 3) + brand voice notes
   ============================================================ */

/* ---------- Web fonts ----------
   - DM Serif Display: Google Fonts (matches manual exactly)
   - General Sans: local @font-face from fonts/ (brand-provided OTFs)
       Weights available: 200 Extralight, 400 Regular, 500 Medium
   - Mrs Saint Delafield: Google Fonts SUBSTITUTE for "Amsterdam Two"
     (Amsterdam Two is a commercial calligraphy face; this is the
     closest free elegant script. See README "FONT SUBSTITUTIONS".)
---------------------------------- */
@import url("https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Mrs+Saint+Delafield&display=swap");

@font-face {
  font-family: "General Sans";
  src: url("./fonts/GeneralSans-Extralight.otf") format("opentype");
  font-weight: 200;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: "General Sans";
  src: url("./fonts/GeneralSans-Regular.otf") format("opentype");
  font-weight: 400;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: "General Sans";
  src: url("./fonts/GeneralSans-Medium.otf") format("opentype");
  font-weight: 500;
  font-style: normal;
  font-display: swap;
}

:root {
  /* ============================================================
     COLOR — from Manual de Marca, page 4
     ------------------------------------------------------------
     Principales: #111111 (negro), #f5f0eb (crema)
     Secundarios: #d4c5b5, #c4a47c, #9b8b7a (paleta tierra/oro)

     PROPORCIÓN DE USO (regla 60/30/10, ley del sistema):
       60% — Fondos base   · Hueso · Beige · Nude
       30% — Tonos oscuros · Carbón · Piedra   (peso y autoridad)
       10% — Acentos       · Dorado suave      (solo énfasis premium)
     ============================================================ */

  /* ----- Nombres oficiales del manual (úsalos al diseñar) ----- */
  --hueso:           #faf6f1;  /* fondo base más claro, casi blanco */
  --beige:           #f5f0eb;  /* fondo base dominante              */
  --nude:            #d4c5b5;  /* fondo base cálido, capa suave     */
  --carbon:          #111111;  /* peso, autoridad, texto, dark UI   */
  --piedra:          #9b8b7a;  /* texto secundario, divisores       */
  --dorado:          #c4a47c;  /* acento — solo 10%                 */
  --dorado-suave:    #c4a47c;  /* alias del nombre del manual       */

  /* Raw palette (alias técnicos) */
  --gr-ink:          var(--carbon);  /* primary text, deep neutral   */
  --gr-cream:        var(--beige);   /* primary background           */
  --gr-sand:         var(--nude);    /* secondary, soft sand         */
  --gr-gold:         var(--dorado);  /* brand accent, signature gold */
  --gr-stone:        var(--piedra);  /* secondary, warm grey-brown   */

  /* Tonal extensions (derived, used for hover/borders/dividers) */
  --gr-ink-90:       #1a1a1a;
  --gr-ink-70:       #3a3735;
  --gr-ink-50:       #6b6663;
  --gr-ink-30:       #a8a39e;
  --gr-cream-deep:   #ece4d9;  /* hover/press on cream surfaces */
  --gr-cream-soft:   var(--hueso);  /* alias: hueso = lightest surface */
  --gr-paper:        #ffffff;
  --gr-gold-deep:    #a8865d;  /* hover/press on gold           */
  --gr-gold-soft:    #e4d4be;  /* tint, used in soft surfaces   */

  /* ---------- Semantic color tokens ---------- */
  --fg-1:            var(--gr-ink);        /* body, headings */
  --fg-2:            var(--gr-ink-70);     /* secondary text */
  --fg-3:            var(--gr-ink-50);     /* muted, meta    */
  --fg-on-dark:      var(--gr-cream);      /* text on ink    */
  --fg-accent:       var(--gr-gold);       /* gold accents   */

  --bg-1:            var(--gr-cream);      /* canvas         */
  --bg-2:            var(--gr-cream-soft); /* card surface   */
  --bg-3:            var(--gr-paper);      /* elevated card  */
  --bg-invert:       var(--gr-ink);        /* dark sections  */
  --bg-tinted:       var(--gr-gold-soft);  /* feature panels */

  --border-1:        rgba(17, 17, 17, 0.10);
  --border-2:        rgba(17, 17, 17, 0.18);
  --border-on-dark:  rgba(245, 240, 235, 0.16);
  --divider:         rgba(155, 139, 122, 0.30); /* stone @30% */

  /* ============================================================
     TYPOGRAPHY — from Manual de Marca, page 5
     ------------------------------------------------------------
     Principal:  DM Serif Display
     Web:        General Sans (Medium + Regular)
     Destacados: Amsterdam Two  (→ Mrs Saint Delafield)
     ============================================================ */
  --font-display:    "DM Serif Display", "Cormorant Garamond", Georgia, serif;
  --font-body:       "General Sans", "Inter", system-ui, -apple-system, sans-serif;
  --font-script:     "Mrs Saint Delafield", "Pinyon Script", cursive;

  --fw-extralight:   200;
  --fw-regular:      400;
  --fw-medium:       500;

  /* Type scale — generous, editorial. Mobile-first sizes. */
  --fs-display-1:    clamp(3.5rem, 6vw + 1rem, 6.5rem);  /* 56→104 */
  --fs-display-2:    clamp(2.75rem, 4.5vw + 1rem, 4.75rem); /* 44→76 */
  --fs-h1:           clamp(2.25rem, 3vw + 1rem, 3.5rem); /* 36→56 */
  --fs-h2:           clamp(1.75rem, 2vw + 0.75rem, 2.5rem); /* 28→40 */
  --fs-h3:           1.5rem;   /* 24 */
  --fs-h4:           1.25rem;  /* 20 */
  --fs-lead:         1.1875rem;/* 19 */
  --fs-body:         1rem;     /* 16 */
  --fs-small:        0.9375rem;/* 15 */
  --fs-meta:         0.8125rem;/* 13 */
  --fs-eyebrow:      0.75rem;  /* 12 — tracked */

  --lh-tight:        1.05;
  --lh-snug:         1.2;
  --lh-normal:       1.5;
  --lh-loose:        1.7;

  --tracking-wide:   0.14em;   /* eyebrows, all-caps labels */
  --tracking-tight:  -0.01em;  /* large display serif       */

  /* ============================================================
     SPACING, RADII, SHADOWS, MOTION
     ============================================================ */
  --space-1:         4px;
  --space-2:         8px;
  --space-3:         12px;
  --space-4:         16px;
  --space-5:         24px;
  --space-6:         32px;
  --space-7:         48px;
  --space-8:         64px;
  --space-9:         96px;
  --space-10:        128px;

  --radius-xs:       2px;
  --radius-sm:       4px;
  --radius-md:       8px;
  --radius-lg:       16px;
  --radius-pill:     999px;

  /* Shadows: very restrained. Soft, low spread. */
  --shadow-1:        0 1px 2px rgba(17, 17, 17, 0.04);
  --shadow-2:        0 4px 14px -6px rgba(17, 17, 17, 0.08);
  --shadow-3:        0 24px 48px -24px rgba(17, 17, 17, 0.18);

  /* ============================================================
     ELEVATION — 5 tiers, all warm carbon-tinted (never neutral grey)
     ------------------------------------------------------------
     E0 reposo casi invisible — surfaces, dividers, base UI
     E1 cards, panels, popovers (default editorial card)
     E2 hover, lifted state — pair con translateY(-4px)
     E3 modales, sticky bars, overlays
     E4 dorado-halo — SOLO CTA principal del Hero + Contact
     ============================================================ */
  --elev-0: 0 1px 0 rgba(17, 17, 17, 0.03);
  --elev-1: 0 1px 2px rgba(17, 17, 17, 0.04), 0 6px 18px -10px rgba(17, 17, 17, 0.10);
  --elev-2: 0 2px 4px rgba(17, 17, 17, 0.05), 0 14px 32px -14px rgba(17, 17, 17, 0.16);
  --elev-3: 0 6px 14px rgba(17, 17, 17, 0.08), 0 32px 64px -24px rgba(17, 17, 17, 0.24);
  --elev-4: 0 1px 2px rgba(17, 17, 17, 0.06), 0 12px 30px -12px rgba(196, 164, 124, 0.45), 0 0 0 1px rgba(196, 164, 124, 0.18);

  /* Motion — calm, never bouncy */
  --ease-out:        cubic-bezier(0.22, 0.61, 0.36, 1);
  --ease-in-out:     cubic-bezier(0.65, 0, 0.35, 1);
  --dur-fast:        160ms;
  --dur-base:        260ms;
  --dur-slow:        500ms;

  /* ============================================================
     PREMIUM MOTION (extensión) — curva única editorial
     ------------------------------------------------------------
     Toda animación premium usa --ease-premium.
     micro    180ms — hover, focus, micro-feedback
     normal   320ms — transiciones de botones, cards, sheets
     narrative 640ms — mask reveal de titulares, parallax, sequence
     ============================================================ */
  --ease-premium:    cubic-bezier(0.22, 1, 0.36, 1);
  --dur-micro:       180ms;
  --dur-normal:      320ms;
  --dur-narrative:   640ms;
  --reveal-delay-accent: 120ms; /* la palabra dorada llega tarde */

  /* ============================================================
     ATMOSPHERE — texturas, divisores hairline, monograma
     ============================================================ */
  --hairline:        rgba(17, 17, 17, 0.08);   /* 1px tonal en cream */
  --hairline-strong: rgba(17, 17, 17, 0.14);   /* divisores principales */
  --hairline-gold:   rgba(196, 164, 124, 0.55);/* filete dorado fino */
  --hairline-on-dark: rgba(245, 240, 235, 0.10);
  --grain-opacity:   0.045;  /* 4.5% — grain SVG noise overlay */

  /* Layout */
  --container:       1200px;
  --container-narrow:880px;
}

/* ============================================================
   BASE / SEMANTIC ELEMENT STYLES
   ============================================================ */
html { -webkit-text-size-adjust: 100%; }

body {
  margin: 0;
  font-family: var(--font-body);
  font-size: var(--fs-body);
  font-weight: var(--fw-regular);
  line-height: var(--lh-normal);
  color: var(--fg-1);
  background: var(--bg-1);
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

h1, h2, h3, h4 {
  font-family: var(--font-display);
  font-weight: var(--fw-regular); /* DM Serif Display has weight 400 only */
  color: var(--fg-1);
  letter-spacing: var(--tracking-tight);
  line-height: var(--lh-tight);
  text-wrap: balance;
  margin: 0 0 var(--space-5);
}
h1 { font-size: var(--fs-h1); }
h2 { font-size: var(--fs-h2); }
h3 { font-size: var(--fs-h3); line-height: var(--lh-snug); }
h4 { font-size: var(--fs-h4); line-height: var(--lh-snug); }

p {
  margin: 0 0 var(--space-4);
  text-wrap: pretty;
  max-width: 62ch;
}

a {
  color: inherit;
  text-decoration: none;
  border-bottom: 1px solid currentColor;
  padding-bottom: 1px;
  transition: color var(--dur-fast) var(--ease-out),
              opacity var(--dur-fast) var(--ease-out);
}
a:hover { color: var(--fg-accent); }

/* ---------- Display + script helpers ---------- */
.display-1 { font-family: var(--font-display); font-size: var(--fs-display-1); line-height: var(--lh-tight); letter-spacing: var(--tracking-tight); }
.display-2 { font-family: var(--font-display); font-size: var(--fs-display-2); line-height: var(--lh-tight); letter-spacing: var(--tracking-tight); }
.script    { font-family: var(--font-script); font-weight: 400; }

.eyebrow {
  font-family: var(--font-body);
  font-size: var(--fs-eyebrow);
  font-weight: var(--fw-medium);
  letter-spacing: var(--tracking-wide);
  text-transform: uppercase;
  color: var(--fg-3);
}

.lead {
  font-size: var(--fs-lead);
  line-height: var(--lh-loose);
  color: var(--fg-2);
  max-width: 60ch;
}

.meta {
  font-size: var(--fs-meta);
  color: var(--fg-3);
}

/* ---------- Buttons ---------- */
.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-2);
  font-family: var(--font-body);
  font-size: var(--fs-small);
  font-weight: var(--fw-medium);
  letter-spacing: 0.02em;
  padding: 14px 28px;
  border: 1px solid transparent;
  border-radius: var(--radius-sm);
  cursor: pointer;
  transition: background var(--dur-fast) var(--ease-out),
              color var(--dur-fast) var(--ease-out),
              border-color var(--dur-fast) var(--ease-out),
              transform var(--dur-fast) var(--ease-out);
  text-decoration: none;
}
.btn-primary {
  background: var(--gr-ink);
  color: var(--gr-cream);
}
.btn-primary:hover { background: var(--gr-ink-70); }
.btn-primary:active { transform: translateY(1px); }

.btn-secondary {
  background: transparent;
  color: var(--gr-ink);
  border-color: var(--gr-ink);
}
.btn-secondary:hover { background: var(--gr-ink); color: var(--gr-cream); }

.btn-ghost {
  background: transparent;
  color: var(--gr-ink);
  padding-left: 0;
  padding-right: 0;
  border-radius: 0;
  border-bottom: 1px solid var(--gr-ink);
}
.btn-ghost:hover { color: var(--gr-gold-deep); border-bottom-color: var(--gr-gold-deep); }

/* ---------- Inputs ---------- */
.field {
  display: block;
  width: 100%;
  font-family: var(--font-body);
  font-size: var(--fs-body);
  color: var(--fg-1);
  background: transparent;
  border: 0;
  border-bottom: 1px solid var(--border-2);
  padding: 12px 0;
  transition: border-color var(--dur-fast) var(--ease-out);
}
.field:focus { outline: 0; border-bottom-color: var(--gr-gold); }
.field-label {
  display: block;
  font-size: var(--fs-eyebrow);
  letter-spacing: var(--tracking-wide);
  text-transform: uppercase;
  color: var(--fg-3);
  margin-bottom: var(--space-2);
}

/* ============================================================
   PREMIUM LAYER — extensiones editoriales (Aman / Hermès / The Row)
   No reemplaza nada: añade variantes y utilidades.
   ============================================================ */

/* ---------- OpenType utilities (DM Serif Display + General Sans) ----------
   Usa .lit-* en datos editoriales (stats, fechas, precios) y body
   denso. NUNCA en buttons/badges/CTAs (queremos tabular alignment ahí). */
.lit-editorial { font-feature-settings: "liga" 1, "dlig" 1, "kern" 1, "ss01" 1; }
.lit-oldstyle  { font-feature-settings: "onum" 1, "kern" 1, "liga" 1; }
.lit-tabular   { font-feature-settings: "tnum" 1, "kern" 1; font-variant-numeric: tabular-nums; }

/* Drop cap opcional para bloques de párrafo largo editorial. */
.dropcap::first-letter {
  font-family: var(--font-display);
  font-size: 4.6em;
  line-height: 0.9;
  float: left;
  margin: 0.08em 0.12em 0 -0.04em;
  color: var(--carbon);
}

/* ---------- Premium button states ---------- */
.btn-premium {
  position: relative;
  overflow: hidden;
  transition: background var(--dur-normal) var(--ease-premium),
              color var(--dur-normal) var(--ease-premium),
              border-color var(--dur-normal) var(--ease-premium),
              box-shadow var(--dur-normal) var(--ease-premium),
              transform var(--dur-normal) var(--ease-premium);
}
/* Primario carbón con hairline interior dorado 1px */
.btn-primary.btn-premium {
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.45);
}
.btn-primary.btn-premium .btn-label {
  position: relative;
  display: inline-block;
}
.btn-primary.btn-premium .btn-label::after {
  content: "";
  position: absolute;
  left: 0; right: 0; bottom: -4px;
  height: 1px;
  background: var(--dorado);
  transform: scaleX(0);
  transform-origin: left center;
  transition: transform var(--dur-normal) var(--ease-premium);
}
.btn-primary.btn-premium:hover {
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.75), var(--elev-4);
}
.btn-primary.btn-premium:hover .btn-label::after { transform: scaleX(1); }

/* Secundario ghost con doble borde en hover (letterpress) */
.btn-secondary.btn-premium {
  border-color: var(--dorado);
  color: var(--carbon);
  box-shadow: inset 0 0 0 0px var(--dorado);
}
.btn-secondary.btn-premium:hover {
  background: transparent;
  color: var(--carbon);
  box-shadow: inset 0 0 0 1px var(--carbon),
              inset 0 0 0 4px var(--beige),
              inset 0 0 0 5px var(--dorado);
}

/* ---------- Editorial card variant ---------- */
.card-editorial {
  background: var(--hueso);
  border: 1px solid var(--hairline);
  /* Asymmetric corner radius — top larger, bottom smaller */
  border-radius: 16px 16px 4px 4px;
  padding: 28px;
  box-shadow: var(--elev-1);
  transition: box-shadow var(--dur-normal) var(--ease-premium),
              transform var(--dur-normal) var(--ease-premium),
              border-color var(--dur-normal) var(--ease-premium);
}
.card-editorial:hover {
  box-shadow: var(--elev-2);
  transform: translateY(-4px);
  border-color: var(--hairline-strong);
}

/* ---------- Editorial underline field ---------- */
.field-editorial {
  position: relative;
  display: block;
}
.field-editorial input,
.field-editorial textarea {
  width: 100%;
  border: 0;
  background: transparent;
  font-family: var(--font-body);
  font-size: var(--fs-body);
  color: var(--carbon);
  padding: 22px 0 10px;
  border-bottom: 1px solid var(--hairline-strong);
  transition: border-color var(--dur-normal) var(--ease-premium),
              box-shadow var(--dur-normal) var(--ease-premium);
}
.field-editorial input:focus,
.field-editorial textarea:focus {
  outline: 0;
  border-bottom-color: var(--dorado);
  /* Doble línea dorada via box-shadow */
  box-shadow: 0 3px 0 -1px var(--dorado);
}
.field-editorial-label {
  position: absolute;
  top: 4px;
  left: 0;
  font-size: 10px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--piedra);
  font-weight: 500;
  transition: color var(--dur-micro) var(--ease-premium);
  pointer-events: none;
}
.field-editorial input:focus ~ .field-editorial-label,
.field-editorial textarea:focus ~ .field-editorial-label { color: var(--dorado); }

/* ---------- Hairline badge variant ---------- */
.badge-hairline {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  font-weight: 500;
  padding: 8px 14px;
  border-radius: 999px;
  background: var(--hueso);
  color: var(--carbon);
  /* 0.5px feel via inset shadow */
  box-shadow: inset 0 0 0 0.5px var(--dorado), 0 1px 0 rgba(17,17,17,0.02);
  border: 0;
}

/* ---------- Texture / atmosphere ---------- */
.grain {
  position: relative;
}
.grain::before {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  opacity: var(--grain-opacity);
  mix-blend-mode: multiply;
  /* Inline SVG turbulence noise */
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='220' height='220'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 0.067  0 0 0 0 0.067  0 0 0 0 0.067  0 0 0 1 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
  background-size: 220px 220px;
}
.grain-dark::before { mix-blend-mode: screen; opacity: 0.06; }

/* Hairline divider helper */
.hairline-h { height: 1px; background: var(--hairline); border: 0; }
.hairline-h-strong { height: 1px; background: var(--hairline-strong); border: 0; }
.hairline-h-gold { height: 1px; background: var(--hairline-gold); border: 0; }

/* ---------- Mask reveal for headlines ---------- */
@keyframes maskReveal {
  from { clip-path: inset(0 0 100% 0); transform: translateY(8px); }
  to   { clip-path: inset(0 0 0% 0); transform: translateY(0); }
}
.reveal-mask {
  animation: maskReveal var(--dur-narrative) var(--ease-premium) both;
}
.reveal-mask-accent {
  animation: maskReveal var(--dur-narrative) var(--ease-premium) both;
  animation-delay: var(--reveal-delay-accent);
}

/* ===== kit.css ===== */
/* Kit-local extras layered on top of colors_and_type.css */
.kit-section { padding: 120px 0; }
.kit-section.tight { padding: 80px 0; }
.kit-section.dark { background: var(--gr-ink); color: var(--gr-cream); }
.kit-section.tinted { background: var(--gr-cream-soft); }

.kit-container {
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 32px;
}
.kit-container-narrow {
  max-width: var(--container-narrow);
  margin: 0 auto;
  padding: 0 32px;
}

/* ===== Photo placeholder ===== */
.photo-ph {
  background: var(--gr-cream-deep);
  color: var(--gr-stone);
  border: 1px solid var(--border-1);
  border-radius: 6px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 14px;
  padding: 24px;
  font-size: 13px;
  letter-spacing: 0.04em;
  text-align: center;
}
.photo-ph .ph-icon {
  width: 40px;
  height: 40px;
  border: 1px solid currentColor;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-display);
  font-size: 20px;
  opacity: 0.7;
}
.photo-ph .ph-caption {
  max-width: 26ch;
  line-height: 1.4;
  color: var(--gr-stone);
}
.photo-ph .ph-label {
  font-size: 10px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--gr-stone);
  opacity: 0.7;
}

/* ===== Section header ===== */
.section-header { display: flex; flex-direction: column; gap: 16px; margin-bottom: 56px; }
.section-header.center { align-items: center; text-align: center; }
.section-header h2 {
  font-family: var(--font-display);
  font-size: clamp(2rem, 3.2vw + 0.5rem, 3.25rem);
  letter-spacing: -0.01em;
  line-height: 1.05;
  max-width: 22ch;
  margin: 0;
}
.section-header .eyebrow { color: var(--gr-gold-deep); }
.section-header.dark .eyebrow { color: var(--gr-gold); }

/* Smooth scroll */
html { scroll-behavior: smooth; }

/* Reveal in/out (simple fade) */
.fade-in {
  opacity: 0;
  transform: translateY(8px);
  transition: opacity 600ms var(--ease-out), transform 600ms var(--ease-out);
}
.fade-in.visible { opacity: 1; transform: translateY(0); }

/* ===== nav-premium.css ===== */
/* ============================================================
   Premium Nav — Dra. Gloria Rivera
   Uses tokens from colors_and_type.css; do not duplicate.
   ============================================================ */

/* ---------- Utility bar ---------- */
.gr-utility {
  position: fixed; top: 0; left: 0; right: 0;
  height: 32px;
  background: var(--carbon);
  color: var(--beige);
  display: flex; align-items: center; justify-content: flex-end;
  padding: 0 32px;
  z-index: 51;
  transform: translateY(0);
  transition: transform var(--dur-normal) var(--ease-premium);
  font-family: var(--font-body);
  font-size: 10px;
  letter-spacing: 0.24em;
  text-transform: uppercase;
  font-weight: 500;
  overflow: hidden;
}
.gr-utility.hidden { transform: translateY(-100%); }
.gr-utility .uitem {
  color: rgba(245,240,235,0.75);
  display: inline-flex; gap: 10px; align-items: center;
}
.gr-utility .uitem + .uitem {
  margin-left: 22px; padding-left: 22px;
  border-left: 1px solid rgba(245,240,235,0.16);
}
.gr-utility .udot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--dorado);
  display: inline-block;
}

/* ---------- Main nav ---------- */
.gr-nav {
  position: fixed; left: 0; right: 0;
  top: 32px;
  height: 88px;
  z-index: 50;
  border-bottom: 1px solid transparent;
  transition: top var(--dur-normal) var(--ease-premium),
              background var(--dur-normal) var(--ease-premium),
              border-color var(--dur-normal) var(--ease-premium),
              backdrop-filter var(--dur-normal) var(--ease-premium);
}
.gr-nav.scrolled {
  top: 0;
  background: rgba(245, 240, 235, 0.88);
  backdrop-filter: blur(16px) saturate(140%);
  -webkit-backdrop-filter: blur(16px) saturate(140%);
  border-bottom-color: var(--hairline-strong);
}
.gr-nav.scrolled::before {
  content: "";
  position: absolute; inset: 0;
  pointer-events: none;
  opacity: 0.045;
  mix-blend-mode: multiply;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='220' height='220'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 0.067  0 0 0 0 0.067  0 0 0 0 0.067  0 0 0 1 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
  background-size: 220px 220px;
}
.gr-nav-inner {
  max-width: var(--container);
  height: 100%;
  margin: 0 auto;
  padding: 0 32px;
  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 24px;
  position: relative;
}

/* ---------- Logo ---------- */
.gr-logo {
  display: inline-flex; align-items: center; gap: 18px;
  text-decoration: none; border: 0;
  color: var(--carbon);
  justify-self: start;
  white-space: nowrap;
}
.gr-logo .gr-logo-img {
  height: 36px;
  width: auto;
  display: block;
  transition: opacity var(--dur-normal) var(--ease-premium);
}
.gr-logo:hover .gr-logo-img { opacity: 0.7; }
.gr-logo .gr-divider-v {
  display: none;
  width: 1px; height: 24px;
  background: var(--hairline-gold);
}
.gr-logo .gr-tagline {
  display: none;
  font-family: var(--font-body);
  font-size: 10px;
  letter-spacing: 0.24em;
  text-transform: uppercase;
  color: var(--piedra);
  font-weight: 500;
  white-space: nowrap;
}
@media (min-width: 1180px) {
  .gr-logo .gr-divider-v,
  .gr-logo .gr-tagline { display: inline-block; }
}

/* ---------- Links ---------- */
.gr-links {
  display: flex; align-items: center; gap: 0;
  justify-self: center;
  flex-wrap: nowrap;
}
.gr-link {
  font-family: var(--font-display);
  font-style: italic;
  font-size: 16px;
  line-height: 1;
  color: var(--carbon);
  text-decoration: none;
  border: 0;
  padding: 8px 20px;
  margin: 0;
  position: relative;
  letter-spacing: -0.005em;
  transition: color var(--dur-normal) var(--ease-premium);
  white-space: nowrap;
}
.gr-link::after {
  content: "";
  position: absolute;
  left: 50%; right: 50%; bottom: 0;
  height: 1px;
  background: var(--dorado);
  transition: left var(--dur-normal) var(--ease-premium),
              right var(--dur-normal) var(--ease-premium);
}
.gr-link:hover::after,
.gr-link.active::after {
  left: 20px; right: 20px;
}
.gr-link .first-letter {
  color: var(--dorado-suave);
  display: none;
}
.gr-link.active .first-letter { display: inline; }

.gr-link-sep {
  width: 1px; height: 12px;
  background: var(--hairline-gold);
  display: inline-block;
  flex-shrink: 0;
}

/* ---------- CTA ---------- */
.gr-cta-zone {
  display: inline-flex; align-items: center; gap: 18px;
  justify-self: end;
}
.gr-cta {
  display: inline-flex; align-items: center; gap: 10px;
  background: var(--carbon);
  color: var(--beige);
  padding: 13px 22px;
  font-family: var(--font-display);
  font-style: italic;
  font-size: 15px;
  line-height: 1;
  letter-spacing: -0.005em;
  border-radius: 4px;
  border: 0;
  cursor: pointer;
  text-decoration: none;
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.45);
  position: relative;
  white-space: nowrap;
  transition: box-shadow var(--dur-normal) var(--ease-premium),
              background var(--dur-normal) var(--ease-premium);
}
.gr-cta .gr-cta-label {
  position: relative;
  display: inline-block;
}
.gr-cta .gr-cta-label::after {
  content: "";
  position: absolute; left: 0; right: 0; bottom: -3px;
  height: 1px;
  background: var(--dorado);
  transform: scaleX(0);
  transform-origin: left center;
  transition: transform var(--dur-normal) var(--ease-premium);
}
.gr-cta .gr-cta-arrow {
  width: 14px; height: 14px;
  transition: transform var(--dur-micro) var(--ease-premium);
  flex-shrink: 0;
}
.gr-cta:hover {
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.85);
}
.gr-cta:hover .gr-cta-label::after { transform: scaleX(1); }
.gr-cta:hover .gr-cta-arrow { transform: translate(2px, -2px); }

.gr-nav.scrolled .gr-cta {
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.55),
              0 1px 2px rgba(17, 17, 17, 0.06),
              0 12px 30px -12px rgba(196, 164, 124, 0.45);
}
.gr-nav.scrolled .gr-cta:hover {
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.95),
              0 1px 2px rgba(17, 17, 17, 0.06),
              0 16px 36px -10px rgba(196, 164, 124, 0.55),
              0 0 0 1px rgba(196, 164, 124, 0.25);
}

/* ---------- Reading progress bar ---------- */
.gr-progress {
  position: absolute;
  left: 0; bottom: -1px;
  height: 1px;
  background: var(--dorado);
  width: 0%;
  transition: width 120ms linear;
  opacity: 0;
  transition: opacity var(--dur-normal) var(--ease-premium), width 120ms linear;
}
.gr-nav.scrolled .gr-progress { opacity: 1; }

/* ---------- Mobile toggle ---------- */
.gr-mobile-toggle {
  display: none;
  background: transparent;
  border: 0;
  cursor: pointer;
  font-family: var(--font-display);
  font-style: italic;
  font-size: 16px;
  color: var(--carbon);
  align-items: center;
  gap: 12px;
  justify-self: end;
  padding: 8px 4px;
}
.gr-mobile-toggle .gr-bars {
  display: inline-flex;
  flex-direction: column;
  gap: 5px;
}
.gr-mobile-toggle .gr-bar {
  width: 22px;
  height: 1px;
  background: var(--carbon);
}

@media (max-width: 767px) {
  .gr-mobile-toggle { display: inline-flex; }
  .gr-links, .gr-cta-zone { display: none; }
  .gr-nav-inner { grid-template-columns: 1fr auto; }
  .gr-utility .uitem:nth-child(1) { display: none; } /* hide leftmost util on small */
}

/* ---------- Mobile overlay ---------- */
.gr-overlay {
  position: fixed;
  inset: 0;
  z-index: 60;
  background: var(--carbon);
  display: flex;
  flex-direction: column;
  padding: 88px 32px 56px;
  opacity: 0;
  pointer-events: none;
  transition: opacity var(--dur-normal) var(--ease-premium);
}
.gr-overlay.open { opacity: 1; pointer-events: auto; }
.gr-overlay::before {
  content: "";
  position: absolute; inset: 0; pointer-events: none;
  opacity: 0.06; mix-blend-mode: screen;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='220' height='220'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.6 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
  background-size: 220px 220px;
}
.gr-overlay .gr-overlay-close {
  position: absolute;
  top: 28px; right: 32px;
  background: transparent; color: var(--beige); border: 0; cursor: pointer;
  font-family: var(--font-display); font-style: italic; font-size: 16px;
  display: inline-flex; align-items: center; gap: 10px;
}
.gr-overlay .gr-overlay-links {
  flex: 1;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  gap: 0;
}
.gr-overlay .gr-overlay-link {
  font-family: var(--font-display);
  font-style: italic;
  font-size: 44px;
  line-height: 1.05;
  color: var(--hueso);
  text-decoration: none; border: 0;
  padding: 18px 0;
  text-align: center;
  letter-spacing: -0.01em;
}
.gr-overlay .gr-overlay-link .first-letter {
  color: var(--dorado);
}
.gr-overlay .gr-overlay-divider {
  width: 30%;
  height: 1px;
  background: var(--dorado);
  opacity: 0.55;
}
.gr-overlay .gr-overlay-cta {
  align-self: center;
  margin-top: 32px;
  background: transparent;
  color: var(--beige);
  border: 1px solid var(--dorado);
  padding: 18px 36px;
  font-family: var(--font-display);
  font-style: italic;
  font-size: 18px;
  display: inline-flex; align-items: center; gap: 12px;
  cursor: pointer;
}

/* ===== page.css ===== */
/* ============================================================
   La Doctora — page-specific styles
   Layered on top of colors_and_type.css, kit.css, nav-premium.css
   ============================================================ */

/* ---------- Section rhythm ---------- */
.ld-section { padding: 96px 0; }
.ld-section.tinted { background: var(--hueso); }
.ld-section.cream { background: var(--beige); }
.ld-section.dark { background: var(--carbon); color: var(--fg-on-dark); }

.ld-container {
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 32px;
}
.ld-container-narrow {
  max-width: 720px;
  margin: 0 auto;
  padding: 0 32px;
}

/* ---------- Breadcrumb ---------- */
.ld-breadcrumb {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: 12px;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--fg-3);
  font-weight: 500;
}
.ld-breadcrumb a {
  color: var(--fg-3);
  border-bottom: none;
  transition: color var(--dur-micro) var(--ease-premium);
}
.ld-breadcrumb a:hover { color: var(--carbon); }
.ld-breadcrumb .sep { color: var(--piedra); opacity: 0.6; }
.ld-breadcrumb .current { color: var(--carbon); }

/* ============================================================
   HERO EDITORIAL
   ============================================================ */
.ld-hero {
  padding: 168px 0 96px;
  position: relative;
}
.ld-hero-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 32px;
}
.ld-hero-photo {
  position: relative;
  aspect-ratio: 3 / 4;
  border-radius: 4px;
  overflow: hidden;
  background: var(--gr-cream-deep);
  box-shadow: var(--elev-2);
}
.ld-hero-photo.has-image {
  /* Warm editorial backdrop layered behind the transparent portrait.
     Two tones: a soft beige base with a subtle vertical wash. */
  background:
    radial-gradient(ellipse 70% 50% at 50% 12%, rgba(196, 164, 124, 0.16), transparent 70%),
    linear-gradient(180deg, #ece4d9 0%, #d9ccba 100%);
}
.ld-hero-photo-backdrop {
  position: absolute; inset: 0;
  pointer-events: none;
  /* Soft floor gradient at the bottom so the figure feels grounded */
  background: linear-gradient(180deg, transparent 55%, rgba(155, 139, 122, 0.18) 100%);
}
.ld-hero-photo-img {
  position: absolute;
  bottom: -8%;
  left: 50%;
  transform: translateX(-50%) scale(1.2);
  transform-origin: bottom center;
  width: 108%;
  height: auto;
  object-fit: contain;
  /* Subtle warm cast so the cyan glove sits more inside the palette */
  filter: saturate(0.92) contrast(1.03);
  display: block;
}
.ld-hero-photo .ld-hero-photo-inner {
  position: absolute; inset: 0;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  gap: 18px; padding: 32px;
  color: var(--piedra);
  text-align: center;
}
.ld-hero-photo .ph-icon {
  width: 56px; height: 56px;
  border: 1px solid currentColor;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display); font-size: 28px;
  opacity: 0.55;
}
.ld-hero-photo .ph-label {
  font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--piedra); opacity: 0.85; font-weight: 500;
}
.ld-hero-photo .ph-caption {
  max-width: 30ch; font-size: 13px; line-height: 1.55; color: var(--piedra);
  font-style: italic;
}
.ld-hero-photo-frame {
  position: absolute; inset: 16px;
  border: 1px solid rgba(196, 164, 124, 0.4);
  pointer-events: none;
  border-radius: 2px;
}
.ld-hero-photo-stamp {
  position: absolute;
  left: 24px; bottom: 24px;
  background: rgba(245, 240, 235, 0.94);
  backdrop-filter: blur(8px);
  padding: 10px 14px;
  font-size: 9px; letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--carbon); font-weight: 500;
  border: 1px solid rgba(196, 164, 124, 0.45);
  display: inline-flex; align-items: center; gap: 8px;
}
.ld-hero-photo-stamp .stamp-glyph {
  font-family: var(--font-display); font-size: 14px; line-height: 1;
  color: var(--dorado);
}

.ld-hero-text { display: flex; flex-direction: column; gap: 24px; }
.ld-hero-eyebrow {
  font-size: 11px; letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--dorado); font-weight: 500;
}
.ld-hero-h1 {
  font-family: var(--font-display);
  font-size: clamp(2.5rem, 4vw + 0.5rem, 4rem);
  line-height: 1.05;
  letter-spacing: -0.015em;
  color: var(--carbon);
  margin: 0;
  max-width: 14ch;
  text-wrap: balance;
}
.ld-hero-h1 .accent { color: var(--dorado); }
.ld-hero-h1 em {
  font-style: italic;
  font-family: var(--font-display);
}

.ld-hero-subtitle {
  font-family: var(--font-body);
  font-size: 17px;
  font-weight: 500;
  letter-spacing: 0.04em;
  color: var(--dorado);
  display: inline-flex; align-items: center; gap: 12px;
  margin: 0;
}
.ld-hero-subtitle .glyph {
  display: inline-block;
  width: 28px; height: 1px; background: var(--dorado);
}

.ld-hero-lead {
  font-size: 17px;
  line-height: 1.65;
  color: var(--fg-2);
  max-width: 48ch;
  margin: 0;
}

.ld-hero-badges {
  display: flex; flex-wrap: wrap; gap: 10px;
  margin-top: 8px;
}
.ld-hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 9px 14px;
  border-radius: 999px;
  background: var(--hueso);
  color: var(--carbon);
  font-size: 10.5px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  font-weight: 500;
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.55);
}
.ld-hero-badge .glyph {
  color: var(--dorado);
  font-family: var(--font-display);
  font-size: 13px;
  line-height: 0.9;
}
.ld-hero-badge .num {
  font-family: var(--font-display);
  font-size: 14px;
  letter-spacing: 0;
  color: var(--dorado);
  font-weight: 400;
  margin-right: 2px;
}

.ld-hero-ctas {
  display: flex; align-items: center; flex-wrap: wrap; gap: 24px;
  margin-top: 8px;
}
.ld-btn-primary {
  display: inline-flex; align-items: center; gap: 12px;
  padding: 16px 26px;
  background: var(--carbon);
  color: var(--hueso);
  font-family: var(--font-body);
  font-size: 14px;
  letter-spacing: 0.04em;
  font-weight: 500;
  border: 0;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.4);
  transition: background var(--dur-normal) var(--ease-premium),
              box-shadow var(--dur-normal) var(--ease-premium),
              transform var(--dur-micro) var(--ease-premium);
  text-decoration: none;
}
.ld-btn-primary:hover {
  background: var(--gr-ink-70);
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.85), var(--elev-4);
}
.ld-btn-primary:active { transform: translateY(1px); }
.ld-btn-primary svg { width: 16px; height: 16px; }

.ld-btn-ghost {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-body);
  font-size: 14px;
  color: var(--carbon);
  background: none;
  border: 0;
  cursor: pointer;
  padding: 4px 0;
  border-bottom: 1px solid var(--carbon);
  transition: color var(--dur-micro) var(--ease-premium),
              border-color var(--dur-micro) var(--ease-premium);
  text-decoration: none;
}
.ld-btn-ghost:hover { color: var(--gr-gold-deep); border-bottom-color: var(--gr-gold-deep); }

/* ============================================================
   BIO NARRATIVE
   ============================================================ */
.ld-bio-eyebrow-wrap {
  text-align: center;
  margin-bottom: 14px;
}
.ld-bio-h2 {
  font-family: var(--font-display);
  font-size: clamp(2rem, 2.6vw + 0.6rem, 3rem);
  line-height: 1.1;
  text-align: center;
  letter-spacing: -0.01em;
  color: var(--carbon);
  margin: 0 0 64px;
  text-wrap: balance;
}
.ld-bio-h2 .accent { color: var(--dorado); }
.ld-bio-paragraphs {
  display: flex; flex-direction: column;
  gap: 32px;
  font-size: 17px;
  line-height: 1.85;
  color: var(--gr-ink-70);
}
.ld-bio-paragraphs p {
  margin: 0;
  max-width: none;
}
.ld-bio-paragraphs .dropcap::first-letter {
  font-family: var(--font-display);
  font-size: 4.2em;
  line-height: 0.9;
  float: left;
  margin: 0.06em 0.14em 0 -0.04em;
  color: var(--carbon);
}
.ld-bio-divider {
  display: block;
  width: 48px; height: 1px;
  background: var(--dorado);
  margin: 12px auto;
  opacity: 0.7;
}

/* Inline link inside bio */
.ld-bio-paragraphs a {
  color: var(--carbon);
  border-bottom: 1px solid var(--dorado);
  transition: color var(--dur-micro) var(--ease-premium);
}
.ld-bio-paragraphs a:hover { color: var(--dorado); }

/* ============================================================
   TIMELINE (Formación) + Associations
   ============================================================ */
.ld-trayectoria-header {
  text-align: center;
  display: flex; flex-direction: column; align-items: center; gap: 14px;
  margin-bottom: 64px;
}
.ld-trayectoria-header h2 {
  font-family: var(--font-display);
  font-size: clamp(2rem, 2.6vw + 0.6rem, 3rem);
  line-height: 1.1;
  letter-spacing: -0.01em;
  margin: 0;
  max-width: 22ch;
  text-wrap: balance;
}
.ld-trayectoria-header h2 .accent { color: var(--dorado); }
.ld-trayectoria-header .lead {
  font-size: 16px;
  line-height: 1.65;
  color: var(--gr-ink-70);
  max-width: 56ch;
  margin: 0 auto;
}

/* ----- Timeline ----- */
.ld-timeline {
  position: relative;
  max-width: 920px;
  margin: 0 auto;
  padding: 16px 0 48px;
}
.ld-timeline::before {
  content: "";
  position: absolute;
  left: 50%; top: 0; bottom: 0;
  width: 1px;
  background: linear-gradient(to bottom,
    transparent 0%, var(--hairline-strong) 8%, var(--hairline-strong) 92%, transparent 100%);
  transform: translateX(-0.5px);
}
.ld-timeline-row {
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  margin-bottom: 56px;
  opacity: 0;
  transform: translateY(12px);
  transition: opacity 640ms var(--ease-premium), transform 640ms var(--ease-premium);
}
.ld-timeline-row.in { opacity: 1; transform: translateY(0); }

.ld-timeline-dot {
  position: absolute;
  left: 50%; top: 18px;
  width: 14px; height: 14px;
  background: var(--beige);
  border: 1px solid var(--dorado);
  border-radius: 50%;
  transform: translateX(-50%);
  z-index: 1;
  transition: background var(--dur-normal) var(--ease-premium),
              box-shadow var(--dur-normal) var(--ease-premium);
}
.ld-timeline-row.diamond .ld-timeline-dot {
  background: var(--dorado);
  box-shadow: 0 0 0 6px rgba(196, 164, 124, 0.18);
}
.ld-timeline-card {
  background: var(--bg-3);
  border: 1px solid var(--hairline);
  border-radius: 8px 8px 4px 4px;
  padding: 26px 28px;
  display: flex; flex-direction: column; gap: 8px;
  position: relative;
}
.ld-timeline-card::before {
  content: "";
  position: absolute;
  top: 24px;
  width: 32px; height: 1px;
  background: var(--hairline);
}
.ld-timeline-row.left .ld-timeline-card { grid-column: 1; }
.ld-timeline-row.left .ld-timeline-card::before { right: -32px; }
.ld-timeline-row.right .ld-timeline-card { grid-column: 2; }
.ld-timeline-row.right .ld-timeline-card::before { left: -32px; }

.ld-timeline-year {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-display);
  font-size: 22px;
  color: var(--dorado);
  letter-spacing: 0;
  line-height: 1;
  margin-bottom: 4px;
}
.ld-timeline-year .badge {
  display: inline-block;
  margin-left: 6px;
  padding: 4px 10px;
  border-radius: 999px;
  background: rgba(196, 164, 124, 0.14);
  color: var(--gr-gold-deep);
  font-family: var(--font-body);
  font-size: 9.5px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  font-weight: 500;
}
.ld-timeline-title {
  font-family: var(--font-body);
  font-size: 16px;
  font-weight: 500;
  color: var(--carbon);
  letter-spacing: 0.01em;
  margin: 0;
}
.ld-timeline-org {
  font-size: 13px;
  color: var(--piedra);
  letter-spacing: 0.04em;
  margin: 0;
}
.ld-timeline-desc {
  font-size: 13.5px;
  line-height: 1.6;
  color: var(--gr-ink-70);
  margin: 6px 0 0;
}

.ld-timeline-continuing {
  text-align: center;
  margin-top: 32px;
  padding-top: 48px;
  border-top: 1px solid var(--hairline);
  max-width: 600px;
  margin-left: auto; margin-right: auto;
}
.ld-timeline-continuing h4 {
  font-family: var(--font-body);
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--carbon);
  margin: 0 0 14px;
}
.ld-timeline-continuing p {
  font-size: 13.5px;
  line-height: 1.7;
  color: var(--piedra);
  margin: 0 auto;
  max-width: none;
}

/* ----- Associations grid ----- */
.ld-assoc-wrap {
  margin-top: 80px;
  padding-top: 64px;
  border-top: 1px solid var(--hairline);
}
.ld-assoc-header {
  text-align: center;
  margin-bottom: 48px;
}
.ld-assoc-header .eyebrow { color: var(--dorado); margin-bottom: 10px; display: block; }
.ld-assoc-header h3 {
  font-family: var(--font-display);
  font-size: 28px;
  margin: 0;
  letter-spacing: -0.005em;
  color: var(--carbon);
}
.ld-assoc-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 24px;
  max-width: 960px;
  margin: 0 auto;
}
.ld-assoc-card {
  background: var(--bg-3);
  border: 1px solid var(--hairline);
  border-radius: 8px 8px 4px 4px;
  padding: 32px;
  display: flex; flex-direction: column; gap: 14px;
  transition: transform var(--dur-normal) var(--ease-premium),
              box-shadow var(--dur-normal) var(--ease-premium),
              border-color var(--dur-normal) var(--ease-premium);
}
.ld-assoc-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--elev-2);
  border-color: rgba(196, 164, 124, 0.4);
}
.ld-assoc-logo {
  height: 36px;
  display: flex; align-items: center;
  margin-bottom: 4px;
}
.ld-assoc-logo .logo-mark {
  display: inline-flex;
  align-items: center; justify-content: center;
  height: 32px; min-width: 32px; padding: 0 10px;
  border: 1px solid var(--hairline-strong);
  border-radius: 4px;
  font-family: var(--font-display);
  font-size: 16px;
  color: var(--carbon);
  letter-spacing: 0.02em;
  filter: grayscale(1);
  opacity: 0.85;
  transition: filter var(--dur-normal) var(--ease-premium),
              opacity var(--dur-normal) var(--ease-premium),
              color var(--dur-normal) var(--ease-premium),
              border-color var(--dur-normal) var(--ease-premium);
}
.ld-assoc-card:hover .logo-mark {
  filter: grayscale(0);
  opacity: 1;
  color: var(--dorado);
  border-color: var(--dorado);
}
.ld-assoc-card h4 {
  font-family: var(--font-body);
  font-size: 15px;
  font-weight: 500;
  color: var(--carbon);
  margin: 0;
  letter-spacing: 0.01em;
}
.ld-assoc-card .full-name {
  font-size: 13px;
  color: var(--piedra);
  margin: 0;
  letter-spacing: 0.01em;
}
.ld-assoc-card p {
  font-size: 13.5px;
  line-height: 1.6;
  color: var(--gr-ink-70);
  margin: 4px 0 0;
}
.ld-assoc-card .registro {
  margin-top: 12px;
  padding-top: 14px;
  border-top: 1px dashed var(--hairline-strong);
  font-size: 11px;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--dorado);
  font-weight: 500;
}
.ld-assoc-card .registro span { color: var(--carbon); font-family: var(--font-display); font-size: 14px; letter-spacing: 0; text-transform: none; margin-left: 4px; }

/* ============================================================
   PHILOSOPHY QUOTE + TEAM (optional)
   ============================================================ */
.ld-philo-card {
  max-width: 880px;
  margin: 0 auto;
  background: var(--hueso);
  border: 1px solid var(--hairline);
  border-left: 3px solid var(--dorado);
  border-radius: 0 16px 16px 0;
  padding: 64px 72px;
  box-shadow: var(--elev-1);
  position: relative;
}
.ld-philo-card .ld-philo-eyebrow {
  font-size: 11px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--dorado);
  font-weight: 500;
  text-align: center;
  display: block;
  margin-bottom: 28px;
}
.ld-philo-quote {
  font-family: var(--font-display);
  font-style: italic;
  font-size: clamp(1.5rem, 2.2vw + 0.6rem, 2.25rem);
  line-height: 1.3;
  text-align: center;
  color: var(--carbon);
  margin: 0;
  max-width: 26ch;
  margin-left: auto; margin-right: auto;
  text-wrap: balance;
}
.ld-philo-quote .open, .ld-philo-quote .close {
  font-family: var(--font-display);
  color: var(--dorado);
  font-style: italic;
  display: inline;
}
.ld-philo-attrib {
  display: flex; align-items: center; justify-content: center; gap: 14px;
  margin-top: 36px;
}
.ld-philo-attrib .rule {
  display: inline-block;
  width: 24px; height: 1px; background: var(--dorado);
}
.ld-philo-attrib .name {
  font-family: var(--font-body);
  font-size: 12px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--piedra);
  font-weight: 500;
  font-style: italic;
}

/* ============================================================
   GALLERY
   ============================================================ */
.ld-gallery-header {
  text-align: center;
  margin-bottom: 56px;
}
.ld-gallery-header .eyebrow { display: block; margin-bottom: 12px; color: var(--dorado); }
.ld-gallery-header h2 {
  font-family: var(--font-display);
  font-size: clamp(2rem, 2.6vw + 0.6rem, 3rem);
  line-height: 1.1;
  letter-spacing: -0.01em;
  margin: 0 0 14px;
  text-wrap: balance;
}
.ld-gallery-header p {
  font-size: 16px;
  line-height: 1.65;
  color: var(--gr-ink-70);
  max-width: 56ch;
  margin: 0 auto;
}

.ld-masonry {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  grid-auto-rows: 100px;
  gap: 18px;
}
.ld-mason-item {
  position: relative;
  overflow: hidden;
  border-radius: 6px;
  background: var(--gr-cream-deep);
  border: 1px solid var(--hairline);
}
.ld-mason-item .inner {
  position: absolute; inset: 0;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  gap: 10px; padding: 24px;
  color: var(--piedra);
  text-align: center;
  font-size: 12px;
  line-height: 1.5;
  transition: transform 350ms var(--ease-premium);
}
.ld-mason-item:hover .inner { transform: scale(1.03); }
.ld-mason-item .ph-icon {
  width: 36px; height: 36px;
  border: 1px solid currentColor;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display); font-size: 18px;
  opacity: 0.55;
}
.ld-mason-item .ph-label {
  font-size: 10px;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--piedra);
  font-weight: 500;
}
.ld-mason-item .ph-caption {
  font-size: 11px;
  line-height: 1.5;
  font-style: italic;
  max-width: 28ch;
  color: var(--piedra);
  opacity: 0.85;
}
.ld-mason-item .number {
  position: absolute;
  top: 12px; left: 14px;
  font-family: var(--font-display);
  font-size: 13px;
  color: var(--dorado);
  letter-spacing: 0;
  opacity: 0.85;
}

/* Asymmetric layout per design — 12-col grid */
.ld-mason-item.a { grid-column: span 5; grid-row: span 5; }    /* tall portrait recepción */
.ld-mason-item.b { grid-column: span 7; grid-row: span 3; }    /* wide horizontal sala */
.ld-mason-item.c { grid-column: span 4; grid-row: span 3; }    /* square clincheck */
.ld-mason-item.d { grid-column: span 3; grid-row: span 4; }    /* portrait itero */
.ld-mason-item.e { grid-column: span 5; grid-row: span 4; }    /* wide manos */
.ld-mason-item.f { grid-column: span 7; grid-row: span 3; }    /* wide espera */

/* Image-filled masonry items */
.ld-mason-item.has-image > img {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover; display: block;
  transition: transform 600ms var(--ease-premium);
  z-index: 0;
}
.ld-mason-item.has-image:hover > img { transform: scale(1.04); }
.ld-mason-item.has-image .inner {
  background: linear-gradient(180deg, rgba(17,17,17,0) 40%, rgba(17,17,17,0.65) 100%);
  justify-content: flex-end; align-items: flex-start; text-align: left;
  padding: 22px;
  z-index: 1;
}
.ld-mason-item.has-image .ph-icon { display: none; }
.ld-mason-item.has-image .ph-label,
.ld-mason-item.has-image .ph-caption { color: #faf6f1; }
.ld-mason-item.has-image .ph-caption { font-style: italic; opacity: 0.92; max-width: 32ch; }
.ld-mason-item.has-image .number { color: var(--dorado); text-shadow: 0 1px 4px rgba(17,17,17,0.55); z-index: 2; }

/* ============================================================
   TECNOLOGÍA — tools & equipment cards
   ============================================================ */
.ld-tech-header { text-align: center; margin-bottom: 56px; }
.ld-tech-header .eyebrow { color: var(--dorado); margin-bottom: 14px; display: inline-block; }
.ld-tech-header h2 { font-family: var(--font-display); font-size: clamp(2rem, 2.4vw + 0.8rem, 3rem); line-height: 1.1; color: var(--carbon); margin: 0 0 16px; letter-spacing: -0.01em; }
.ld-tech-header h2 .accent { color: var(--dorado); font-style: italic; }
.ld-tech-header p { color: var(--gr-ink-70); font-size: 17px; line-height: 1.65; max-width: 56ch; margin: 0 auto; }

.ld-tech-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
}
@media (max-width: 900px) { .ld-tech-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .ld-tech-grid { grid-template-columns: 1fr; } }

.ld-tech-card {
  background: #fff;
  border: 1px solid var(--hairline);
  border-radius: 8px;
  overflow: hidden;
  display: flex; flex-direction: column;
  transition: transform 400ms var(--ease-premium), box-shadow 400ms var(--ease-premium), border-color 400ms var(--ease-premium);
}
.ld-tech-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 24px 48px -24px rgba(17,17,17,.18);
  border-color: var(--hairline-gold);
}
.ld-tech-card .tech-img {
  aspect-ratio: 4 / 3;
  background: var(--gr-cream-deep);
  overflow: hidden; position: relative;
}
.ld-tech-card .tech-img img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  transition: transform 700ms var(--ease-premium);
}
.ld-tech-card:hover .tech-img img { transform: scale(1.05); }
.ld-tech-card .tech-pill {
  position: absolute; top: 14px; left: 14px;
  padding: 6px 12px; background: rgba(17,17,17,0.85); color: var(--beige);
  border-radius: 999px; font-size: 10px; letter-spacing: .18em;
  text-transform: uppercase; font-weight: 500;
}
.ld-tech-card .tech-body { padding: 24px 24px 26px; display: flex; flex-direction: column; gap: 10px; }
.ld-tech-card .tech-eyebrow {
  font-size: 11px; letter-spacing: .22em; text-transform: uppercase;
  color: var(--dorado); font-weight: 500;
}
.ld-tech-card h3 {
  font-family: var(--font-display); font-size: 1.35rem;
  line-height: 1.2; color: var(--carbon); margin: 0;
  letter-spacing: -0.005em;
}
.ld-tech-card p {
  color: var(--gr-ink-70); font-size: 14.5px; line-height: 1.65; margin: 0;
}

/* ============================================================
   FINAL CTA + Signature
   ============================================================ */
.ld-cta-wrap {
  margin-top: 96px;
}
.ld-cta-block {
  background: var(--carbon);
  color: var(--fg-on-dark);
  border-radius: 12px;
  padding: 96px 64px;
  text-align: center;
  max-width: 1080px;
  margin: 0 auto;
  position: relative;
  overflow: hidden;
}
.ld-cta-block::before {
  content: "";
  position: absolute; inset: 0;
  background: radial-gradient(ellipse at top, rgba(196, 164, 124, 0.10), transparent 60%);
  pointer-events: none;
}
.ld-cta-block .eyebrow {
  color: var(--dorado);
  display: block;
  margin-bottom: 18px;
}
.ld-cta-block h2 {
  font-family: var(--font-display);
  font-size: clamp(2.25rem, 3vw + 0.6rem, 3.5rem);
  line-height: 1.05;
  letter-spacing: -0.01em;
  color: var(--hueso);
  margin: 0 auto 24px;
  max-width: 16ch;
  text-wrap: balance;
}
.ld-cta-block h2 .accent { color: var(--dorado); font-style: italic; }
.ld-cta-block p {
  font-size: 16px;
  line-height: 1.65;
  color: rgba(245, 240, 235, 0.72);
  max-width: 52ch;
  margin: 0 auto 48px;
}
.ld-cta-block .actions {
  display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 16px;
  position: relative;
}
.ld-btn-on-dark-primary {
  display: inline-flex; align-items: center; gap: 12px;
  padding: 18px 36px;
  background: var(--hueso);
  color: var(--carbon);
  font-family: var(--font-body);
  font-size: 15px;
  letter-spacing: 0.04em;
  font-weight: 500;
  border: 0;
  border-radius: 999px;
  cursor: pointer;
  text-decoration: none;
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.45),
              0 12px 30px -12px rgba(196, 164, 124, 0.5);
  animation: ld-pulse 4.5s ease-in-out infinite;
  transition: transform var(--dur-micro) var(--ease-premium),
              background var(--dur-normal) var(--ease-premium),
              box-shadow var(--dur-normal) var(--ease-premium);
}
.ld-btn-on-dark-primary:hover {
  background: #fff;
  box-shadow: inset 0 0 0 1px rgba(196, 164, 124, 0.85),
              0 18px 38px -10px rgba(196, 164, 124, 0.55);
  animation-play-state: paused;
}
.ld-btn-on-dark-primary:active { transform: translateY(1px); }
.ld-btn-on-dark-primary svg { width: 16px; height: 16px; }

@keyframes ld-pulse {
  0%, 100% { transform: scale(1); }
  50%      { transform: scale(1.02); }
}
@media (prefers-reduced-motion: reduce) {
  .ld-btn-on-dark-primary { animation: none; }
}

.ld-whatsapp-link {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-body);
  font-size: 14px;
  color: rgba(245, 240, 235, 0.78);
  text-decoration: none;
  padding: 6px 0;
  border-bottom: 1px solid transparent;
  transition: color var(--dur-micro) var(--ease-premium),
              border-color var(--dur-micro) var(--ease-premium);
}
.ld-whatsapp-link:hover { color: var(--hueso); border-bottom-color: rgba(245, 240, 235, 0.6); }
.ld-whatsapp-link svg { width: 16px; height: 16px; }

.ld-signature-wrap {
  margin-top: 72px;
  display: flex; flex-direction: column; align-items: center; gap: 8px;
  position: relative;
}
.ld-signature-wrap::before {
  content: "";
  display: block;
  width: 40px; height: 1px;
  background: rgba(245, 240, 235, 0.3);
  margin-bottom: 24px;
}
.ld-signature-lead {
  font-family: var(--font-body);
  font-size: 13px;
  color: rgba(245, 240, 235, 0.6);
  letter-spacing: 0.06em;
  font-style: italic;
  margin: 0;
}
.ld-signature {
  font-family: var(--font-script);
  font-size: clamp(2.25rem, 3.5vw + 0.5rem, 3rem);
  color: var(--hueso);
  line-height: 1;
  margin: 0;
  padding-top: 6px;
  letter-spacing: 0.01em;
}
.ld-signature-meta {
  font-family: var(--font-body);
  font-size: 11px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: rgba(196, 164, 124, 0.85);
  font-weight: 500;
  margin-top: 14px;
}

/* ============================================================
   FOOTER (compact)
   ============================================================ */
.ld-footer {
  background: var(--carbon);
  color: var(--hueso);
  padding: 72px 32px 36px;
  border-top: 1px solid rgba(196, 164, 124, 0.18);
}
.ld-footer-inner {
  max-width: var(--container);
  margin: 0 auto;
}
.ld-footer-top {
  display: grid;
  grid-template-columns: 1.6fr 1fr 1fr 1fr;
  gap: 56px;
  padding-bottom: 56px;
  border-bottom: 1px solid rgba(245, 240, 235, 0.12);
}
.ld-footer-top img.logo { height: 40px; margin-bottom: 22px; }
.ld-footer-top .blurb {
  color: rgba(245, 240, 235, 0.7);
  font-size: 14px; line-height: 1.6; max-width: 32ch; margin: 0;
}
.ld-footer-col .label {
  font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase;
  color: var(--dorado); margin-bottom: 18px; font-weight: 500;
}
.ld-footer-col ul { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; }
.ld-footer-col a {
  color: rgba(245, 240, 235, 0.78); border: 0; font-size: 14px;
  transition: color var(--dur-micro) var(--ease-premium);
}
.ld-footer-col a:hover { color: var(--hueso); }
.ld-footer-bot {
  display: flex; justify-content: space-between; align-items: center;
  padding-top: 28px; flex-wrap: wrap; gap: 16px;
}
.ld-footer-bot .copy { font-size: 12px; color: rgba(245, 240, 235, 0.5); }
.ld-footer-bot .sig { font-family: var(--font-script); font-size: 26px; color: var(--dorado); }

/* ============================================================
   Reveal helpers (Intersection Observer driven)
   ============================================================ */
.r-fade { opacity: 0; transform: translateY(8px); transition: opacity 640ms var(--ease-premium), transform 640ms var(--ease-premium); }
.r-fade.in { opacity: 1; transform: translateY(0); }

.r-fade-slow { opacity: 0; transform: translateY(8px); transition: opacity 800ms var(--ease-premium), transform 800ms var(--ease-premium); }
.r-fade-slow.in { opacity: 1; transform: translateY(0); }

@media (prefers-reduced-motion: reduce) {
  .r-fade, .r-fade-slow, .ld-timeline-row {
    opacity: 1 !important; transform: none !important; transition: none !important;
  }
}

/* ============================================================
   Responsive
   ============================================================ */
@media (max-width: 920px) {
  .ld-section { padding: 72px 0; }
  .ld-hero { padding: 140px 0 56px; }
  .ld-hero-grid { grid-template-columns: 1fr; gap: 40px; }
  .ld-hero-photo { aspect-ratio: 3 / 4; }
  .ld-hero-h1 { max-width: none; }
  .ld-hero-badges { gap: 8px; }
  .ld-hero-ctas { gap: 16px; }
  .ld-bio-paragraphs { font-size: 16px; line-height: 1.8; }
  .ld-bio-paragraphs .dropcap::first-letter { font-size: 3.6em; }

  /* Timeline: single column, line on left */
  .ld-timeline::before { left: 14px; transform: none; }
  .ld-timeline-row { grid-template-columns: 1fr; gap: 12px; padding-left: 40px; }
  .ld-timeline-dot { left: 14px; top: 22px; transform: translateX(-50%); }
  .ld-timeline-row.left .ld-timeline-card,
  .ld-timeline-row.right .ld-timeline-card { grid-column: 1; }
  .ld-timeline-row .ld-timeline-card::before { display: none; }

  .ld-assoc-grid { grid-template-columns: 1fr; }

  .ld-philo-card { padding: 40px 28px; border-radius: 0 12px 12px 0; }

  .ld-masonry { grid-template-columns: repeat(2, 1fr); grid-auto-rows: 140px; }
  .ld-mason-item.a, .ld-mason-item.b, .ld-mason-item.c,
  .ld-mason-item.d, .ld-mason-item.e, .ld-mason-item.f {
    grid-column: span 1; grid-row: span 2;
  }
  .ld-mason-item.a, .ld-mason-item.e { grid-row: span 3; }

  .ld-cta-block { padding: 64px 28px; border-radius: 8px; }
  .ld-cta-block p { margin-bottom: 36px; }

  .ld-footer-top { grid-template-columns: 1fr 1fr; gap: 36px; }
}

@media (max-width: 560px) {
  .ld-hero { padding: 120px 0 48px; }
  .ld-hero-grid { padding: 0 20px; gap: 32px; }
  .ld-container, .ld-container-narrow { padding: 0 20px; }
  .ld-section { padding: 64px 0; }
  .ld-hero-photo-stamp { left: 12px; bottom: 12px; }
  .ld-hero-ctas { flex-direction: column; align-items: flex-start; }
  .ld-btn-primary { width: 100%; justify-content: center; }
  .ld-hero-badges .ld-hero-badge { font-size: 9.5px; padding: 7px 12px; }
  .ld-philo-quote { font-size: 1.4rem; }
  .ld-masonry { grid-template-columns: 1fr; }
  .ld-mason-item.a, .ld-mason-item.b, .ld-mason-item.c,
  .ld-mason-item.d, .ld-mason-item.e, .ld-mason-item.f {
    grid-column: 1; grid-row: span 2;
  }
  .ld-footer-top { grid-template-columns: 1fr; }
  .ld-footer-bot { flex-direction: column; align-items: flex-start; }
}


/* ============================================================
   FOOTER UNIFICADO — inyectado para asegurar estilos consistentes
   ============================================================ */
footer{
  background:#111111;
  color:#f5f0eb;
  padding:80px 32px 40px;
  font-family:"General Sans","Inter",system-ui,-apple-system,sans-serif;
}
.iv-footer-inner{ max-width:1200px; margin:0 auto; }
.iv-footer-grid{
  display:grid;
  grid-template-columns:1.4fr 1fr 1fr 1fr;
  gap:48px;
  padding-bottom:56px;
  border-bottom:1px solid rgba(245,240,235,.16);
}
.iv-footer-grid > div{ min-width:0; }
.iv-footer-logo{ height:70px; width:auto; margin-bottom:24px; display:block; }
.iv-footer-grid .lead{ color:rgba(245,240,235,.7); font-size:14px; line-height:1.6; max-width:32ch; margin:0; }
.iv-footer-col-label{ font-size:11px; letter-spacing:.18em; text-transform:uppercase; color:#c4a47c; margin-bottom:18px; font-weight:500; }
.iv-footer-grid ul{ list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px; }
.iv-footer-grid ul li{ list-style:none; }
.iv-footer-grid ul a{ color:rgba(245,240,235,.8); font-size:14px; text-decoration:none; transition:color 260ms cubic-bezier(.22,1,.36,1); }
.iv-footer-grid ul a:hover{ color:#c4a47c; }
.iv-footer-bottom{ display:flex; justify-content:space-between; align-items:center; padding-top:28px; gap:16px; flex-wrap:wrap; }
.iv-footer-bottom .copy{ font-size:12px; color:rgba(245,240,235,.5); }
.iv-footer-bottom .script{ font-family:"DM Serif Display","Cormorant Garamond",Georgia,serif; font-size:17px; color:#c4a47c; }
@media(max-width:1024px){ .iv-footer-grid{ grid-template-columns:1fr 1fr; gap:32px; } }
@media(max-width:767px){ .iv-footer-grid{ grid-template-columns:1fr; } footer{ padding:56px 24px 32px; } }
@media(max-width:600px){
  footer{ padding:56px 20px 28px; }
  .iv-footer-grid{ padding-bottom:36px; gap:28px; }
  .iv-footer-logo{ height:38px; margin-bottom:18px; }
  .iv-footer-grid .lead{ font-size:13.5px; }
  .iv-footer-col-label{ font-size:10.5px; margin-bottom:14px; }
  .iv-footer-grid ul a{ font-size:13.5px; }
  .iv-footer-bottom{ flex-direction:column; align-items:flex-start; gap:10px; padding-top:22px; }
  .iv-footer-bottom .script{ font-size:21px; }
}
@media(max-width:380px){ footer{ padding:48px 16px 24px; } }

</style>

<style>
/* ===== Header estandarizado (mismo de todas las páginas) ===== */
.skip-link{position:absolute; left:-9999px; top:0; background:#111; color:#faf6f1; padding:12px 18px; z-index:10000; font-family:var(--font-body); font-weight:500; font-size:14px; border-radius:4px; box-shadow:inset 0 0 0 1px #c4a47c;}
.skip-link:focus{left:16px; top:16px; outline:2px solid #c4a47c;}
.gr-utility{position:fixed; top:0; left:0; right:0; height:32px; background:#111; color:#f5f0eb; display:flex; align-items:center; justify-content:flex-end; padding:0 32px; z-index:51; transition:transform var(--dur-normal) var(--ease-premium); font-family:var(--font-body); font-size:10px; letter-spacing:.24em; text-transform:uppercase; font-weight:500; overflow:hidden;}
.gr-utility.hidden{transform:translateY(-100%);}
.gr-utility .uitem{color:rgba(245,240,235,.75); display:inline-flex; gap:10px; align-items:center; border:0; text-decoration:none;}
.gr-utility .uitem+.uitem{margin-left:22px; padding-left:22px; border-left:1px solid rgba(245,240,235,.16);}
.gr-utility .udot{width:6px; height:6px; border-radius:50%; background:#c4a47c; display:inline-block;}
.gr-nav{position:fixed; left:0; right:0; top:32px; height:88px; z-index:50; border-bottom:1px solid transparent; transition:top var(--dur-normal) var(--ease-premium), background var(--dur-normal) var(--ease-premium), border-color var(--dur-normal) var(--ease-premium), backdrop-filter var(--dur-normal) var(--ease-premium);}
.gr-nav.scrolled{top:0; background:rgba(245,240,235,.88); backdrop-filter:blur(16px) saturate(140%); -webkit-backdrop-filter:blur(16px) saturate(140%); border-bottom-color:rgba(17,17,17,.14);}
.gr-nav-inner{max-width:1200px; height:100%; margin:0 auto; padding:0 32px; display:grid; grid-template-columns:auto 1fr auto; align-items:center; gap:24px; position:relative;}
.gr-logo{display:inline-flex; align-items:center; gap:18px; color:#111; justify-self:start; white-space:nowrap; text-decoration:none; border:0;}
.gr-logo .gr-logo-img{height:46px; width:auto; display:block; transition:opacity var(--dur-normal) var(--ease-premium);}
.gr-logo:hover .gr-logo-img{opacity:.7;}
.gr-logo .gr-divider-v{display:none; width:1px; height:24px; background:rgba(196,164,124,.55);}
.gr-logo .gr-tagline{display:none; font-family:var(--font-body); font-size:10px; letter-spacing:.24em; text-transform:uppercase; color:#9b8b7a; font-weight:500; white-space:nowrap;}
@media(min-width:1180px){.gr-logo .gr-divider-v, .gr-logo .gr-tagline{display:inline-block;}}
.gr-links{display:flex; align-items:center; gap:0; justify-self:center; flex-wrap:nowrap;}
.gr-link{font-family:var(--font-body); font-style:normal; font-weight:500; font-size:14px; line-height:1; color:#111; padding:8px 20px; position:relative; letter-spacing:.02em; white-space:nowrap; text-decoration:none; border:0;}
.gr-link::after{content:""; position:absolute; left:50%; right:50%; bottom:0; height:1px; background:#c4a47c; transition:left var(--dur-normal) var(--ease-premium), right var(--dur-normal) var(--ease-premium);}
.gr-link:hover::after, .gr-link.active::after{left:20px; right:20px;}
.gr-link .first-letter{display:none;}
.gr-link.active .first-letter{display:inline;}
.gr-link-sep{width:1px; height:12px; background:rgba(196,164,124,.55); display:inline-block; flex-shrink:0;}
.gr-cta-zone{display:inline-flex; align-items:center; gap:18px; justify-self:end;}
.gr-cta{display:inline-flex; align-items:center; gap:10px; background:#111; color:#f5f0eb; padding:13px 22px; font-family:var(--font-body); font-style:normal; font-weight:500; font-size:14px; line-height:1; letter-spacing:.02em; border-radius:4px; border:0; cursor:pointer; box-shadow:inset 0 0 0 1px rgba(196,164,124,.45); position:relative; white-space:nowrap; text-decoration:none; transition:box-shadow var(--dur-normal) var(--ease-premium);}
.gr-cta .gr-cta-label{position:relative; display:inline-block;}
.gr-cta .gr-cta-label::after{content:""; position:absolute; left:0; right:0; bottom:-3px; height:1px; background:#c4a47c; transform:scaleX(0); transform-origin:left center; transition:transform var(--dur-normal) var(--ease-premium);}
.gr-cta .gr-cta-arrow{width:14px; height:14px; transition:transform var(--dur-micro) var(--ease-premium); flex-shrink:0;}
.gr-cta:hover{box-shadow:inset 0 0 0 1px rgba(196,164,124,.85);}
.gr-cta:hover .gr-cta-label::after{transform:scaleX(1);}
.gr-cta:hover .gr-cta-arrow{transform:translate(2px,-2px);}
.gr-nav.scrolled .gr-cta{box-shadow:inset 0 0 0 1px rgba(196,164,124,.55),0 1px 2px rgba(17,17,17,.06),0 12px 30px -12px rgba(196,164,124,.45);}
.gr-progress{position:absolute; left:0; bottom:-1px; height:1px; background:#c4a47c; width:0%; opacity:0; transition:opacity var(--dur-normal) var(--ease-premium), width 120ms linear;}
.gr-nav.scrolled .gr-progress{opacity:1;}
.gr-mobile-toggle{display:none; background:transparent; border:0; cursor:pointer; font-family:var(--font-body); font-style:normal; font-weight:500; font-size:13px; letter-spacing:.12em; text-transform:uppercase; color:#111; align-items:center; gap:12px; justify-self:end; padding:8px 4px;}
.gr-mobile-toggle .gr-bars{display:inline-flex; flex-direction:column; gap:5px;}
.gr-mobile-toggle .gr-bar{width:22px; height:1px; background:#111;}
@media(max-width:767px){.gr-mobile-toggle{display:inline-flex;} .gr-links, .gr-cta-zone{display:none;} .gr-nav-inner{grid-template-columns:1fr auto;} .gr-utility .uitem:nth-child(1){display:none;}}
.gr-overlay{position:fixed; inset:0; z-index:60; background:#111; display:flex; flex-direction:column; padding:88px 32px 56px; opacity:0; pointer-events:none; transition:opacity var(--dur-normal) var(--ease-premium);}
.gr-overlay.open{opacity:1; pointer-events:auto;}
.gr-overlay-close{position:absolute; top:28px; right:32px; background:transparent; color:#f5f0eb; border:0; cursor:pointer; font-family:var(--font-body); font-style:normal; font-weight:500; font-size:13px; letter-spacing:.14em; text-transform:uppercase; display:inline-flex; align-items:center; gap:10px;}
.gr-overlay-links{flex:1; display:flex; flex-direction:column; align-items:center; justify-content:center;}
.gr-overlay-link{font-family:var(--font-body); font-style:normal; font-weight:500; font-size:28px; line-height:1.05; color:#faf6f1; padding:18px 0; text-align:center; letter-spacing:-0.01em; text-decoration:none; border:0;}
.gr-overlay-link .first-letter{color:#c4a47c;}
.gr-overlay-divider{width:30%; height:1px; background:#c4a47c; opacity:.55;}
.gr-overlay-cta{align-self:center; margin-top:32px; background:transparent; color:#f5f0eb; border:1px solid #c4a47c; padding:18px 36px; font-family:var(--font-body); font-style:normal; font-weight:500; font-size:14px; letter-spacing:.06em; text-transform:uppercase; display:inline-flex; align-items:center; gap:12px; text-decoration:none;}
</style>

<script type="application/ld+json">
{"@context":"https://schema.org","@type":["Person","Physician"],"name":"Dra. Gloria Rivera","jobTitle":"Ortodoncista especialista en Invisalign","medicalSpecialty":"Orthodontic","description":"Ortodoncista certificada Top Doctor Emerald Invisalign en Bogotá, Colombia","memberOf":[{"@type":"Organization","name":"Federación Odontológica Colombiana"},{"@type":"Organization","name":"Asociación Colombiana de Ortodoncia"}],"hasCredential":[{"@type":"EducationalOccupationalCredential","name":"Invisalign Top Doctor Emerald","credentialCategory":"Professional Certification","recognizedBy":{"@type":"Organization","name":"Align Technology"}}],"worksFor":{"@type":"Dentist","name":"Consultorio Dra. Gloria Rivera","url":"https://dragloriarivera.com","address":{"@type":"PostalAddress","addressLocality":"Bogotá","addressCountry":"CO"}},"url":"https://dragloriarivera.com/ladoctora","sameAs":["https://www.instagram.com/dra_gloria_rivera"]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://dragloriarivera.com/"},{"@type":"ListItem","position":2,"name":"La Doctora"}]}
</script>
</head>
<body>

<?php include __DIR__ . '/partials/header.php'; ?>

<main id="main">

  <!-- ============ HERO EDITORIAL ============ -->
  <section id="top" class="ld-hero" aria-labelledby="ld-hero-h1">
    <div class="ld-hero-grid">
      <div class="ld-hero-photo has-image r-fade">
        <div class="ld-hero-photo-backdrop" aria-hidden="true"></div>
        <img src="https://res.cloudinary.com/dafmpak8s/image/upload/v1778789277/DSC04158.jpg_iqujml.jpg"
             alt="Dra. Gloria Rivera, ortodoncista especialista en Invisalign Top Doctor Emerald en su consultorio en Bogotá"
             class="ld-hero-photo-img" width="1333" height="1180" loading="eager" fetchpriority="high" />
        <div class="ld-hero-photo-frame" aria-hidden="true"></div>
        <div class="ld-hero-photo-stamp">
          <span class="stamp-glyph">◆</span>
          <span>Top Doctor Emerald · 2024</span>
        </div>
      </div>

      <div class="ld-hero-text r-fade" style="transition-delay:120ms">
        <nav class="ld-breadcrumb" aria-label="Migas de pan">
          <a href="/">Inicio</a>
          <span class="sep">›</span>
          <span class="current" aria-current="page">La Doctora</span>
        </nav>

        <span class="ld-hero-eyebrow">Tu doctora</span>

        <h1 id="ld-hero-h1" class="ld-hero-h1">
          Dra. Gloria Rivera<br />
          <em>Especialista en Ortodoncia<br />Invisible</em>, <span class="accent">Bogotá</span>
        </h1>

        <p class="ld-hero-subtitle">
          <span class="glyph" aria-hidden="true"></span>
          Top Doctor Emerald Invisalign®
        </p>

        <p class="ld-hero-lead">
          <span style="color:var(--carbon); font-weight:500">Más de 12</span> años dedicada exclusivamente a Invisalign®. Cada plan se diseña en sesión personal contigo, no en una pantalla anónima. Si después de hablar conmigo decides que no soy tu doctora, te ayudo a encontrar a quien sí lo sea.
        </p>

        <div class="ld-hero-badges" role="list">
          <span class="ld-hero-badge" role="listitem">
            <span class="glyph" aria-hidden="true">◆</span>
            Top Doctor Emerald Invisalign®
          </span>
          <span class="ld-hero-badge" role="listitem">
            <span class="num">+</span>
            12 años de experiencia
          </span>
          <span class="ld-hero-badge" role="listitem">
            <span class="num">+</span>
            500 casos tratados
          </span>
        </div>

        <div class="ld-hero-ctas">
          <a class="ld-btn-primary" href="/agendar-valoracion">
            Agenda ahora
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <line x1="5" y1="12" x2="19" y2="12" />
              <polyline points="12 5 19 12 12 19" />
            </svg>
          </a>
          <a class="ld-btn-ghost" href="#filosofia" aria-label="Ir a la filosofía clínica">
            Conocer mi enfoque clínico
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="width:14px; height:14px">
              <line x1="12" y1="5" x2="12" y2="19" />
              <polyline points="19 12 12 19 5 12" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ BIO NARRATIVE ============ -->
  <section id="historia" class="ld-section tinted" aria-labelledby="ld-bio-h2">
    <div class="ld-container-narrow">
      <div class="r-fade">
        <div class="ld-bio-eyebrow-wrap">
          <span class="eyebrow" style="color:var(--dorado)">Mi historia</span>
        </div>
        <h2 id="ld-bio-h2" class="ld-bio-h2">
          Por qué hago lo que <span class="accent">hago</span>
        </h2>
      </div>

      <div class="ld-bio-paragraphs">
        <p class="r-fade dropcap">
          Hago esto porque entendí, hace mucho, que mover un diente puede mover algo mucho más grande. Una sonrisa que vuelve a aparecer en las fotos. Una voz que deja de taparse con la mano al hablar. Alguien que vuelve a mirarse al espejo sin esquivar su propia cara.
        </p>
        <span class="ld-bio-divider" aria-hidden="true"></span>

        <p class="r-fade" style="transition-delay:100ms">
          Detrás de cada caso hay una persona que dejó de reírse en público, que pospuso una foto, que aprendió a hablar con la boca a medio abrir. Mi trabajo no es enderezar dientes —eso es el medio—. Mi trabajo es devolverle a alguien la manera de sostener una mirada.
        </p>
        <span class="ld-bio-divider" aria-hidden="true"></span>

        <p class="r-fade" style="transition-delay:200ms">
          A cada paciente lo trato como trataría a mi hija o a mi mamá: con el cuidado de saber que le estoy entregando algo que importa. Esa responsabilidad es lo que me mueve cada día.
        </p>
        <span class="ld-bio-divider" aria-hidden="true"></span>

        <p class="r-fade" style="transition-delay:300ms">
          En 2026 sigue moviéndome lo mismo que el primer día: la responsabilidad de mirar cada caso como si fuera el único del día. Porque para esa persona, lo es.
        </p>
      </div>
    </div>
  </section>

  <!-- ============ TRAYECTORIA + ASOCIACIONES ============ -->
  <section id="trayectoria" class="ld-section" aria-labelledby="ld-trayectoria-h2">
    <div class="ld-container">
      <div class="ld-trayectoria-header r-fade">
        <span class="eyebrow" style="color:var(--dorado)">Trayectoria profesional</span>
        <h2 id="ld-trayectoria-h2">
          Una formación especializada y <span class="accent">continua</span>
        </h2>
        <p class="lead" style="font-size:16px; color:var(--gr-ink-70)">
          Cada paciente merece un especialista certificado. Aquí está mi recorrido completo, verificable en los registros oficiales.
        </p>
      </div>

      <ol class="ld-timeline" role="list">
        <li class="ld-timeline-row left">
          <span class="ld-timeline-dot" aria-hidden="true"></span>
          <div class="ld-timeline-card">
            <span class="ld-timeline-year">2010</span>
            <h3 class="ld-timeline-title">Pregrado en Odontología</h3>
            <p class="ld-timeline-org">Universidad Javeriana · Bogotá</p>
            <p class="ld-timeline-desc">Formación general en salud bucal y diagnóstico clínico.</p>
          </div>
        </li>
        <li class="ld-timeline-row right" style="transition-delay:100ms">
          <span class="ld-timeline-dot" aria-hidden="true"></span>
          <div class="ld-timeline-card">
            <span class="ld-timeline-year">2013</span>
            <h3 class="ld-timeline-title">Especialización en Ortodoncia</h3>
            <p class="ld-timeline-org">Universidad Javeriana · Bogotá</p>
            <p class="ld-timeline-desc">Tres años de especialización clínica enfocada en ortodoncia funcional y estética.</p>
          </div>
        </li>
        <li class="ld-timeline-row left" style="transition-delay:200ms">
          <span class="ld-timeline-dot" aria-hidden="true"></span>
          <div class="ld-timeline-card">
            <span class="ld-timeline-year">2021</span>
            <h3 class="ld-timeline-title">Certificación Invisalign Provider</h3>
            <p class="ld-timeline-org">Align Technology</p>
            <p class="ld-timeline-desc">Primera certificación oficial para ofrecer Invisalign®.</p>
          </div>
        </li>
        <li class="ld-timeline-row right" style="transition-delay:300ms">
          <span class="ld-timeline-dot" aria-hidden="true"></span>
          <div class="ld-timeline-card">
            <span class="ld-timeline-year">2017</span>
            <h3 class="ld-timeline-title">Invisalign Top Doctor Gold</h3>
            <p class="ld-timeline-org">Align Technology</p>
            <p class="ld-timeline-desc">Primer nivel de reconocimiento por volumen y resultados.</p>
          </div>
        </li>
        <li class="ld-timeline-row left" style="transition-delay:400ms">
          <span class="ld-timeline-dot" aria-hidden="true"></span>
          <div class="ld-timeline-card">
            <span class="ld-timeline-year">2020</span>
            <h3 class="ld-timeline-title">Invisalign Top Doctor Platinum</h3>
            <p class="ld-timeline-org">Align Technology</p>
            <p class="ld-timeline-desc">Segundo nivel de reconocimiento Invisalign.</p>
          </div>
        </li>
        <li class="ld-timeline-row right diamond" style="transition-delay:500ms">
          <span class="ld-timeline-dot" aria-hidden="true"></span>
          <div class="ld-timeline-card">
            <span class="ld-timeline-year">2024 <span class="badge">Máximo nivel</span></span>
            <h3 class="ld-timeline-title">Invisalign Top Doctor Emerald</h3>
            <p class="ld-timeline-org">Align Technology</p>
            <p class="ld-timeline-desc">Máximo nivel mundial de certificación Invisalign. Reservado a ortodoncistas con el mayor volumen de casos exitosos comprobados.</p>
          </div>
        </li>
        <li class="ld-timeline-row left diamond" style="transition-delay:600ms">
          <span class="ld-timeline-dot" aria-hidden="true"></span>
          <div class="ld-timeline-card">
            <span class="ld-timeline-year">2025 <span class="badge">Reconfirmado</span></span>
            <h3 class="ld-timeline-title">Doctor Emerald 2025</h3>
            <p class="ld-timeline-org">Align Technology</p>
            <p class="ld-timeline-desc">Renovación del reconocimiento Emerald — manteniendo el máximo estándar Invisalign por volumen y resultados clínicos comprobados.</p>
          </div>
        </li>
      </ol>

      <div class="ld-timeline-continuing r-fade">
        <h4>Educación continua reciente</h4>
        <p>
          Participación en los principales congresos internacionales de Invisalign (Align Tech Forum, AAO Annual Session) y actualización clínica continua en técnicas de planificación digital y manejo de casos complejos en adultos.
        </p>
      </div>

      <div class="ld-assoc-wrap r-fade">
        <header class="ld-assoc-header">
          <span class="eyebrow">Respaldo institucional</span>
          <h3>Asociaciones y registros oficiales</h3>
        </header>
        <div class="ld-assoc-grid">
          <article class="ld-assoc-card r-fade">
            <div class="ld-assoc-logo"><span class="logo-mark">FOC</span></div>
            <h4>Federación Odontológica Colombiana</h4>
            <p class="full-name">Miembro activo</p>
            <p>Miembro activo de la federación que agremia a odontólogos en Colombia.</p>
            <div class="registro">Registro: <span>Activo</span></div>
          </article>
          <article class="ld-assoc-card r-fade" style="transition-delay:80ms">
            <div class="ld-assoc-logo"><span class="logo-mark">ACO</span></div>
            <h4>Asociación Colombiana de Ortodoncia</h4>
            <p class="full-name">Miembro activo</p>
            <p>Miembro activo de la asociación científica nacional de ortodoncia.</p>
            <div class="registro">Membresía: <span>Activa</span></div>
          </article>
          <article class="ld-assoc-card r-fade" style="transition-delay:160ms">
            <div class="ld-assoc-logo"><span class="logo-mark">ReTHUS</span></div>
            <h4>Registro Nacional Único del Talento Humano en Salud</h4>
            <p class="full-name">Ministerio de Salud de Colombia</p>
            <p>Registro oficial en el directorio nacional del Ministerio de Salud.</p>
            <div class="registro">Número: <span>Verificable</span></div>
          </article>
          <article class="ld-assoc-card r-fade" style="transition-delay:240ms">
            <div class="ld-assoc-logo"><span class="logo-mark">◆</span></div>
            <h4>Invisalign Doctor Site</h4>
            <p class="full-name">Align Technology · Directorio oficial</p>
            <p>Certificación verificable en el directorio oficial de Align Technology.</p>
            <div class="registro">Nivel: <span>Top Doctor Emerald 2024</span></div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FILOSOFÍA ============ -->
  <section id="filosofia" class="ld-section cream" aria-labelledby="ld-philo-h2">
    <div class="ld-container">
      <article class="ld-philo-card r-fade-slow">
        <span class="ld-philo-eyebrow">Mi filosofía</span>
        <h2 id="ld-philo-h2" class="ld-philo-quote">
          <span class="open" aria-hidden="true">“</span>
          Trato pacientes, no casos. Y la diferencia se nota.
          <span class="close" aria-hidden="true">”</span>
        </h2>
        <div class="ld-philo-attrib">
          <span class="rule" aria-hidden="true"></span>
          <span class="name">Dra. Gloria Rivera</span>
          <span class="rule" aria-hidden="true"></span>
        </div>
      </article>
    </div>
  </section>

  <!-- ============ CONSULTORIO ============ -->
  <section id="consultorio" class="ld-section" aria-labelledby="ld-gallery-h2">
    <div class="ld-container">
      <header class="ld-gallery-header r-fade">
        <span class="eyebrow">Mi espacio</span>
        <h2 id="ld-gallery-h2">El consultorio donde trabajamos</h2>
        <p>Bogotá, Colombia. Aquí diseñamos cada plan personalmente, sin delegar.</p>
      </header>

      <div class="ld-masonry" role="list">
        <figure class="ld-mason-item a has-image r-fade" role="listitem">
          <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789279/IMG_9634_1_dditwl.png" alt="Recepción del consultorio · Dra. Gloria Rivera" loading="lazy" />
          <span class="number" aria-hidden="true">01</span>
          <div class="inner">
            <div class="ph-label">Recepción</div>
            <div class="ph-caption">Sillones cálidos, luz natural abundante, plantas. Ambiente acogedor — no clínico-frío.</div>
          </div>
        </figure>
        <figure class="ld-mason-item b has-image r-fade" role="listitem" style="transition-delay:60ms">
          <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789277/Treatment_room_modern_chair_202605141426_ey0svo.jpg" alt="Sala de tratamiento con sillón ortodóntico moderno" loading="lazy" />
          <span class="number" aria-hidden="true">02</span>
          <div class="inner">
            <div class="ph-label">Sala de tratamiento</div>
            <div class="ph-caption">Sillón ortodóntico moderno con escáner iTero al fondo. Iluminación lateral suave.</div>
          </div>
        </figure>
        <figure class="ld-mason-item c has-image r-fade" role="listitem" style="transition-delay:120ms">
          <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789278/Digital_planning_ClinCheck_software_202605141429_c5qf7r.jpg" alt="Planificación digital · software ClinCheck con plan 3D" loading="lazy" />
          <span class="number" aria-hidden="true">03</span>
          <div class="inner">
            <div class="ph-label">Planificación digital</div>
            <div class="ph-caption">Pantalla con software ClinCheck mostrando un plan 3D.</div>
          </div>
        </figure>
        <figure class="ld-mason-item d has-image r-fade" role="listitem" style="transition-delay:180ms">
          <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789278/Esc%C3%A1ner_iTero_close-up_202605141432_tw5zvd.jpg" alt="Close-up del escáner iTero en uso" loading="lazy" />
          <span class="number" aria-hidden="true">04</span>
          <div class="inner">
            <div class="ph-label">Escáner iTero</div>
            <div class="ph-caption">Close-up editorial del equipo en uso.</div>
          </div>
        </figure>
        <figure class="ld-mason-item e has-image r-fade" role="listitem" style="transition-delay:240ms">
          <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789277/DSC04177.jpg_yqdbaw.jpg" alt="Detalle de alineador Invisalign" loading="lazy" />
          <span class="number" aria-hidden="true">05</span>
          <div class="inner">
            <div class="ph-label">Detalle alineador</div>
            <div class="ph-caption">Manos con guantes sosteniendo un alineador Invisalign. Macro editorial.</div>
          </div>
        </figure>
        <figure class="ld-mason-item f has-image r-fade" role="listitem" style="transition-delay:300ms">
          <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789279/IMG_9634_1_dditwl.png" alt="Área de espera del consultorio" loading="lazy" />
          <span class="number" aria-hidden="true">06</span>
          <div class="inner">
            <div class="ph-label">Área de espera</div>
            <div class="ph-caption">Plantas, asientos cómodos, decoración cuidada, iluminación natural.</div>
          </div>
        </figure>
      </div>
    </div>
  </section>

  <!-- ============ TECNOLOGÍA Y HERRAMIENTAS ============ -->
  <section id="tecnologia" class="ld-section cream" aria-labelledby="ld-tech-h2">
    <div class="ld-container">
      <header class="ld-tech-header r-fade">
        <span class="eyebrow">Tecnología y herramientas</span>
        <h2 id="ld-tech-h2">Equipamiento que uso en <span class="accent">cada plan</span></h2>
        <p>Tecnología de planificación digital y herramientas clínicas que permiten predecir cada movimiento dental antes de empezar el tratamiento.</p>
      </header>

      <div class="ld-tech-grid">
        <article class="ld-tech-card r-fade">
          <div class="tech-img">
            <span class="tech-pill">01 · Escaneo digital</span>
            <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789277/ChatGPT_Image_14_may_2026_02_06_08_p.m._duzrpq.png" alt="Escáner intraoral iTero" loading="lazy" />
          </div>
          <div class="tech-body">
            <span class="tech-eyebrow">Align Technology</span>
            <h3>Escáner iTero™</h3>
            <p>Escaneo intraoral en 3D sin moldes incómodos. En menos de 10 minutos digitalizamos tu boca con precisión submilimétrica para diseñar el plan de tratamiento.</p>
          </div>
        </article>

        <article class="ld-tech-card r-fade" style="transition-delay:60ms">
          <div class="tech-img">
            <span class="tech-pill">02 · Plan digital</span>
            <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789278/ClinCheck_screen_3D_plan_202605141409_orjnsl.jpg" alt="ClinCheck · plan 3D del tratamiento Invisalign" loading="lazy" />
          </div>
          <div class="tech-body">
            <span class="tech-eyebrow">Align Technology</span>
            <h3>ClinCheck®</h3>
            <p>El software con el que diseño personalmente cada plan en 3D. Ves cómo se moverán tus dientes paso a paso antes de fabricar el primer alineador.</p>
          </div>
        </article>

        <article class="ld-tech-card r-fade" style="transition-delay:120ms">
          <div class="tech-img">
            <span class="tech-pill">03 · Alineadores</span>
            <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789278/Aligner_case_and_orthodontic_ali__202605141414_qd0ro8.jpg" alt="Estuche y alineadores Invisalign" loading="lazy" />
          </div>
          <div class="tech-body">
            <span class="tech-eyebrow">Fabricados a medida</span>
            <h3>Alineadores Invisalign®</h3>
            <p>Fabricados individualmente por Align Technology en Estados Unidos. Material SmartTrack patentado, prácticamente invisibles y removibles para comer y cepillar.</p>
          </div>
        </article>

        <article class="ld-tech-card r-fade" style="transition-delay:180ms">
          <div class="tech-img">
            <span class="tech-pill">04 · Anclaje clínico</span>
            <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789279/Close-up_teeth_with_attachments_202605141415_rvboew.jpg" alt="Attachments en dientes para tratamiento Invisalign" loading="lazy" />
          </div>
          <div class="tech-body">
            <span class="tech-eyebrow">Diseño individualizado</span>
            <h3>Attachments</h3>
            <p>Pequeños relieves del color del diente que se adhieren temporalmente para que los alineadores apliquen la fuerza exacta donde el movimiento lo requiere.</p>
          </div>
        </article>

        <article class="ld-tech-card r-fade" style="transition-delay:240ms">
          <div class="tech-img">
            <span class="tech-pill">05 · Estabilidad</span>
            <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789278/Retenedor_sobre_modelo_dental_202605141417_pwmtks.jpg" alt="Retenedor sobre modelo dental" loading="lazy" />
          </div>
          <div class="tech-body">
            <span class="tech-eyebrow">Post-tratamiento</span>
            <h3>Retenedores Vivera®</h3>
            <p>Al finalizar el tratamiento entrego retenedores Vivera® fabricados con la misma tecnología Invisalign. Mantienen el resultado a largo plazo y evitan recidivas.</p>
          </div>
        </article>

        <article class="ld-tech-card r-fade" style="transition-delay:300ms">
          <div class="tech-img">
            <span class="tech-pill">06 · Láser dental</span>
            <img src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778789277/Fotona_LightWalker_dental_laser_202605141419_1_vomzdd.jpg" alt="Láser dental Fotona LightWalker" loading="lazy" />
          </div>
          <div class="tech-body">
            <span class="tech-eyebrow">Tecnología complementaria</span>
            <h3>Láser Fotona®</h3>
            <p>Láser dental LightWalker para procedimientos complementarios al tratamiento ortodóntico: remodelado de tejidos blandos, manejo de hipersensibilidad y soporte clínico.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ FINAL CTA + SIGNATURE ============ -->
  <section id="agenda" class="ld-section" aria-labelledby="ld-cta-h2" style="padding-top:0">
    <div class="ld-container">
      <div class="ld-cta-block r-fade-slow">
        <span class="eyebrow">Agenda conmigo</span>
        <h2 id="ld-cta-h2">
          Conozcámonos en una <span class="accent">valoración</span>
        </h2>
        <p>
          Una videollamada de 30 minutos. Te explico tu caso, te cuento las opciones reales y te digo con honestidad si soy la doctora indicada para ti. Sin compromiso. Sin venta agresiva.
        </p>

        <div class="actions">
          <a class="ld-btn-on-dark-primary" href="/agendar-valoracion">
            Agenda ahora
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <line x1="5" y1="12" x2="19" y2="12" />
              <polyline points="12 5 19 12 12 19" />
            </svg>
          </a>

          
        </div>

        <div class="ld-signature-wrap r-fade-slow">
          <p class="ld-signature-lead">Te espero,</p>
          <p class="ld-signature">Dra. Gloria Rivera</p>
          <p class="ld-signature-meta">Ortodoncista · Bogotá</p>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- ============ FOOTER ============ -->
<?php include __DIR__ . '/partials/footer.php'; ?>

<script>
(function(){
  /* Nav scroll + progress */
  var nav = document.getElementById('gr-nav');
  var util = document.getElementById('gr-utility');
  var progress = document.getElementById('gr-progress');
  function onScroll(){
    var y = window.scrollY;
    if(y > 40){ nav.classList.add('scrolled'); util.classList.add('hidden'); }
    else { nav.classList.remove('scrolled'); util.classList.remove('hidden'); }
    if(progress){
      var max = document.body.scrollHeight - window.innerHeight;
      progress.style.width = (max > 0 ? Math.min(1, y/max) * 100 : 0) + '%';
    }
  }
  window.addEventListener('scroll', onScroll, { passive:true });
  onScroll();

  /* Mobile overlay */
  var openBtn = document.getElementById('menu-open-btn');
  var closeBtn = document.getElementById('menu-close-btn');
  var overlay = document.getElementById('gr-overlay');
  function setMobile(open){
    overlay.classList.toggle('open', open);
    overlay.setAttribute('aria-hidden', open ? 'false' : 'true');
    document.body.style.overflow = open ? 'hidden' : '';
  }
  openBtn.addEventListener('click', function(){ setMobile(true); });
  closeBtn.addEventListener('click', function(){ setMobile(false); });
  overlay.querySelectorAll('.gr-overlay-link, .gr-overlay-cta').forEach(function(a){
    a.addEventListener('click', function(){ setMobile(false); });
  });

  /* Reveal on scroll */
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(en){
      if(en.isIntersecting){
        en.target.classList.add('in');
        io.unobserve(en.target);
      }
    });
  }, { threshold:0.12, rootMargin:'0px 0px -8% 0px' });
  document.querySelectorAll('.r-fade, .r-fade-slow, .ld-timeline-row').forEach(function(el){ io.observe(el); });
})();
</script>

</body>
</html>
