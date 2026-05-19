<!DOCTYPE html>
<html lang="es-CO">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="index,follow" />
<meta name="author" content="Dra. Gloria Rivera" />
<meta name="theme-color" content="#000000" />

<title>Ortodoncia Invisalign | Dra. Gloria Rivera</title>
<meta name="description" content="Tratamiento Invisalign personalizado con la Dra. Gloria Rivera, Top Doctor Emerald. Más de 500 sonrisas tratadas. Agenda tu valoración gratuita." />
<link rel="canonical" href="https://dragloriarivera.com/" />

<meta property="og:type" content="website" />
<meta property="og:url" content="https://dragloriarivera.com/" />
<meta property="og:title" content="Ortodoncia Invisalign | Dra. Gloria Rivera" />
<meta property="og:description" content="Tratamiento Invisalign personalizado con la Dra. Gloria Rivera, Top Doctor Emerald. Más de 500 sonrisas tratadas. Agenda tu valoración gratuita." />
<meta property="og:locale" content="es_CO" />
<meta property="og:site_name" content="Dra. Gloria Rivera" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500&family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
<link href="https://api.fontshare.com/v2/css?f[]=general-sans@200,300,400,500,600&display=swap" rel="stylesheet">

<style>
/* ============================================================
   DESIGN TOKENS
   ============================================================ */
:root{
  --hueso:#faf6f1; --beige:#f5f0eb; --nude:#d4c5b5;
  --carbon:#111111; --piedra:#9b8b7a; --dorado:#c4a47c; --dorado-suave:#c4a47c;
  --gr-ink:var(--carbon); --gr-cream:var(--beige); --gr-sand:var(--nude);
  --gr-gold:var(--dorado); --gr-stone:var(--piedra);
  --gr-ink-90:#1a1a1a; --gr-ink-70:#3a3735; --gr-ink-50:#6b6663;
  --gr-cream-deep:#ece4d9; --gr-cream-soft:var(--hueso); --gr-paper:#ffffff;
  --gr-gold-deep:#a8865d; --gr-gold-soft:#e4d4be;
  --dorado-deep:#a8865d;
  --fg-1:var(--gr-ink); --fg-2:var(--gr-ink-70); --fg-3:var(--gr-ink-50);
  --fg-on-dark:var(--gr-cream); --fg-accent:var(--gr-gold);
  --border-on-dark:rgba(245,240,235,0.16);
  --font-display:"DM Serif Display","Cormorant Garamond",Georgia,serif;
  --font-body:"General Sans","Inter",system-ui,-apple-system,sans-serif;
  --font-script:"Mrs Saint Delafield","Pinyon Script",cursive;
  --hairline:rgba(17,17,17,.08);
  --hairline-strong:rgba(17,17,17,.14);
  --hairline-gold:rgba(196,164,124,.55);
  --hairline-on-dark:rgba(245,240,235,.10);
  --elev-1:0 1px 2px rgba(17,17,17,.04),0 6px 18px -10px rgba(17,17,17,.10);
  --elev-2:0 2px 4px rgba(17,17,17,.05),0 14px 32px -14px rgba(17,17,17,.16);
  --elev-3:0 6px 14px rgba(17,17,17,.08),0 32px 64px -24px rgba(17,17,17,.24);
  --ease-out:cubic-bezier(.22,.61,.36,1);
  --ease-in-out:cubic-bezier(.65,0,.35,1);
  --ease-premium:cubic-bezier(.22,1,.36,1);
  --dur-fast:160ms; --dur-base:260ms;
  --dur-micro:180ms; --dur-normal:320ms;
  --container:1200px;
}

*{box-sizing:border-box}
html{-webkit-text-size-adjust:100%; scroll-behavior:smooth; scroll-padding-top:120px;}
body{
  margin:0; background:var(--beige); color:var(--fg-1);
  font-family:var(--font-body); font-size:1rem; line-height:1.5; font-weight:400;
  -webkit-font-smoothing:antialiased; text-rendering:optimizeLegibility;
}
h1,h2,h3,h4{
  font-family:var(--font-display); font-weight:400;
  color:var(--fg-1); letter-spacing:-0.01em; line-height:1.05;
  text-wrap:balance; margin:0 0 24px;
}
p{margin:0 0 16px;}
a{color:inherit; text-decoration:none;}
img{max-width:100%; display:block;}

.eyebrow{
  font-family:var(--font-body); font-size:.75rem; font-weight:500;
  letter-spacing:.18em; text-transform:uppercase; color:var(--gr-gold-deep);
}
.lead{font-size:1.1875rem; line-height:1.7; color:var(--fg-2); max-width:60ch;}
.kit-container{max-width:var(--container); margin:0 auto; padding:0 32px;}

/* ============================================================
   HEADER (igual a Home-2)
   ============================================================ */
.skip-link{
  position:absolute; left:-9999px; top:0;
  background:var(--carbon); color:var(--hueso);
  padding:12px 18px; z-index:10000;
  font-family:var(--font-body); font-weight:500; font-size:14px;
  border-radius:4px; box-shadow:inset 0 0 0 1px var(--dorado);
}
.skip-link:focus{left:16px; top:16px; outline:2px solid var(--dorado);}

.gr-utility{
  position:fixed; top:0; left:0; right:0; height:32px;
  background:var(--carbon); color:var(--beige);
  display:flex; align-items:center; justify-content:flex-end;
  padding:0 32px; z-index:51;
  transition:transform var(--dur-normal) var(--ease-premium);
  font-family:var(--font-body); font-size:10px;
  letter-spacing:.24em; text-transform:uppercase; font-weight:500; overflow:hidden;
}
.gr-utility.hidden{transform:translateY(-100%);}
.gr-utility .uitem{color:rgba(245,240,235,.75); display:inline-flex; gap:10px; align-items:center;}
.gr-utility .uitem+.uitem{margin-left:22px; padding-left:22px; border-left:1px solid rgba(245,240,235,.16);}
.gr-utility .udot{width:6px; height:6px; border-radius:50%; background:var(--dorado); display:inline-block;}

.gr-nav{
  position:fixed; left:0; right:0; top:32px; height:88px; z-index:50;
  border-bottom:1px solid transparent;
  transition:top var(--dur-normal) var(--ease-premium),
             background var(--dur-normal) var(--ease-premium),
             border-color var(--dur-normal) var(--ease-premium),
             backdrop-filter var(--dur-normal) var(--ease-premium);
}
.gr-nav.scrolled{
  top:0; background:rgba(245,240,235,.88);
  backdrop-filter:blur(16px) saturate(140%);
  -webkit-backdrop-filter:blur(16px) saturate(140%);
  border-bottom-color:var(--hairline-strong);
}
.gr-nav-inner{
  max-width:var(--container); height:100%; margin:0 auto; padding:0 32px;
  display:grid; grid-template-columns:auto 1fr auto; align-items:center;
  gap:24px; position:relative;
}
.gr-logo{
  display:inline-flex; align-items:center; gap:18px;
  color:var(--carbon); justify-self:start; white-space:nowrap;
}
.gr-logo .gr-logo-img{height:46px; width:auto; transition:opacity var(--dur-normal) var(--ease-premium);}
.gr-logo:hover .gr-logo-img{opacity:.7;}
.gr-logo .gr-divider-v{display:none; width:1px; height:24px; background:var(--hairline-gold);}
.gr-logo .gr-tagline{
  display:none; font-family:var(--font-body); font-size:10px;
  letter-spacing:.24em; text-transform:uppercase; color:var(--piedra); font-weight:500; white-space:nowrap;
}
@media(min-width:1180px){
  .gr-logo .gr-divider-v, .gr-logo .gr-tagline{display:inline-block;}
}
.gr-links{display:flex; align-items:center; gap:0; justify-self:center; flex-wrap:nowrap;}
.gr-link{
  font-family:var(--font-body); font-weight:500; font-size:14px;
  line-height:1; color:var(--carbon); padding:8px 20px; position:relative;
  letter-spacing:.02em; white-space:nowrap;
}
.gr-link::after{
  content:""; position:absolute; left:50%; right:50%; bottom:0; height:1px;
  background:var(--dorado);
  transition:left var(--dur-normal) var(--ease-premium), right var(--dur-normal) var(--ease-premium);
}
.gr-link:hover::after, .gr-link.active::after{left:20px; right:20px;}
.gr-link .first-letter{display:none;}
.gr-link.active .first-letter{display:inline;}
.gr-link-sep{width:1px; height:12px; background:var(--hairline-gold); display:inline-block; flex-shrink:0;}
.gr-cta-zone{display:inline-flex; align-items:center; gap:18px; justify-self:end;}
.gr-cta{
  display:inline-flex; align-items:center; gap:10px;
  background:var(--carbon); color:var(--beige); padding:13px 22px;
  font-family:var(--font-body); font-weight:500; font-size:14px; line-height:1;
  letter-spacing:.02em; border-radius:4px; border:0; cursor:pointer;
  box-shadow:inset 0 0 0 1px rgba(196,164,124,.45);
  position:relative; white-space:nowrap;
  transition:box-shadow var(--dur-normal) var(--ease-premium), background var(--dur-normal) var(--ease-premium);
}
.gr-cta .gr-cta-label{position:relative; display:inline-block;}
.gr-cta .gr-cta-label::after{
  content:""; position:absolute; left:0; right:0; bottom:-3px; height:1px;
  background:var(--dorado); transform:scaleX(0); transform-origin:left center;
  transition:transform var(--dur-normal) var(--ease-premium);
}
.gr-cta .gr-cta-arrow{width:14px; height:14px; transition:transform var(--dur-micro) var(--ease-premium); flex-shrink:0;}
.gr-cta:hover{box-shadow:inset 0 0 0 1px rgba(196,164,124,.85);}
.gr-cta:hover .gr-cta-label::after{transform:scaleX(1);}
.gr-cta:hover .gr-cta-arrow{transform:translate(2px,-2px);}
.gr-nav.scrolled .gr-cta{
  box-shadow:inset 0 0 0 1px rgba(196,164,124,.55),0 1px 2px rgba(17,17,17,.06),0 12px 30px -12px rgba(196,164,124,.45);
}
.gr-progress{
  position:absolute; left:0; bottom:-1px; height:1px; background:var(--dorado);
  width:0%; opacity:0;
  transition:opacity var(--dur-normal) var(--ease-premium), width 120ms linear;
}
.gr-nav.scrolled .gr-progress{opacity:1;}
.gr-mobile-toggle{
  display:none; background:transparent; border:0; cursor:pointer;
  font-family:var(--font-body); font-weight:500; font-size:13px;
  letter-spacing:.12em; text-transform:uppercase; color:var(--carbon);
  align-items:center; gap:12px; justify-self:end; padding:8px 4px;
}
.gr-mobile-toggle .gr-bars{display:inline-flex; flex-direction:column; gap:5px;}
.gr-mobile-toggle .gr-bar{width:22px; height:1px; background:var(--carbon);}
@media(max-width:767px){
  .gr-mobile-toggle{display:inline-flex;}
  .gr-links, .gr-cta-zone{display:none;}
  .gr-nav-inner{grid-template-columns:1fr auto;}
  .gr-utility .uitem:nth-child(1){display:none;}
}
.gr-overlay{
  position:fixed; inset:0; z-index:60; background:var(--carbon);
  display:flex; flex-direction:column; padding:88px 32px 56px;
  opacity:0; pointer-events:none;
  transition:opacity var(--dur-normal) var(--ease-premium);
}
.gr-overlay.open{opacity:1; pointer-events:auto;}
.gr-overlay-close{
  position:absolute; top:28px; right:32px;
  background:transparent; color:var(--beige); border:0; cursor:pointer;
  font-family:var(--font-body); font-weight:500; font-size:13px;
  letter-spacing:.14em; text-transform:uppercase;
  display:inline-flex; align-items:center; gap:10px;
}
.gr-overlay-links{flex:1; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:0;}
.gr-overlay-link{
  font-family:var(--font-body); font-weight:500; font-size:28px; line-height:1.05;
  color:var(--hueso); padding:18px 0; text-align:center; letter-spacing:-0.01em;
}
.gr-overlay-link .first-letter{color:var(--dorado);}
.gr-overlay-divider{width:30%; height:1px; background:var(--dorado); opacity:.55;}
.gr-overlay-cta{
  align-self:center; margin-top:32px; background:transparent; color:var(--beige);
  border:1px solid var(--dorado); padding:18px 36px;
  font-family:var(--font-body); font-weight:500; font-size:14px; letter-spacing:.06em;
  text-transform:uppercase; display:inline-flex; align-items:center; gap:12px;
}

