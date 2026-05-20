<!-- Footer mínimo para páginas de funnel/VSL: solo legales + copyright -->
<footer class="vsl-footer-minimal">
  <div class="vsl-footer-minimal-inner">
    <nav class="vsl-footer-legal" aria-label="Información legal">
      <a href="/politica-privacidad">Política de privacidad</a>
      <span class="vsl-footer-sep" aria-hidden="true">·</span>
      <a href="/terminos-y-condiciones">Términos y condiciones</a>
      <span class="vsl-footer-sep" aria-hidden="true">·</span>
      <a href="/aviso-legal">Aviso legal</a>
    </nav>
    <span class="vsl-footer-copy">© 2026 Dra. Gloria Rivera · Todos los derechos reservados</span>
  </div>
</footer>

<style>
.vsl-footer-minimal{background:#111111; color:#f5f0eb; padding:32px 24px 28px; border-top:1px solid rgba(196,164,124,.18); font-family:"General Sans","Inter",system-ui,-apple-system,sans-serif;}
.vsl-footer-minimal-inner{max-width:1200px; margin:0 auto; display:flex; flex-direction:column; align-items:center; gap:12px; text-align:center;}
.vsl-footer-legal{display:flex; flex-wrap:wrap; align-items:center; justify-content:center; gap:10px; font-size:13px;}
.vsl-footer-legal a{color:rgba(245,240,235,.78); text-decoration:none; border-bottom:1px solid rgba(245,240,235,.16); padding-bottom:1px; transition:color 200ms ease, border-color 200ms ease;}
.vsl-footer-legal a:hover{color:#c4a47c; border-bottom-color:#c4a47c;}
.vsl-footer-sep{color:rgba(245,240,235,.35);}
.vsl-footer-copy{font-size:11.5px; color:rgba(245,240,235,.5); letter-spacing:.02em;}
@media(max-width:480px){
  .vsl-footer-minimal{padding:24px 18px 22px;}
  .vsl-footer-legal{font-size:12.5px; gap:8px;}
  .vsl-footer-sep{display:none;}
  .vsl-footer-copy{font-size:11px;}
}
</style>