/* ============================================================
   HERO VIDEO
   ============================================================ */
.hero-video{background:var(--beige); padding-top:120px; position:relative;}
.hv-stage{position:relative; width:100%; aspect-ratio:16/9; max-height:92vh; overflow:hidden; background:#0a0a0a;}
.hv-media{position:absolute; inset:0; width:100%; height:100%; object-fit:cover; background:#0a0a0a;}
.hv-vignette{
  position:absolute; inset:0; pointer-events:none;
  background:radial-gradient(ellipse at 65% 55%,rgba(196,164,124,0.10) 0%,transparent 55%),
             linear-gradient(to bottom,rgba(17,17,17,0.55) 0%,transparent 18%,transparent 78%,rgba(17,17,17,0.55) 100%);
}
.hv-overlay{position:absolute; inset:0; display:flex; flex-direction:column; justify-content:space-between; padding:40px 48px; pointer-events:none; color:var(--hueso);}
.hv-overlay > *{pointer-events:auto;}
.hv-tag{display:inline-flex; align-items:center; gap:14px; font-size:10px; letter-spacing:.24em; text-transform:uppercase; font-weight:500; color:rgba(245,240,235,.85); align-self:flex-start;}
.hv-tag-rule{width:28px; height:1px; background:var(--dorado);}
.hv-tag-sep{color:rgba(245,240,235,.4);}
.hv-tag-meta{color:var(--dorado); font-style:italic; text-transform:none; letter-spacing:.04em; font-family:var(--font-display); font-size:13px;}
.hv-scroll-hint{align-self:flex-end; display:inline-flex; align-items:center; gap:10px; color:rgba(245,240,235,.78); font-family:var(--font-display); font-style:italic; font-size:14px;}
.hv-scroll-hint svg{width:16px; height:16px; animation:hvBob 2.4s var(--ease-in-out) infinite;}
@keyframes hvBob{0%,100%{transform:translateY(0);}50%{transform:translateY(4px);}}
.hv-scroll-hint:hover{color:var(--dorado);}
@media(max-width:720px){.hv-overlay{padding:28px 24px;} .hv-stage{max-height:70vh;}}

/* ============================================================
   HERO EDITORIAL
   ============================================================ */
.hero-editorial{padding:112px 0 96px; background:var(--beige); position:relative; display:flex; align-items:center;}
.hero-grid{display:grid; grid-template-columns:1.05fr .95fr; gap:96px; align-items:center; width:100%;}
.hero-text{display:flex; flex-direction:column; gap:28px;}
.hero-title{font-family:var(--font-display); font-size:clamp(2.5rem,4.2vw + 1rem,4.6rem); line-height:1.02; letter-spacing:-0.02em; margin:0; color:var(--carbon); max-width:16ch; text-wrap:balance;}
.hero-title .gold{color:var(--dorado);}
.hero-pill{display:inline-flex; align-items:center; gap:10px; align-self:flex-start; border:1px solid var(--dorado); background:transparent; padding:9px 16px; border-radius:999px; font-size:11px; font-weight:500; letter-spacing:.18em; text-transform:uppercase; color:var(--carbon); margin-top:4px;}
.hero-pill .diamond{width:9px; height:9px; background:var(--dorado); transform:rotate(45deg); display:inline-block; animation:diamondPulse 4s var(--ease-in-out) infinite;}
@keyframes diamondPulse{
  0%,100%{transform:rotate(45deg) scale(1); box-shadow:0 0 0 0 rgba(196,164,124,.55);}
  50%{transform:rotate(45deg) scale(1.18); box-shadow:0 0 0 4px rgba(196,164,124,0);}
}
.hero-actions{display:flex; align-items:center; gap:32px; margin-top:8px; flex-wrap:wrap;}
.hero-link-secondary{display:inline-flex; align-items:center; gap:10px; font-size:14px; color:var(--carbon); padding-bottom:2px; border-bottom:1px solid var(--hairline-strong); transition:border-color var(--dur-normal) var(--ease-premium), color var(--dur-normal) var(--ease-premium);}
.hero-link-secondary:hover{color:var(--dorado); border-bottom-color:var(--dorado);}
.hero-link-secondary svg{width:16px; height:16px;}
.btn-pulse{position:relative; animation:ctaPulse 4.5s ease-in-out infinite;}
@keyframes ctaPulse{0%,60%,100%{transform:scale(1);}30%{transform:scale(1.018);}}

.hero-image-wrap{position:relative; aspect-ratio:4/5;}
.photo-doctor{
  position:absolute; inset:0; border-radius:16px; overflow:hidden;
  background:linear-gradient(160deg,var(--nude) 0%,var(--gr-cream-deep) 60%,#c4b39e 100%);
  display:flex; align-items:flex-end; box-shadow:var(--elev-3);
}
.photo-doctor::before{
  content:""; position:absolute; inset:0;
  background:radial-gradient(circle at 30% 20%,rgba(250,246,241,.6) 0%,transparent 55%),
             radial-gradient(circle at 75% 80%,rgba(17,17,17,.10) 0%,transparent 45%);
  pointer-events:none; z-index:1;
}
.photo-doctor::after{content:""; position:absolute; inset:20px; border:1px solid rgba(250,246,241,.45); pointer-events:none; border-radius:6px; z-index:2;}
.photo-doctor-img{
  position:absolute; inset:0; width:100%; height:100%;
  object-fit:contain; object-position:50% 100%;
  transform:scale(1.15); transform-origin:50% 100%;
  filter:drop-shadow(0 18px 24px rgba(17,17,17,.18)); z-index:2;
  -webkit-mask-image:linear-gradient(to bottom,#000 86%,rgba(0,0,0,0) 100%);
          mask-image:linear-gradient(to bottom,#000 86%,rgba(0,0,0,0) 100%);
}
.hero-credential-card{
  position:absolute; bottom:-28px; left:-36px;
  background:var(--hueso); padding:18px 22px; border-radius:6px;
  border:1px solid var(--hairline-strong); box-shadow:var(--elev-3);
  display:flex; align-items:center; gap:16px; z-index:3;
  animation:credentialFloat 6s var(--ease-in-out) infinite;
}
@keyframes credentialFloat{0%,100%{transform:translateY(0);}50%{transform:translateY(-5px);}}
.hc-mark{width:44px; height:44px; border-radius:50%; background:var(--carbon); color:var(--dorado); display:flex; align-items:center; justify-content:center; font-family:var(--font-display); font-style:italic; font-size:20px;}
.hc-lines{display:flex; flex-direction:column; gap:2px;}
.hc-l1{font-size:10px; letter-spacing:.2em; text-transform:uppercase; color:var(--piedra); font-weight:500;}
.hc-l2{font-family:var(--font-display); font-size:15px; color:var(--carbon); line-height:1.1;}
.hero-signature{position:absolute; left:28px; bottom:26px; font-family:var(--font-script); font-size:36px; color:rgba(250,246,241,.62); line-height:1; transform:rotate(-4deg); z-index:3; pointer-events:none; text-shadow:0 1px 12px rgba(17,17,17,.15);}
@media(max-width:900px){
  .hero-grid{grid-template-columns:1fr; gap:64px;}
  .hero-editorial{padding:120px 0 80px;}
  .hero-credential-card{left:16px; bottom:-22px;}
}

/* ============================================================
   CREDENTIALS STRIP — logos reales
   ============================================================ */
.credentials-strip{padding:72px 0 64px; background:var(--hueso); border-top:1px solid var(--hairline); border-bottom:1px solid var(--hairline);}
.credentials-eyebrow{text-align:center; margin-bottom:36px;}
.credentials-row{display:grid; grid-template-columns:repeat(4,1fr); gap:48px; align-items:center; justify-items:center;}
.cred-logo{
  display:flex; flex-direction:column; align-items:center; justify-content:center;
  gap:12px; filter:grayscale(100%); opacity:.6; transition:filter var(--dur-normal) var(--ease-premium), opacity var(--dur-normal) var(--ease-premium);
  text-align:center;
}
.cred-logo:hover{filter:grayscale(0%); opacity:1;}
.cred-logo .cred-img{height:64px; width:auto; max-width:180px; object-fit:contain;}
@media(max-width:900px){
  .credentials-row{grid-template-columns:repeat(2,1fr); gap:36px 24px;}
  .cred-logo .cred-img{height:54px;}
}
@media(max-width:480px){
  .credentials-row{grid-template-columns:1fr; gap:28px;}
}

/* ============================================================
   PHILOSOPHY DOCTOR
   ============================================================ */
.philosophy{padding:128px 0; background:var(--beige);}
.philosophy-grid{display:grid; grid-template-columns:.95fr 1.05fr; gap:96px; align-items:center;}
.philosophy-photo-wrap{position:relative; aspect-ratio:4/5;}
.photo-philosophy{
  position:absolute; inset:0; border-radius:16px; overflow:hidden;
  background:linear-gradient(200deg,#e9dcc8 0%,var(--nude) 55%,#b8a48b 100%);
  box-shadow:var(--elev-3); display:flex; align-items:flex-end; padding:32px;
}
.photo-philosophy::before{
  content:""; position:absolute; inset:0;
  background:radial-gradient(circle at 70% 25%,rgba(17,17,17,.18) 0%,transparent 45%),
             radial-gradient(circle at 15% 90%,rgba(250,246,241,.45) 0%,transparent 50%);
}
.photo-philosophy::after{content:""; position:absolute; inset:22px; border:1px solid rgba(250,246,241,.4); border-radius:6px; z-index:2; pointer-events:none;}
.photo-philosophy-img{
  position:absolute; inset:0; width:100%; height:100%;
  object-fit:contain; object-position:50% 50%;
  transform:scale(1.05) scaleX(-1); transform-origin:50% 50%;
  filter:drop-shadow(0 24px 28px rgba(17,17,17,.22)); z-index:1;
}
.philosophy-text{display:flex; flex-direction:column; gap:24px;}
.doc-name{font-family:var(--font-display); font-size:clamp(2rem,2.6vw + 0.5rem,2.875rem); letter-spacing:-0.01em; line-height:1.05; margin:0;}
.doc-sub{font-size:15px; letter-spacing:.04em; color:var(--dorado-deep); font-weight:500;}
.philosophy-quote{
  font-family:var(--font-display); font-style:italic;
  font-size:clamp(1.5rem,1.6vw + 1rem,2.125rem); line-height:1.25; letter-spacing:-0.005em;
  color:var(--carbon); margin:8px 0 0; max-width:22ch; text-wrap:balance;
}
.philosophy-quote .gold{color:var(--dorado);}
.philosophy-bio{color:var(--gr-ink-70); line-height:1.75; max-width:50ch; margin:0;}
.cred-list{list-style:none; padding:0; margin:8px 0 0; display:flex; flex-direction:column; gap:12px;}
.cred-list li{display:flex; align-items:flex-start; gap:14px; font-size:15px; color:var(--carbon); line-height:1.45; position:relative; padding-left:30px;}
.cred-list li::before{content:""; position:absolute; left:0; top:0; width:18px; height:18px; border-radius:50%; border:1px solid var(--dorado);}
.cred-list li::after{content:""; position:absolute; left:5px; top:7px; width:8px; height:4px; border-left:1.5px solid var(--dorado); border-bottom:1.5px solid var(--dorado); transform:rotate(-45deg);}
.philosophy-cta{margin-top:16px; align-self:flex-start; font-family:var(--font-display); font-style:italic; font-size:17px; color:var(--carbon); border-bottom:1px solid var(--carbon); padding-bottom:4px; transition:color var(--dur-normal) var(--ease-premium), border-color var(--dur-normal) var(--ease-premium);}
.philosophy-cta:hover{color:var(--dorado); border-bottom-color:var(--dorado);}
@media(max-width:900px){.philosophy-grid{grid-template-columns:1fr; gap:56px;} .philosophy{padding:80px 0;}}

/* ============================================================
   PROBLEMS GALLERY
   ============================================================ */
.problems{padding:112px 0; background:var(--hueso);}
.section-head-center{text-align:center; display:flex; flex-direction:column; align-items:center; gap:16px; margin-bottom:64px;}
.section-head-center h2{font-family:var(--font-display); font-size:clamp(2rem,3.2vw + 0.5rem,3rem); line-height:1.05; margin:0; max-width:22ch; text-wrap:balance;}
.section-head-center .gold{color:var(--dorado);}
.section-head-center .lead{margin:0; max-width:56ch;}
.problems-grid{display:grid; grid-template-columns:repeat(5,1fr); gap:24px;}
.problem-card{background:var(--beige); border:1px solid var(--hairline); border-radius:12px; overflow:hidden; display:flex; flex-direction:column; transition:transform var(--dur-normal) var(--ease-premium), box-shadow var(--dur-normal) var(--ease-premium), border-color var(--dur-normal) var(--ease-premium);}
.problem-card:hover{transform:translateY(-4px); box-shadow:var(--elev-2); border-color:var(--hairline-strong);}
.problem-card .pc-img{aspect-ratio:7/5; background:linear-gradient(170deg,var(--gr-cream-deep) 0%,#d4c5b5 100%); position:relative; display:flex; align-items:center; justify-content:center;}
.problem-card .pc-img::after{content:""; position:absolute; inset:14px; border:1px solid rgba(17,17,17,.08); border-radius:6px;}
.problem-card .pc-img-real{background:var(--carbon);}
.problem-card .pc-img-real::after{border-color:rgba(250,246,241,.18);}
.pc-img-photo{position:absolute; inset:0; width:100%; height:100%; object-fit:cover; object-position:50% 50%; transition:transform var(--dur-normal) var(--ease-premium), filter var(--dur-normal) var(--ease-premium);}
.problem-card:hover .pc-img-photo{transform:scale(1.04); filter:saturate(1.05);}
.problem-card .pc-body{padding:22px 22px 26px; display:flex; flex-direction:column; gap:10px; flex:1;}
.pc-eyebrow{font-size:10.5px; letter-spacing:.18em; text-transform:uppercase; color:var(--dorado); font-weight:500; display:inline-flex; align-items:center; gap:8px;}
.pc-eyebrow .num{color:var(--piedra); font-family:var(--font-display); font-style:italic; font-size:13px; letter-spacing:0;}
.pc-title{font-family:var(--font-display); font-size:18px; line-height:1.2; margin:0; color:var(--carbon); letter-spacing:-0.005em;}
.pc-desc{font-size:13.5px; color:var(--gr-ink-70); line-height:1.55; margin:0;}
.problems-foot{text-align:center; margin-top:48px; color:var(--gr-ink-70); font-size:15px;}
.problems-foot a{font-family:var(--font-display); font-style:italic; color:var(--carbon); border-bottom:1px solid var(--carbon);}
.problems-foot a:hover{color:var(--dorado); border-bottom-color:var(--dorado);}
@media(max-width:1100px){.problems-grid{grid-template-columns:repeat(3,1fr);}}
@media(max-width:720px){
  .problems-grid{grid-auto-flow:column; grid-auto-columns:75%; grid-template-columns:none; overflow-x:auto; scroll-snap-type:x mandatory; gap:16px; padding:4px 32px; margin:0 -32px;}
  .problem-card{scroll-snap-align:start;}
}

/* ============================================================
   FOUR REASONS
   ============================================================ */
.reasons{padding:112px 0; background:var(--beige);}
.reasons-grid{display:grid; grid-template-columns:repeat(2,1fr); gap:28px;}
.reason-card{background:var(--hueso); border:1px solid var(--hairline); border-radius:12px; padding:40px 36px; display:flex; flex-direction:column; gap:18px; position:relative; transition:transform var(--dur-normal) var(--ease-premium), box-shadow var(--dur-normal) var(--ease-premium), border-color var(--dur-normal) var(--ease-premium);}
.reason-card:hover{transform:translateY(-4px); box-shadow:var(--elev-2); border-color:var(--hairline-strong);}
.reason-icon{width:32px; height:32px; color:var(--dorado);}
.reason-num{position:absolute; top:28px; right:32px; font-family:var(--font-display); font-style:italic; font-size:14px; color:var(--piedra); letter-spacing:.04em;}
.reason-title{font-family:var(--font-display); font-size:24px; line-height:1.15; margin:0; letter-spacing:-0.01em; max-width:18ch;}
.reason-desc{color:var(--gr-ink-70); font-size:15px; line-height:1.65; margin:0; max-width:38ch;}
@media(max-width:760px){.reasons-grid{grid-template-columns:1fr;} .reasons{padding:80px 0;}}

/* ============================================================
   PROCESS STEPS
   ============================================================ */
.process-wrap{padding:96px 0; background:var(--hueso);}
.process-container{background:var(--carbon); color:var(--hueso); border-radius:32px; padding:96px 64px; position:relative; overflow:hidden;}
.process-container::before{
  content:""; position:absolute; inset:0; pointer-events:none; opacity:.05; mix-blend-mode:screen;
  background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='220' height='220'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.6 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
  background-size:220px 220px;
}
.process-head{text-align:center; display:flex; flex-direction:column; align-items:center; gap:16px; margin-bottom:72px; position:relative;}
.process-head .eyebrow{color:var(--dorado);}
.process-head h2{font-family:var(--font-display); font-size:clamp(2rem,3.2vw + 0.5rem,3rem); color:var(--hueso); margin:0; line-height:1.05;}
.process-head h2 .gold{color:var(--dorado);}
.process-head .lead{color:rgba(245,240,235,.7); max-width:52ch; margin:0;}
.process-steps{display:grid; grid-template-columns:repeat(5,1fr); gap:0; position:relative; list-style:none; padding:0; margin:0;}
.process-steps::before{content:""; position:absolute; top:60px; left:10%; right:10%; height:1px; background-image:linear-gradient(to right,rgba(245,240,235,.4) 50%,transparent 50%); background-size:10px 1px; background-repeat:repeat-x; z-index:1;}
.process-step{position:relative; z-index:2; padding:0 16px; display:flex; flex-direction:column; gap:16px;}
.step-num{font-family:var(--font-display); font-size:48px; line-height:1; color:rgba(245,240,235,.45);}
.step-icon-wrap{width:56px; height:56px; border-radius:50%; border:1px solid rgba(196,164,124,.5); background:var(--carbon); display:flex; align-items:center; justify-content:center; margin:-4px 0 8px;}
.step-svg{width:28px; height:28px; color:var(--hueso);}
.step-title{font-family:var(--font-display); font-size:20px; margin:0; color:var(--hueso); line-height:1.2;}
.step-desc{margin:0; font-size:14px; color:rgba(245,240,235,.7); line-height:1.65; max-width:30ch;}
.process-cta-wrap{text-align:center; margin-top:72px;}
.process-cta{display:inline-flex; align-items:center; gap:12px; background:var(--hueso); color:var(--carbon); padding:16px 30px; border-radius:4px; font-family:var(--font-display); font-style:italic; font-size:16px; box-shadow:inset 0 0 0 1px rgba(196,164,124,.5); transition:box-shadow var(--dur-normal) var(--ease-premium);}
.process-cta:hover{box-shadow:inset 0 0 0 1px var(--dorado),0 12px 30px -12px rgba(196,164,124,.6);}
.process-cta svg{width:14px; height:14px; transition:transform var(--dur-micro) var(--ease-premium);}
.process-cta:hover svg{transform:translate(2px,-2px);}
@media(max-width:1100px){
  .process-steps{grid-template-columns:repeat(6,1fr); gap:56px 0;}
  .process-steps::before{display:none;}
  .process-step:nth-child(1){grid-column:1/span 2;}
  .process-step:nth-child(2){grid-column:3/span 2;}
  .process-step:nth-child(3){grid-column:5/span 2;}
  .process-step:nth-child(4){grid-column:2/span 2;}
  .process-step:nth-child(5){grid-column:4/span 2;}
}
@media(max-width:900px){
  .process-container{padding:64px 32px; border-radius:20px;}
  .process-steps{grid-template-columns:1fr; gap:48px;}
  .process-step:nth-child(n){grid-column:1/-1;}
  .process-step{padding-left:64px; padding-right:0;}
  .process-steps::before{display:block; top:0; bottom:0; left:32px; right:auto; width:1px; height:auto; background-image:linear-gradient(to bottom,rgba(245,240,235,.4) 50%,transparent 50%); background-size:1px 10px;}
}

/* ============================================================
   TESTIMONIALS
   ============================================================ */
.testimonials{padding:112px 0; background:var(--beige);}
.testimonial-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:28px;}
.testimonial-card{background:var(--hueso); border:1px solid var(--hairline); border-radius:12px; padding:48px 36px 36px; position:relative; display:flex; flex-direction:column; gap:20px; transition:transform var(--dur-normal) var(--ease-premium), box-shadow var(--dur-normal) var(--ease-premium);}
.testimonial-card:hover{transform:translateY(-4px); box-shadow:var(--elev-2);}
.t-quote-mark{position:absolute; top:-14px; left:24px; font-family:var(--font-display); font-size:96px; line-height:1; color:var(--dorado); user-select:none;}
.t-quote{font-family:var(--font-display); font-style:italic; font-size:18px; line-height:1.6; color:var(--carbon); margin:8px 0 0; letter-spacing:-0.005em;}
.t-rule{width:40px; height:1px; background:var(--dorado); margin:4px 0;}
.t-footer{display:flex; flex-direction:column; gap:2px;}
.t-name{font-size:14px; font-weight:500; color:var(--carbon); letter-spacing:.01em;}
.t-meta{font-size:12px; color:var(--piedra); letter-spacing:.04em;}
.testimonial-card.t-feature{grid-column:span 2; background:var(--carbon); color:var(--hueso); padding:56px 48px 44px;}
.t-body{display:flex; flex-direction:column; gap:18px;}
.testimonial-card.t-feature .t-quote{color:var(--hueso); font-size:22px; line-height:1.55;}
.testimonial-card.t-feature .t-name{color:var(--hueso);}
.testimonial-card.t-feature .t-meta{color:rgba(245,240,235,.65);}
.t-aligner-aside{grid-column:span 1; position:relative; display:flex; align-items:center; justify-content:center; padding:0 16px;
  background:radial-gradient(ellipse 70% 60% at 50% 50%,rgba(196,164,124,.22) 0%,rgba(196,164,124,.07) 45%,transparent 75%);
}
.t-aligner-img{width:100%; max-width:320px; height:auto; filter:drop-shadow(0 22px 32px rgba(17,17,17,.18)) drop-shadow(0 0 26px rgba(196,164,124,.18)); animation:alignerFloat 7s var(--ease-in-out) infinite;}
@keyframes alignerFloat{0%,100%{transform:translateY(0) rotate(0);}50%{transform:translateY(-7px) rotate(-1.5deg);}}
@media(max-width:980px){.testimonial-grid{grid-template-columns:1fr 1fr;} .testimonial-card.t-feature{grid-column:span 2;} .t-aligner-aside{grid-column:span 2; min-height:240px;}}
@media(max-width:700px){
  .testimonial-grid{grid-auto-flow:column; grid-auto-columns:82%; grid-template-columns:none; overflow-x:auto; scroll-snap-type:x mandatory; gap:16px; padding:4px 32px; margin:0 -32px;}
  .testimonial-card{scroll-snap-align:start;}
  .testimonial-card.t-feature{grid-column:auto;}
  .t-aligner-aside{display:none;}
}

/* ============================================================
   FINAL CTA
   ============================================================ */
.final-cta{padding:144px 0 128px; background:var(--hueso); position:relative;}
.final-cta-grid{display:grid; grid-template-columns:.95fr 1.05fr; gap:96px; align-items:center;}
.final-cta-photo-wrap{position:relative; aspect-ratio:4/5;}
.final-cta-inner{max-width:560px; display:flex; flex-direction:column; align-items:flex-start; gap:24px;}
.final-cta h2{font-family:var(--font-display); font-size:clamp(2.25rem,4vw + 0.5rem,3.5rem); line-height:1.06; margin:0; max-width:14ch; text-wrap:balance;}
.final-cta h2 .gold{color:var(--dorado);}
.final-cta .lead{margin:4px 0 0; max-width:46ch;}
.btn-big{margin-top:20px; padding:22px 44px; font-family:var(--font-display); font-size:19px; background:var(--carbon); color:var(--hueso); border:0; border-radius:6px; display:inline-flex; align-items:center; gap:14px;
  box-shadow:inset 0 0 0 1px rgba(196,164,124,.55),0 18px 40px -16px rgba(196,164,124,.45);
  transition:box-shadow var(--dur-normal) var(--ease-premium);
}
.btn-big:hover{box-shadow:inset 0 0 0 1px rgba(196,164,124,.95),0 24px 50px -14px rgba(196,164,124,.6);}
.btn-big svg{width:18px; height:18px; transition:transform var(--dur-micro) var(--ease-premium);}
.btn-big:hover svg{transform:translate(3px,-3px);}
.final-cta-divider{width:48px; height:1px; background:var(--dorado); margin:24px 0 8px; opacity:.7;}
.final-cta-filter{font-family:var(--font-display); font-style:italic; font-size:14.5px; color:var(--piedra); line-height:1.6; max-width:50ch; margin:0;}
.final-cta-photo-wrap .photo-doctor-img{transform:scale(1.18);}
@media(max-width:900px){.final-cta-grid{grid-template-columns:1fr; gap:64px;} .final-cta{padding:96px 0 88px;} .final-cta-inner{max-width:none;}}

/* ============================================================
   FOOTER
   ============================================================ */
footer{background:var(--gr-ink); color:var(--gr-cream); padding:80px 32px 40px;}
.iv-footer-inner{max-width:var(--container); margin:0 auto;}
.iv-footer-grid{display:grid; grid-template-columns:1.4fr 1fr 1fr 1fr; gap:48px; padding-bottom:56px; border-bottom:1px solid var(--border-on-dark);}
.iv-footer-logo{height:44px; margin-bottom:24px; display:block;}
.iv-footer-grid .lead{color:rgba(245,240,235,.7); font-size:14px; line-height:1.6; max-width:32ch; margin:0;}
.iv-footer-col-label{font-size:11px; letter-spacing:.18em; text-transform:uppercase; color:var(--gr-gold); margin-bottom:18px; font-weight:500;}
.iv-footer-grid ul{list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px;}
.iv-footer-grid ul a{color:rgba(245,240,235,.8); font-size:14px;}
.iv-footer-grid ul a:hover{color:var(--dorado);}
.iv-footer-bottom{display:flex; justify-content:space-between; align-items:center; padding-top:28px; gap:16px; flex-wrap:wrap;}
.iv-footer-bottom .copy{font-size:12px; color:rgba(245,240,235,.5);}
.iv-footer-bottom .script{font-family:var(--font-script); font-size:24px; color:var(--gr-gold);}
@media(max-width:1024px){.iv-footer-grid{grid-template-columns:1fr 1fr; gap:32px;}}
@media(max-width:767px){.iv-footer-grid{grid-template-columns:1fr;} footer{padding:56px 24px 32px;}}

/* Reveal helper */
.reveal{opacity:0; transform:translateY(8px); transition:opacity 700ms var(--ease-premium), transform 700ms var(--ease-premium);}
.reveal.in{opacity:1; transform:translateY(0);}
@media(prefers-reduced-motion:reduce){
  .btn-pulse,.diamond,.hero-credential-card,.t-aligner-img,.hv-scroll-hint svg{animation:none !important;}
  .reveal{opacity:1; transform:none;}
}

/* ============================================================
   RESPONSIVE OVERHAUL — Mobile-first fixes for every section
   Breakpoints: 1024 | 900 | 768 | 600 | 480 | 380
   ============================================================ */

/* --- Global guards: zero horizontal scroll, contain media --- */
html, body{overflow-x:hidden; max-width:100%;}
img, video, iframe{max-width:100%; height:auto;}

/* Reduce side gutters progressively on small screens */
@media(max-width:768px){.kit-container{padding:0 24px;}}
@media(max-width:480px){.kit-container{padding:0 20px;}}
@media(max-width:380px){.kit-container{padding:0 16px;}}

/* --- HEADER (utility bar + nav + overlay) --- */
@media(max-width:600px){
  .gr-utility{padding:0 20px; font-size:9.5px; letter-spacing:.18em;}
  .gr-utility .uitem+.uitem{margin-left:14px; padding-left:14px;}
  .gr-nav{height:78px;}
  .gr-nav-inner{padding:0 20px; gap:12px;}
  .gr-logo .gr-logo-img{height:40px;}
}
@media(max-width:480px){
  .gr-utility{padding:0 16px;}
  .gr-nav-inner{padding:0 16px;}
  .gr-logo .gr-logo-img{height:36px;}
  .gr-overlay{padding:88px 24px 40px;}
  .gr-overlay-link{font-size:24px; padding:14px 0;}
  .gr-overlay-cta{padding:14px 28px;}
}

/* --- HERO VIDEO --- */
@media(max-width:600px){
  .hero-video{padding-top:110px;}
  .hv-stage{max-height:64vh; min-height:240px;}
  .hv-overlay{padding:22px 18px;}
  .hv-tag{font-size:9px; letter-spacing:.18em; gap:10px;}
  .hv-tag-meta{font-size:11px;}
  .hv-tag-sep{display:none;}
}
@media(max-width:380px){
  .hv-stage{max-height:56vh;}
  .hv-tag{flex-wrap:wrap; gap:6px;}
}

/* --- HERO EDITORIAL --- */
@media(max-width:1024px){
  .hero-editorial{padding:104px 0 72px;}
  .hero-grid{gap:64px;}
}
@media(max-width:768px){
  .hero-editorial{padding:96px 0 64px;}
  .hero-grid{gap:48px;}
  .hero-actions{gap:18px; flex-direction:column; align-items:stretch;}
  .hero-actions .gr-cta{justify-content:center; width:100%; padding:16px 24px;}
  .hero-link-secondary{justify-content:center; align-self:center;}
  .hero-pill{font-size:10.5px; letter-spacing:.16em; padding:8px 14px;}
  .hero-credential-card{left:auto; right:16px; bottom:-22px; padding:14px 18px; gap:14px;}
  .hc-mark{width:38px; height:38px; font-size:17px;}
  .hc-l1{font-size:9px;}
  .hc-l2{font-size:13px;}
  .hero-signature{font-size:28px; bottom:18px; left:18px;}
  .photo-doctor::after{inset:12px;}
}
@media(max-width:480px){
  .hero-editorial{padding:88px 0 56px;}
  .hero-grid{gap:40px;}
  .hero-title{font-size:clamp(1.85rem, 8vw, 2.4rem); max-width:none;}
  .hero-text .lead{font-size:1rem; line-height:1.6;}
  .hero-credential-card{right:8px; bottom:-18px; padding:12px 14px;}
  .hc-mark{width:34px; height:34px; font-size:15px;}
  .hc-l2{font-size:12.5px;}
  .hero-signature{font-size:24px;}
}

/* --- CREDENTIALS STRIP (logos) --- */
@media(max-width:900px){
  .credentials-strip{padding:56px 0 48px;}
  .credentials-row{grid-template-columns:repeat(2,1fr); gap:32px 24px;}
}
@media(max-width:480px){
  .credentials-strip{padding:48px 0 40px;}
  .credentials-row{grid-template-columns:repeat(2,1fr); gap:28px 16px;}
  .cred-logo .cred-img{height:44px; max-width:140px;}
  .credentials-eyebrow{margin-bottom:24px;}
}
@media(max-width:380px){
  .cred-logo .cred-img{height:38px;}
}

/* --- PHILOSOPHY --- */
@media(max-width:900px){
  .philosophy{padding:80px 0;}
  .philosophy-grid{gap:48px;}
}
@media(max-width:600px){
  .philosophy{padding:64px 0;}
  .philosophy-grid{gap:36px;}
  .doc-name{font-size:1.85rem;}
  .philosophy-quote{font-size:1.45rem; max-width:none;}
  .cred-list li{font-size:14px; padding-left:26px;}
  .photo-philosophy{padding:20px;}
  .photo-philosophy::after{inset:14px;}
}

/* --- PROBLEMS GALLERY (carousel on small) --- */
@media(max-width:1100px){.problems-grid{grid-template-columns:repeat(3,1fr); gap:20px;}}
@media(max-width:900px){.problems{padding:80px 0;} .section-head-center{margin-bottom:48px;}}
@media(max-width:720px){
  .problems-grid{grid-auto-flow:column; grid-auto-columns:78%; grid-template-columns:none; overflow-x:auto; -webkit-overflow-scrolling:touch; scroll-snap-type:x mandatory; gap:14px; padding:4px 24px 14px; margin:0 -24px;}
  .problem-card{scroll-snap-align:start;}
  .problems-foot{margin-top:32px; font-size:14px;}
}
@media(max-width:480px){
  .problems{padding:64px 0;}
  .section-head-center{margin-bottom:36px; gap:12px;}
  .section-head-center h2{font-size:clamp(1.6rem, 7vw, 2rem);}
  .section-head-center .lead{font-size:15.5px;}
  .problems-grid{grid-auto-columns:84%; padding:4px 20px 14px; margin:0 -20px;}
  .problem-card .pc-body{padding:18px 18px 22px;}
  .pc-title{font-size:16.5px;}
  .pc-desc{font-size:13px;}
}

/* --- FOUR REASONS --- */
@media(max-width:760px){
  .reasons{padding:72px 0;}
  .reason-card{padding:32px 26px; gap:14px;}
  .reason-num{top:24px; right:26px;}
  .reason-title{font-size:21px;}
}
@media(max-width:480px){
  .reasons{padding:56px 0;}
  .reasons-grid{gap:18px;}
  .reason-card{padding:28px 22px;}
  .reason-icon{width:28px; height:28px;}
  .reason-title{font-size:19px;}
  .reason-desc{font-size:14px;}
}

/* --- PROCESS STEPS --- */
@media(max-width:900px){
  .process-wrap{padding:72px 0;}
  .process-container{padding:56px 28px; border-radius:20px;}
  .process-head{margin-bottom:56px;}
}
@media(max-width:600px){
  .process-wrap{padding:56px 0;}
  .process-container{padding:48px 22px; border-radius:16px;}
  .process-head{margin-bottom:48px; gap:14px;}
  .process-head h2{font-size:clamp(1.65rem, 7vw, 2.2rem);}
  .process-head .lead{font-size:15px;}
  .process-steps{gap:40px;}
  .process-step{padding-left:52px;}
  .process-steps::before{left:22px;}
  .step-num{font-size:40px;}
  .step-icon-wrap{width:48px; height:48px;}
  .step-svg{width:24px; height:24px;}
  .step-title{font-size:18px;}
  .step-desc{font-size:13.5px;}
  .process-cta-wrap{margin-top:56px;}
  .process-cta{padding:14px 24px; font-size:15px;}
}
@media(max-width:380px){
  .process-container{padding:40px 18px;}
  .process-step{padding-left:44px;}
  .process-steps::before{left:18px;}
}

/* --- TESTIMONIALS --- */
@media(max-width:980px){
  .testimonials{padding:80px 0;}
}
@media(max-width:700px){
  /* Override original horizontal carousel → vertical stack, compact + clean */
  .testimonials{padding:56px 0 48px;}
  .section-head-center{margin-bottom:32px; gap:10px;}
  .section-head-center h2{font-size:clamp(1.5rem, 6.5vw, 1.9rem); line-height:1.15;}
  .testimonial-grid{
    grid-template-columns:1fr;
    grid-auto-flow:row;
    grid-auto-columns:auto;
    overflow:visible;
    scroll-snap-type:none;
    padding:0;
    margin:0;
    gap:12px;
  }
  .testimonial-card{
    padding:22px 22px 20px;
    gap:12px;
    border-radius:10px;
    scroll-snap-align:none;
    box-shadow:0 1px 3px rgba(17,17,17,.04);
  }
  .testimonial-card:hover{transform:none; box-shadow:0 1px 3px rgba(17,17,17,.04);}
  .testimonial-card.t-feature{
    grid-column:auto;
    padding:26px 22px 22px;
  }
  .t-quote-mark{
    font-size:48px;
    top:-2px;
    left:18px;
    line-height:1;
  }
  .t-quote{
    font-size:14.5px;
    line-height:1.55;
    margin:6px 0 0;
  }
  .testimonial-card.t-feature .t-quote{font-size:15px; line-height:1.55;}
  .t-rule{width:32px; margin:2px 0;}
  .t-name{font-size:13px;}
  .t-meta{font-size:11.5px;}
  .t-body{gap:14px;}
  .t-aligner-aside{display:none;}
}
@media(max-width:480px){
  .testimonials{padding:48px 0 40px;}
  .section-head-center{margin-bottom:28px;}
  .testimonial-card{padding:20px 18px 18px;}
  .testimonial-card.t-feature{padding:24px 18px 20px;}
  .t-quote{font-size:14px;}
  .testimonial-card.t-feature .t-quote{font-size:14.5px;}
  .t-quote-mark{font-size:42px; left:14px;}
}

/* --- FINAL CTA --- */
@media(max-width:900px){
  .final-cta{padding:96px 0 88px;}
  .final-cta-grid{gap:56px;}
}
@media(max-width:600px){
  .final-cta{padding:72px 0 64px;}
  .final-cta-grid{gap:40px;}
  .final-cta-inner{gap:18px;}
  .final-cta h2{font-size:clamp(2rem, 8vw, 2.6rem); max-width:none;}
  .final-cta .lead{font-size:1rem;}
  .btn-big{padding:18px 30px; font-size:16px; width:100%; justify-content:center; gap:10px; box-shadow:inset 0 0 0 1px rgba(196,164,124,.55),0 12px 30px -14px rgba(196,164,124,.45);}
  .btn-big svg{width:16px; height:16px;}
  .final-cta-filter{font-size:13.5px; max-width:none;}
}
@media(max-width:480px){
  .final-cta{padding:56px 0 56px;}
  .final-cta-photo-wrap .photo-doctor-img{transform:scale(1.1);}
  .final-cta-grid{gap:32px;}
}

/* --- FOOTER --- */
@media(max-width:600px){
  footer{padding:56px 20px 28px;}
  .iv-footer-grid{padding-bottom:36px; gap:28px;}
  .iv-footer-logo{height:38px; margin-bottom:18px;}
  .iv-footer-grid .lead{font-size:13.5px;}
  .iv-footer-col-label{font-size:10.5px; margin-bottom:14px;}
  .iv-footer-grid ul a{font-size:13.5px;}
  .iv-footer-bottom{flex-direction:column; align-items:flex-start; gap:10px; padding-top:22px;}
  .iv-footer-bottom .script{font-size:21px;}
}
@media(max-width:380px){
  footer{padding:48px 16px 24px;}
}

/* --- Accessibility: tap targets large enough on phones --- */
@media(max-width:768px){
  .gr-cta, .btn-big, .process-cta, .hero-link-secondary, .hero-cta, .philosophy-cta, .problems-foot a{min-height:44px;}
}

/* ============================================================
   CREDENTIALS STRIP — staggered entrance + auto-spotlight cycle
   "Avalada por" section: cada logo se enciende por turnos
   ============================================================ */

/* Disable the row-level fade so each logo can stagger individually */
.credentials-row.reveal{opacity:1; transform:none; transition:none;}

/* Each logo starts hidden, slides up + fades in when row enters viewport */
.credentials-row.reveal .cred-logo{
  opacity:0;
  transform:translateY(14px) scale(.96);
  filter:grayscale(100%);
  transition:
    opacity 720ms var(--ease-premium),
    transform 720ms var(--ease-premium),
    filter 720ms var(--ease-premium);
}
.credentials-row.reveal.in .cred-logo{
  opacity:.5;
  transform:translateY(0) scale(1);
}
.credentials-row.reveal.in .cred-logo:nth-child(1){transition-delay:100ms;}
.credentials-row.reveal.in .cred-logo:nth-child(2){transition-delay:220ms;}
.credentials-row.reveal.in .cred-logo:nth-child(3){transition-delay:340ms;}
.credentials-row.reveal.in .cred-logo:nth-child(4){transition-delay:460ms;}

/* After entrance, each logo takes its turn in the "spotlight":
   full color + lift + subtle gold glow underneath. 16s loop, 4s slot each. */
.credentials-row.in .cred-logo{
  animation:credSpotlight 16s ease-in-out infinite;
}
.credentials-row.in .cred-logo:nth-child(1){animation-delay:1100ms;}
.credentials-row.in .cred-logo:nth-child(2){animation-delay:5100ms;}
.credentials-row.in .cred-logo:nth-child(3){animation-delay:9100ms;}
.credentials-row.in .cred-logo:nth-child(4){animation-delay:13100ms;}

@keyframes credSpotlight{
  0%, 24%, 100%{
    filter:grayscale(100%);
    opacity:.5;
    transform:translateY(0) scale(1);
  }
  6%, 18%{
    filter:grayscale(0%);
    opacity:1;
    transform:translateY(-4px) scale(1.06);
  }
}

/* Subtle gold underglow that travels with the spotlight */
.credentials-row.in .cred-logo{position:relative;}
.credentials-row.in .cred-logo::after{
  content:"";
  position:absolute; inset:auto -8px -10px -8px; height:10px;
  background:radial-gradient(ellipse 60% 100% at 50% 0%, rgba(196,164,124,.45), transparent 70%);
  opacity:0; pointer-events:none;
  animation:credGlow 16s ease-in-out infinite;
}
.credentials-row.in .cred-logo:nth-child(1)::after{animation-delay:1100ms;}
.credentials-row.in .cred-logo:nth-child(2)::after{animation-delay:5100ms;}
.credentials-row.in .cred-logo:nth-child(3)::after{animation-delay:9100ms;}
.credentials-row.in .cred-logo:nth-child(4)::after{animation-delay:13100ms;}

@keyframes credGlow{
  0%, 24%, 100%{opacity:0; transform:scaleX(.6);}
  6%, 18%{opacity:1; transform:scaleX(1);}
}

/* Pause the cycle on hover anywhere in the row, full-spotlight the hovered one */
.credentials-row:hover .cred-logo, .credentials-row:hover .cred-logo::after{
  animation-play-state:paused;
}
.cred-logo:hover{
  filter:grayscale(0%) !important;
  opacity:1 !important;
  transform:translateY(-4px) scale(1.06) !important;
  transition:filter 260ms var(--ease-premium),
             opacity 260ms var(--ease-premium),
             transform 260ms var(--ease-premium) !important;
}

/* Respect users who prefer no motion */
@media (prefers-reduced-motion: reduce){
  .credentials-row.reveal .cred-logo,
  .credentials-row.in .cred-logo,
  .credentials-row.in .cred-logo::after{
    animation:none !important;
    transition:none !important;
    opacity:.55;
    transform:none;
    filter:grayscale(100%);
  }
  .credentials-row.in .cred-logo::after{display:none;}
}

/* ============================================================
   PROCESS STEPS — pulso dorado + entrada sincronizada
   "Cómo funciona tu tratamiento"
   • el cometa pasa EXACTAMENTE encima de cada número
   • al pasar el cometa sobre el número, aparece el texto debajo
   • todo arranca al entrar la sección al viewport (clase .in)
   ============================================================ */

/* 0) ALINEACIÓN — centramos el contenido en desktop para que
      el pulso quede vertical y horizontalmente sobre cada número.
      Mobile mantiene el layout left-aligned original. */
@media (min-width: 1101px){
  .process-step{
    align-items: center;
  }
  .process-step .step-title,
  .process-step .step-desc{
    text-align: center;
  }
  .process-step .step-desc{
    max-width: 30ch;
  }
}

/* 1) NÚMEROS — entran escalonados, sincronizados con la llegada del cometa */
.process-steps .step-num{
  opacity: 0;
  transform: translateY(18px) scale(.92);
  transition:
    opacity 550ms var(--ease-premium),
    transform 550ms var(--ease-premium);
}
.process-steps.reveal.in .step-num{
  opacity: 1;
  transform: translateY(0) scale(1);
}
/* Delays alineados al cometa de 4.5s: 4% / 20% / 40% / 60% / 78% */
.process-steps.reveal.in .process-step:nth-child(1) .step-num{ transition-delay: 180ms;  }
.process-steps.reveal.in .process-step:nth-child(2) .step-num{ transition-delay: 900ms;  }
.process-steps.reveal.in .process-step:nth-child(3) .step-num{ transition-delay: 1800ms; }
.process-steps.reveal.in .process-step:nth-child(4) .step-num{ transition-delay: 2700ms; }
.process-steps.reveal.in .process-step:nth-child(5) .step-num{ transition-delay: 3510ms; }

/* Destello dorado en el número justo cuando el cometa pasa encima */
.process-steps.reveal.in .step-num{
  animation: stepNumFlash 1.2s var(--ease-premium) forwards;
}
.process-steps.reveal.in .process-step:nth-child(1) .step-num{ animation-delay: 180ms;  }
.process-steps.reveal.in .process-step:nth-child(2) .step-num{ animation-delay: 900ms;  }
.process-steps.reveal.in .process-step:nth-child(3) .step-num{ animation-delay: 1800ms; }
.process-steps.reveal.in .process-step:nth-child(4) .step-num{ animation-delay: 2700ms; }
.process-steps.reveal.in .process-step:nth-child(5) .step-num{ animation-delay: 3510ms; }

@keyframes stepNumFlash{
  0%   { color: rgba(245,240,235,.45); text-shadow: none; }
  40%  { color: rgba(196,164,124,1);   text-shadow: 0 0 22px rgba(196,164,124,.55); }
  100% { color: rgba(245,240,235,.45); text-shadow: none; }
}

/* 2) TEXTO (ícono + título + descripción) — entra justo DESPUÉS de que
      el cometa pasó sobre el número correspondiente, en cascada vertical.
      Da la sensación de que el pulso "deja caer" el contenido. */
.process-steps .step-icon-wrap,
.process-steps .step-title,
.process-steps .step-desc{
  opacity: 0;
  transform: translateY(14px);
  transition:
    opacity 650ms var(--ease-premium),
    transform 650ms var(--ease-premium);
}
.process-steps.reveal.in .step-icon-wrap,
.process-steps.reveal.in .step-title,
.process-steps.reveal.in .step-desc{
  opacity: 1;
  transform: translateY(0);
}
/* Paso 1 — el cometa llega a 180ms, los textos siguen a 350/450/550ms */
.process-steps.reveal.in .process-step:nth-child(1) .step-icon-wrap{ transition-delay: 350ms;  }
.process-steps.reveal.in .process-step:nth-child(1) .step-title    { transition-delay: 450ms;  }
.process-steps.reveal.in .process-step:nth-child(1) .step-desc     { transition-delay: 550ms;  }
/* Paso 2 — cometa a 900ms */
.process-steps.reveal.in .process-step:nth-child(2) .step-icon-wrap{ transition-delay: 1070ms; }
.process-steps.reveal.in .process-step:nth-child(2) .step-title    { transition-delay: 1170ms; }
.process-steps.reveal.in .process-step:nth-child(2) .step-desc     { transition-delay: 1270ms; }
/* Paso 3 — cometa a 1800ms */
.process-steps.reveal.in .process-step:nth-child(3) .step-icon-wrap{ transition-delay: 1970ms; }
.process-steps.reveal.in .process-step:nth-child(3) .step-title    { transition-delay: 2070ms; }
.process-steps.reveal.in .process-step:nth-child(3) .step-desc     { transition-delay: 2170ms; }
/* Paso 4 — cometa a 2700ms */
.process-steps.reveal.in .process-step:nth-child(4) .step-icon-wrap{ transition-delay: 2870ms; }
.process-steps.reveal.in .process-step:nth-child(4) .step-title    { transition-delay: 2970ms; }
.process-steps.reveal.in .process-step:nth-child(4) .step-desc     { transition-delay: 3070ms; }
/* Paso 5 — cometa a 3510ms */
.process-steps.reveal.in .process-step:nth-child(5) .step-icon-wrap{ transition-delay: 3680ms; }
.process-steps.reveal.in .process-step:nth-child(5) .step-title    { transition-delay: 3780ms; }
.process-steps.reveal.in .process-step:nth-child(5) .step-desc     { transition-delay: 3880ms; }

/* 3) PULSO DORADO — sólo arranca cuando la sección entra al viewport (.in)
      para que la primera pasada coincida con la cascada de números/textos. */
.process-steps::after{
  content: "";
  position: absolute;
  top: 54px;                /* línea está a top:60px; el dot de 12px queda centrado */
  left: 10%;
  width: 12px;
  height: 12px;
  margin-left: -6px;
  border-radius: 50%;
  background: var(--dorado);
  box-shadow:
    0 0 0 4px rgba(196,164,124,.18),
    0 0 18px rgba(196,164,124,.85),
    0 0 38px rgba(196,164,124,.45);
  z-index: 3;
  pointer-events: none;
  opacity: 0;               /* invisible hasta que la sección entra */
}
.process-steps.in::after{
  animation: pulseTravelH 4.5s ease-in-out infinite;
}

/* Keyframes: 4% / 20% / 40% / 60% / 78% son las paradas sobre cada número */
@keyframes pulseTravelH{
  0%   { left: 10%; opacity: 0; transform: scale(.4); }
  4%   { left: 10%; opacity: 1; transform: scale(1);  }
  20%  { left: 30%; opacity: 1; transform: scale(1);  }
  40%  { left: 50%; opacity: 1; transform: scale(1);  }
  60%  { left: 70%; opacity: 1; transform: scale(1);  }
  78%  { left: 90%; opacity: 1; transform: scale(1);  }
  86%  { left: 90%; opacity: 0; transform: scale(.4); }
  87%  { left: 10%; opacity: 0; transform: scale(.4); }
  100% { left: 10%; opacity: 0; transform: scale(.4); }
}

/* Layout intermedio (901-1100px): la línea está oculta → escondemos el pulso */
@media (max-width: 1100px){
  .process-steps.in::after,
  .process-steps::after{ display: none; }
}

/* MÓVIL ≤900px: línea vertical (left:32px). El pulso viaja de arriba a abajo */
@media (max-width: 900px){
  .process-steps.in::after,
  .process-steps::after{
    display: block;
    top: 0;
    left: 32px;
    margin-left: -6px;
    margin-top: -6px;
  }
  .process-steps.in::after{
    animation: pulseTravelV 4.5s ease-in-out infinite;
  }
}
@media (max-width: 600px){
  .process-steps.in::after,
  .process-steps::after{ left: 22px; }
}
@media (max-width: 380px){
  .process-steps.in::after,
  .process-steps::after{ left: 18px; }
}

@keyframes pulseTravelV{
  0%   { top: 0%;  opacity: 0; transform: scale(.4); }
  4%   { top: 0%;  opacity: 1; transform: scale(1);  }
  20%  { top: 22%; opacity: 1; transform: scale(1);  }
  40%  { top: 44%; opacity: 1; transform: scale(1);  }
  60%  { top: 66%; opacity: 1; transform: scale(1);  }
  78%  { top: 88%; opacity: 1; transform: scale(1);  }
  86%  { top: 88%; opacity: 0; transform: scale(.4); }
  87%  { top: 0%;  opacity: 0; transform: scale(.4); }
  100% { top: 0%;  opacity: 0; transform: scale(.4); }
}

/* prefers-reduced-motion: sin movimientos, todo visible desde el inicio */
@media (prefers-reduced-motion: reduce){
  .process-steps .step-num,
  .process-steps .step-icon-wrap,
  .process-steps .step-title,
  .process-steps .step-desc{
    opacity: 1 !important;
    transform: none !important;
    animation: none !important;
    transition: none !important;
  }
  .process-steps::after,
  .process-steps.in::after{ display: none !important; }
}
</style>

<script type="application/ld+json">
{"@context":"https://schema.org","@type":["Dentist","MedicalBusiness","LocalBusiness"],"@id":"https://dragloriarivera.com/#dentist","name":"Dra. Gloria Rivera","url":"https://dragloriarivera.com/","telephone":"+57 310 000 0000","email":"hola@dragloriarivera.com","priceRange":"$$$","address":{"@type":"PostalAddress","addressCountry":"CO"},"areaServed":{"@type":"Country","name":"Colombia"},"medicalSpecialty":"Orthodontics","sameAs":["https://www.instagram.com/dra_gloria_rivera"]}
</script>
</head>
<body>

<?php include __DIR__ . '/partials/header.php'; ?>

<main id="contenido">

<!-- ============ HERO VIDEO ============ -->
<section class="hero-video" aria-label="Animación · Invisalign por la Dra. Gloria Rivera">
  <div class="hv-stage">
    <video id="hv-video" class="hv-media"
           muted loop playsinline autoplay preload="metadata"
           aria-hidden="true">
      <source src="https://res.cloudinary.com/dafmpak8s/video/upload/q_auto/f_auto/v1778774057/intro_zohg9i.mp4" type="video/mp4">
    </video>
    <div class="hv-vignette" aria-hidden="true"></div>
    <div class="hv-overlay">
      <div class="hv-tag">
        <span class="hv-tag-rule" aria-hidden="true"></span>
        <span>Una sonrisa armónica</span>
        <span class="hv-tag-sep" aria-hidden="true">·</span>
        <span class="hv-tag-meta">animación</span>div>
      <a class="hv-scroll-hint" href="#doctora" aria-label="Continuar al hero editorial">
        <span>Continúa</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <polyline points="5 12 12 19 19 12"></polyline>
        </svg>
      </a>
    </div>
  </div>
</section>

<!-- ============ HERO EDITORIAL ============ -->
<section id="hero" class="hero-editorial" aria-labelledby="hero-heading">
  <div class="kit-container">
    <div class="hero-grid">
      <div class="hero-text reveal">
        <span class="eyebrow" style="color:var(--piedra)">
          Ortodoncia invisible
        </span>
        <h1 id="hero-heading" class="hero-title">
          Especialista en Ortodoncia <span class="gold">Invisible</span>
        </h1>
        <p class="lead" style="margin:0;max-width:46ch">
          La Dra. Gloria Rivera te ayuda a alinear tu sonrisa sin brackets, con tecnología Invisalign® y un plan diseñado caso por caso.
        </p>
        <span class="hero-pill">
          <span class="diamond" aria-hidden="true"></span>
          Invisalign Top Doctor Emerald
        </span>
        <div class="hero-actions">
          <a href="/agendar-valoracion" class="gr-cta btn-pulse hero-cta">
            <span class="gr-cta-label">Agenda ahora</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="gr-cta-arrow" style="width:16px;height:16px">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          
        </div>
      </div>

      <div class="hero-image-wrap reveal">
        <div class="photo-doctor">
          <img class="photo-doctor-img"
               src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774057/doctora-hero_rdxde5.png"
               alt="Dra. Gloria Rivera, ortodoncista especialista en Invisalign Top Doctor Emerald"
               width="1333" height="1180" loading="eager" fetchpriority="high" decoding="async" />
          <span class="hero-signature" aria-hidden="true">Dra. Gloria</span>
        </div>
        <div class="hero-credential-card">
          <div class="hc-mark" aria-hidden="true">◆</div>
          <div class="hc-lines">
            <span class="hc-l1">Certificada</span>
            <span class="hc-l2">Top Doctor Emerald · 2024</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ CREDENTIALS STRIP (logos reales) ============ -->
<section class="credentials-strip" aria-label="Avales y certificaciones">
  <div class="kit-container">
    <div class="credentials-eyebrow">
      <span class="eyebrow" style="color:var(--piedra)">
        <span style="width:18px;height:1px;background:var(--hairline-strong);display:inline-block;vertical-align:middle;margin-right:14px" aria-hidden="true"></span>
        Avalada por
        <span style="width:18px;height:1px;background:var(--hairline-strong);display:inline-block;vertical-align:middle;margin-left:14px" aria-hidden="true"></span>
      </span>
    </div>
    <div class="credentials-row reveal">
      <div class="cred-logo"><img class="cred-img" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778772459/logos-dr-gloria-rivera-01_fjt7js.webp" alt="Aval certificación 01" loading="lazy" decoding="async" /></div>
      <div class="cred-logo"><img class="cred-img" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778772459/logos-dr-gloria-rivera-02_ngkdxk.webp" alt="Aval certificación 02" loading="lazy" decoding="async" /></div>
      <div class="cred-logo"><img class="cred-img" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778772459/logos-dr-gloria-rivera-03_gqzpgm.webp" alt="Aval certificación 03" loading="lazy" decoding="async" /></div>
      <div class="cred-logo"><img class="cred-img" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778772459/logos-dr-gloria-rivera-04_hdovo6.webp" alt="Aval certificación 04" loading="lazy" decoding="async" /></div>
    </div>
  </div>
</section>

<!-- ============ PHILOSOPHY DOCTOR ============ -->
<section id="doctora" class="philosophy" aria-labelledby="doctora-heading">
  <div class="kit-container">
    <div class="philosophy-grid">
      <div class="philosophy-photo-wrap reveal">
        <div class="photo-philosophy">
          <img class="photo-philosophy-img"
               src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774057/invisalign-case_br9l6h.png"
               alt="Estuche premium de Invisalign abierto con un par de alineadores transparentes superior e inferior sobre fondo oscuro"
               width="741" height="777" loading="lazy" decoding="async" />
        </div>
      </div>
      <div class="philosophy-text reveal">
        <span class="eyebrow" style="color:var(--dorado)">Tu doctora</span>
        <h2 id="doctora-heading" class="doc-name">Dra. Gloria Rivera</h2>
        <span class="doc-sub">Especialista en Ortodoncia Invisible</span>
        <p class="philosophy-quote">
          «&nbsp;Hay una versión tuya<br/>
          que <span class="gold">sonríe sin pensarlo</span>.&nbsp;»
        </p>
        <p class="philosophy-bio">
          Tú ya la conoces. La has visto en tu imaginación. Es la que habla con más calma, se ríe sin cubrirse la boca, entra a una sala y no piensa en sus dientes.
          <br><br>
          Mi trabajo no es moverte los dientes. Es quitarte lo que te impide ser esa persona que ya eres por dentro.
        </p>
        <ul class="cred-list">
          <li>Top Doctor Emerald · Invisalign 2024</li>
          <li>Especialización en Ortodoncia · Universidad Javeriana</li>
          <li>Miembro activo de la FOC y la ACO</li>
        </ul>
        <a href="/ladoctora" class="philosophy-cta">Conocer mi historia completa →</a>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROBLEMS GALLERY ============ -->
<section id="que-resolvemos" class="problems" aria-labelledby="que-resolvemos-heading">
  <div class="kit-container">
    <div class="section-head-center">
      <span class="eyebrow">Qué resolvemos</span>
      <h2 id="que-resolvemos-heading">¿Te identificas con alguno de estos casos?</h2>
      <p class="lead">
        Son los casos que trato con mayor frecuencia. Si te ves reflejado en alguno, es probable que Invisalign sea para ti.
      </p>
    </div>
    <div class="problems-grid reveal">
      <article class="problem-card">
        <div class="pc-img pc-img-real"><img class="pc-img-photo" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774058/case-apinamiento_idgqoh.png" alt="Caso clínico: apiñamiento dental con dientes amontonados y rotados en el sector anterior" loading="lazy" decoding="async" /></div>
        <div class="pc-body">
          <span class="pc-eyebrow"><span class="num">01</span> · Apiñamiento</span>
          <h3 class="pc-title">Dientes amontonados o torcidos</h3>
          <p class="pc-desc">Falta de espacio entre piezas, rotaciones o cruzamientos visibles al sonreír.</p>
        </div>
      </article>
      <article class="problem-card">
        <div class="pc-img pc-img-real"><img class="pc-img-photo" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774058/case-diastemas_oqmhj0.png" alt="Caso clínico: diastema con un espacio visible entre los incisivos centrales superiores" loading="lazy" decoding="async" /></div>
        <div class="pc-body">
          <span class="pc-eyebrow"><span class="num">02</span> · Diastemas</span>
          <h3 class="pc-title">Espacios entre dientes</h3>
          <p class="pc-desc">Separaciones evidentes, especialmente entre los incisivos centrales.</p>
        </div>
      </article>
      <article class="problem-card">
        <div class="pc-img pc-img-real"><img class="pc-img-photo" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774056/case-mordida-profunda_hruzon.png" alt="Caso clínico: mordida profunda en la que los dientes superiores cubren en exceso a los inferiores" loading="lazy" decoding="async" /></div>
        <div class="pc-body">
          <span class="pc-eyebrow"><span class="num">03</span> · Mordida profunda</span>
          <h3 class="pc-title">Sobremordida marcada</h3>
          <p class="pc-desc">Los dientes superiores cubren los inferiores en exceso al cerrar la boca.</p>
        </div>
      </article>
      <article class="problem-card">
        <div class="pc-img pc-img-real"><img class="pc-img-photo" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774058/case-mordida-abierta_fjrziv.png" alt="Caso clínico: mordida abierta con espacio vertical entre los incisivos al cerrar la boca" loading="lazy" decoding="async" /></div>
        <div class="pc-body">
          <span class="pc-eyebrow"><span class="num">04</span> · Mordida abierta</span>
          <h3 class="pc-title">Dientes que no cierran</h3>
          <p class="pc-desc">Espacio vertical entre incisivos al cerrar, suele afectar la masticación.</p>
        </div>
      </article>
      <article class="problem-card">
        <div class="pc-img pc-img-real"><img class="pc-img-photo" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774058/case-mordida-cruzada_hza5zx.png" alt="Caso clínico: mordida cruzada con desalineación lateral entre los maxilares" loading="lazy" decoding="async" /></div>
        <div class="pc-body">
          <span class="pc-eyebrow"><span class="num">05</span> · Mordida cruzada</span>
          <h3 class="pc-title">Maxilares desalineados</h3>
          <p class="pc-desc">Dientes superiores e inferiores no encajan correctamente al lado o al frente.</p>
        </div>
      </article>
    </div>
    <p class="problems-foot">Si tu caso aparece aquí, <a href="#agenda">hablemos</a>.</p>
  </div>
</section>

<!-- ============ FOUR REASONS ============ -->
<section id="diferenciales" class="reasons" aria-labelledby="diferenciales-heading">
  <div class="kit-container">
    <div class="section-head-center">
      <span class="eyebrow">Por qué Dra. Gloria</span>
      <h2 id="diferenciales-heading">Cuatro razones que marcan la <span class="gold">diferencia</span></h2>
    </div>
    <div class="reasons-grid reveal">
      <article class="reason-card">
        <span class="reason-num">01</span>
        <svg class="reason-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M6 4.5h12l3 4.5-9 11.5L3 9z"/><path d="M6 4.5L3 9h18"/><path d="M9.5 9L12 20.5 14.5 9"/>
        </svg>
        <h3 class="reason-title">Invisalign Top Doctor Emerald</h3>
        <p class="reason-desc">Máximo nivel mundial de certificación Invisalign. Reservado a ortodoncistas con el mayor volumen de casos exitosos comprobados.</p>
      </article>
      <article class="reason-card">
        <span class="reason-num">02</span>
        <svg class="reason-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M9.5 4.8c-1.6 0-2.6 1-2.6 2.6 0 1 .3 2 .3 3s-.5 2.1-.5 3.1c0 2.1 1.1 4.8 2.2 4.8.8 0 1-1.4 1.5-2.4.4-.8.7-1.2 1.3-1.2s.9.4 1.3 1.2c.5 1 .7 2.4 1.5 2.4 1.1 0 2.2-2.7 2.2-4.8 0-1-.5-2.1-.5-3.1 0-1 .3-2 .3-3 0-1.6-1-2.6-2.6-2.6-1.1 0-1.6.8-2.2.8s-1.2-.8-2.2-.8z"/>
          <line x1="3" y1="20" x2="21" y2="20"/><line x1="3" y1="22" x2="21" y2="22" opacity="0.4"/>
        </svg>
        <h3 class="reason-title">Escáner iTero en consultorio</h3>
        <p class="reason-desc">Sin moldes incómodos. Resultado 3D antes de empezar el tratamiento. La tecnología es nuestra, no alquilada.</p>
      </article>
      <article class="reason-card">
        <span class="reason-num">03</span>
        <svg class="reason-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
          <path d="M8.5 10.5c.8 1.5 2.2 2.4 3.5 2.4s2.7-.9 3.5-2.4"/>
        </svg>
        <h3 class="reason-title">Seguimiento personal</h3>
        <p class="reason-desc">Comunicación directa con la doctora durante todo el tratamiento. Controles cada 6–8 semanas con Dra. Gloria, no con asistentes.</p>
      </article>
      <article class="reason-card">
        <span class="reason-num">04</span>
        <svg class="reason-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="12" cy="12" r="9.5"/>
          <path d="M7.5 13.5c1 2 2.6 3 4.5 3s3.5-1 4.5-3"/>
          <circle cx="8.8" cy="9.5" r="0.4" fill="currentColor" stroke="none"/>
          <circle cx="15.2" cy="9.5" r="0.4" fill="currentColor" stroke="none"/>
        </svg>
        <h3 class="reason-title">+500 casos desde 2020</h3>
        <p class="reason-desc">Experiencia clínica verificable. Cada caso con plan ClinCheck documentado y resultado predecible.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============ PROCESS STEPS ============ -->
<section id="proceso" class="process-wrap" aria-labelledby="proceso-heading">
  <div class="kit-container">
    <div class="process-container">
      <div class="process-head">
        <span class="eyebrow">Tu proceso</span>
        <h2 id="proceso-heading">Cómo funciona tu <span class="gold">tratamiento</span></h2>
        <p class="lead">Una experiencia guiada, precisa y personalizada desde tu primera valoración hasta la entrega de tus alineadores.</p>
      </div>

      <ol class="process-steps reveal">
        <li class="process-step">
          <span class="step-num">01</span>
          <div class="step-icon-wrap">
            <svg class="step-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <rect x="2" y="4" width="20" height="13" rx="1.5"/><line x1="1" y1="20" x2="23" y2="20"/>
              <circle cx="12" cy="9.5" r="1.8"/><path d="M8.5 14.2c.6-1.4 2-2.3 3.5-2.3s2.9.9 3.5 2.3"/>
              <circle cx="19" cy="6.5" r="0.6" fill="currentColor" stroke="none"/>
            </svg>
          </div>
          <h3 class="step-title">Reunión virtual personalizada</h3>
          <p class="step-desc">Conocemos tu caso, tus objetivos estéticos y funcionales, y resolvemos todas tus dudas antes de iniciar el tratamiento.</p>
        </li>
        <li class="process-step">
          <span class="step-num">02</span>
          <div class="step-icon-wrap">
            <svg class="step-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M8.2 3.6c-2 0-3.2 1.3-3.2 3.2 0 1.2.4 2.5.4 3.8 0 1.2-.6 2.6-.6 3.9 0 2.6 1.4 6 2.7 6 1 0 1.2-1.7 1.8-2.9.5-1 .9-1.5 1.6-1.5s1.1.5 1.6 1.5c.6 1.2.8 2.9 1.8 2.9 1.3 0 2.7-3.4 2.7-6 0-1.3-.6-2.7-.6-3.9 0-1.3.4-2.6.4-3.8 0-1.9-1.2-3.2-3.2-3.2-1.3 0-1.9.8-2.7.8s-1.4-.8-2.7-.8z"/>
              <path d="M9 11.5l2 2 3.5-3.5"/>
            </svg>
          </div>
          <h3 class="step-title">Valoración odontológica</h3>
          <p class="step-desc">Realizamos una evaluación clínica completa para revisar tu mordida, encías y estado general de salud oral.</p>
        </li>
        <li class="process-step">
          <span class="step-num">03</span>
          <div class="step-icon-wrap">
            <svg class="step-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M9.5 4.8c-1.6 0-2.6 1-2.6 2.6 0 1 .3 2 .3 3s-.5 2.1-.5 3.1c0 2.1 1.1 4.8 2.2 4.8.8 0 1-1.4 1.5-2.4.4-.8.7-1.2 1.3-1.2s.9.4 1.3 1.2c.5 1 .7 2.4 1.5 2.4 1.1 0 2.2-2.7 2.2-4.8 0-1-.5-2.1-.5-3.1 0-1 .3-2 .3-3 0-1.6-1-2.6-2.6-2.6-1.1 0-1.6.8-2.2.8s-1.2-.8-2.2-.8z"/>
              <line x1="3" y1="20" x2="21" y2="20"/><line x1="3" y1="22" x2="21" y2="22" opacity="0.4"/>
            </svg>
          </div>
          <h3 class="step-title">Escaneo y diagnóstico 3D</h3>
          <p class="step-desc">Capturamos imágenes y escaneos digitales 3D de alta precisión para analizar la posición exacta de tus dientes.</p>
        </li>
        <li class="process-step">
          <span class="step-num">04</span>
          <div class="step-icon-wrap">
            <svg class="step-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M9.2 5c-1.6 0-2.6 1-2.6 2.6 0 1 .3 2 .3 3s-.5 2.1-.5 3.1c0 2.1 1.1 4.8 2.2 4.8.8 0 1-1.4 1.5-2.4.4-.8.7-1.2 1.3-1.2s.9.4 1.3 1.2c.5 1 .7 2.4 1.5 2.4 1.1 0 2.2-2.7 2.2-4.8 0-1-.5-2.1-.5-3.1 0-1 .3-2 .3-3 0-1.6-1-2.6-2.6-2.6-1.1 0-1.6.8-2.2.8s-1.2-.8-2.2-.8z"/>
              <path d="M3 13c-.4-1.4 0-3 1-4" opacity="0.6"/>
              <path d="M19 5.5l.6 1.6 1.6.6-1.6.6L19 9.9l-.6-1.6-1.6-.6 1.6-.6z"/>
            </svg>
          </div>
          <h3 class="step-title">Planificación inteligente</h3>
          <p class="step-desc">Visualizas el movimiento de tus dientes antes de comenzar gracias a una simulación digital avanzada y personalizada.</p>
        </li>
        <li class="process-step">
          <span class="step-num">05</span>
          <div class="step-icon-wrap">
            <svg class="step-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M3 7.5c2.5-2.5 6-3.8 9-3.8s6.5 1.3 9 3.8"/>
              <path d="M3 7.5c0 2.5 1 5.6 3.2 7.7 1.2 1.2 2.1 1.6 3 2.6"/>
              <path d="M21 7.5c0 2.5-1 5.6-3.2 7.7-1.2 1.2-2.1 1.6-3 2.6"/>
              <path d="M9.2 17.8c.6.4 1.6.7 2.8.7s2.2-.3 2.8-.7"/>
              <path d="M7 14c.6-.4 1.2-.4 1.8 0M9.7 14.5c.6-.4 1.2-.4 1.8 0M13.5 14.5c.6-.4 1.2-.4 1.8 0M16.2 14c.6-.4 1.2-.4 1.8 0" opacity="0.55"/>
            </svg>
          </div>
          <h3 class="step-title">Entrega de alineadores</h3>
          <p class="step-desc">Recibes tus alineadores personalizados y comienzas tu transformación con acompañamiento profesional durante todo el proceso.</p>
        </li>
      </ol>

      <div class="process-cta-wrap">
        <a href="#agenda" class="process-cta">
          <span>Conocer tu plan personalizado</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section id="testimonios" class="testimonials" aria-labelledby="testimonios-heading">
  <div class="kit-container">
    <div class="section-head-center">
      <span class="eyebrow">Lo que dicen mis pacientes</span>
      <h2 id="testimonios-heading">Quienes ya confiaron en mí</h2>
    </div>
    <div class="testimonial-grid reveal">
      <figure class="testimonial-card">
        <div class="t-body">
          <span class="t-quote-mark" aria-hidden="true">“</span>
          <blockquote class="t-quote">Llegué pidiendo brackets y salí entendiendo por qué Invisalign era la decisión correcta para mí. La doctora me explicó cada paso del ClinCheck antes de empezar.</blockquote>
          <span class="t-rule" aria-hidden="true"></span>
          <figcaption class="t-footer">
            <span class="t-name">Ivonne Rocha</span>
            <span class="t-meta">Arquitecta · Chicó</span>
          </figcaption>
        </div>
      </figure>
      <figure class="testimonial-card">
        <div class="t-body">
          <span class="t-quote-mark" aria-hidden="true">“</span>
          <blockquote class="t-quote">Lo que más valoro: poder escribirle por WhatsApp y que conteste ella, no una asistente. Catorce meses de tratamiento, cero sorpresas.</blockquote>
          <span class="t-rule" aria-hidden="true"></span>
          <figcaption class="t-footer">
            <span class="t-name">David Castaño</span>
            <span class="t-meta">Ingeniero · Cedritos</span>
          </figcaption>
        </div>
      </figure>
      <figure class="testimonial-card">
        <div class="t-body">
          <span class="t-quote-mark" aria-hidden="true">“</span>
          <blockquote class="t-quote">Tenía treinta y cuatro años y pensé que era tarde. Hoy tengo la mordida que nunca había tenido. Discreto, ordenado, sin drama clínico.</blockquote>
          <span class="t-rule" aria-hidden="true"></span>
          <figcaption class="t-footer">
            <span class="t-name">Javin Andrés Hernández</span>
            <span class="t-meta">Abogado · Usaquén</span>
          </figcaption>
        </div>
      </figure>

      <figure class="testimonial-card t-feature">
        <div class="t-body">
          <span class="t-quote-mark" aria-hidden="true">“</span>
          <blockquote class="t-quote">Aprecio la honestidad sobre los tiempos reales. Me dijo "veinte meses" y fueron veintiún meses exactos. En este país eso vale más de lo que uno cree.</blockquote>
          <span class="t-rule" aria-hidden="true"></span>
          <figcaption class="t-footer">
            <span class="t-name">José Miguel Navas</span>
            <span class="t-meta">Consultor financiero · Rosales</span>
          </figcaption>
        </div>
      </figure>
      <aside class="t-aligner-aside">
        <img class="t-aligner-img" src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774057/aligner-tray_qgauwa.png" alt="Alineador Invisalign transparente en forma de arco visto desde un ligero ángulo superior" width="660" height="540" loading="lazy" decoding="async" />
      </aside>
    </div>
  </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section id="agenda" class="final-cta" aria-labelledby="agenda-heading">
  <div class="kit-container">
    <div class="final-cta-grid">
      <div class="final-cta-photo-wrap reveal">
        <div class="photo-doctor">
          <img class="photo-doctor-img"
               src="https://res.cloudinary.com/dafmpak8s/image/upload/q_auto/f_auto/v1778774057/doctora-cta_kme6yw.png"
               alt="Dra. Gloria Rivera sonriendo en su consultorio, con tapabocas bajado y guantes azules sosteniendo instrumental dental"
               width="1419" height="1080" loading="lazy" decoding="async" />
          <span class="hero-signature" aria-hidden="true">Dra. Gloria</span>
        </div>
        <div class="hero-credential-card">
          <div class="hc-mark" aria-hidden="true">◆</div>
          <div class="hc-lines">
            <span class="hc-l1">Valoración</span>
            <span class="hc-l2">Videollamada · 30 minutos · sin costo</span>
          </div>
        </div>
      </div>
      <div class="final-cta-inner reveal">
        <span class="eyebrow" style="color:var(--dorado)">Tu próximo paso</span>
        <h2 id="agenda-heading">Conoce tu <span class="gold">plan</span> de tratamiento</h2>
        <p class="lead" style="margin:0;max-width:46ch">
          Una videollamada de treinta minutos conmigo. Sin costo. Sin compromiso. Solo claridad sobre tu caso.
        </p>

        <div class="final-cta-actions">
          <a href="/agendar-valoracion" class="gr-cta btn-pulse">
            <span class="gr-cta-label">Agenda ahora</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="gr-cta-arrow" style="width:16px;height:16px">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>

        <span class="final-cta-divider" aria-hidden="true"></span>
        <p class="final-cta-filter">
          Solo trabajamos con personas comprometidas con su salud, no con quienes buscan el precio más bajo.
        </p>
      </div>
    </div>
  </div>
</section>

</main>

<!-- ============ FOOTER ============ -->
<?php include __DIR__ . '/partials/footer.php'; ?>

<script>
(function(){
  /* ---------- NAV: scroll state + progress ---------- */
  var nav = document.getElementById('gr-nav');
  var util = document.getElementById('gr-utility');
  var progress = document.getElementById('gr-progress');

  function onScroll(){
    var y = window.scrollY;
    if(y > 40){ nav.classList.add('scrolled'); util.classList.add('hidden'); }
    else { nav.classList.remove('scrolled'); util.classList.remove('hidden'); }
    var max = document.body.scrollHeight - window.innerHeight;
    var p = max > 0 ? Math.min(1, y/max) : 0;
    progress.style.width = (p*100) + '%';
  }
  window.addEventListener('scroll', onScroll, { passive:true });
  onScroll();

  /* ---------- Smooth scroll to #agenda for the "Agenda ahora" CTAs ---------- */
  function smoothScrollTo(id){
    var el = document.getElementById(id);
    if(!el) return;
    var top = el.getBoundingClientRect().top + window.scrollY - 32;
    window.scrollTo({ top: top, behavior: 'smooth' });
  }
  document.querySelectorAll('a[href="#agenda"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      smoothScrollTo('agenda');
    });
  });

  /* ---------- Mobile overlay ---------- */
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

  /* ---------- Reveal on scroll ---------- */
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(en){
      if(en.isIntersecting){
        en.target.classList.add('in');
        io.unobserve(en.target);
      }
    });
  }, { threshold:0.15, rootMargin:'0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(function(el){ io.observe(el); });

  /* ---------- Hero video: respect reduced motion ---------- */
  try{
    var rm = window.matchMedia('(prefers-reduced-motion: reduce)');
    if(rm.matches){
      var v = document.getElementById('hv-video');
      if(v){ v.pause(); v.removeAttribute('autoplay'); }
    }
  }catch(e){}
})();
</script>

</body>
</html>
