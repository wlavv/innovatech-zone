{ extends file='layouts/layout-error.tpl' }

{ block name='content' }

<style>
:root{  --bg:#0B1020; --fg:#E5F4FF; --accent:#00E5FF; --muted:#9fb3c8; --grid:#132040; --glow:rgba(0,229,255,.12);
--display:"Orbitron", ui-sans-serif, system-ui, Segoe UI, Roboto, Arial; --text: ui-sans-serif, system-ui, Segoe UI, Roboto, Arial;  }
*{ box-sizing:border-box }
html,body{ height:100% }
body{ margin:0; font-family:var(--text); color:var(--fg); background:radial-gradient(1200px 1200px at 70% 20%, var(--glow), transparent), var(--bg) }

.gridbg { 
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;

  background-image: 
    linear-gradient(var(--grid) 1px, transparent 1px),
    linear-gradient(90deg, var(--grid) 1px, transparent 1px);
  background-size: 40px 40px;
  opacity: .35;
  z-index: -1;
 }



header{ max-width:1140px; margin:auto; padding:18px 16px; display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:8px; text-align:center }
.logo{ font-family:var(--display); font-weight:800; letter-spacing:1.5px; font-size:2rem }
.hero{ max-width:800px; margin:60px auto; padding:0 16px; text-align:center }
.hero h1{ font-family:var(--display); font-size:clamp(28px,6vw,52px); margin:.5rem 0 }
.hero p{ max-width:60ch; margin:auto; font-size:1.1rem }
.stores{ max-width:1100px; margin:60px auto; padding:0 16px; display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:20px }
.store-card{ background: rgba(255, 255, 255, 0.08);  border:1px solid #1f2b4d; border-radius:16px; padding:20px; backdrop-filter: blur(6px); text-align:center }
.store-card div{ width: 100%; }
.store-card h3{ margin:12px 0 8px; font-family:var(--display) }
.store-card p{ font-size:0.95rem; color:var(--muted) }
footer{ max-width:1140px; margin:44px auto 24px; padding:0 16px; text-align:center; color:#9fb3c8; font-size:14px }
@media(max-width:600px){ .logo{ font-size:1.5rem }.hero h1{ font-size:1.8rem } }
.stores{ max-width:1140px; margin:8px auto 48px; padding:0 16px; display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:12px }
.store-card{ background: rgba(255, 255, 255, 0.08);  border:1px solid #1f2b4d; border-radius:16px; padding:14px; text-decoration:none; color:var(--fg); display:inline-grid; gap:10px; align-items:center }
.store-card:hover{ border-color:var(--accent) }
.store-card svg{ flex:0 0 24px }
.store-card h3{ margin:0; font-size:24px }
.store-card p{ margin:2px 0 0; font-size:18px; color:var(--muted) }
@media(max-width:1024px){ .stores{ grid-template-columns:repeat(3,minmax(0,1fr)) } }
@media(max-width:640px){ .stores{ grid-template-columns:1fr } }

#stores{  text-align: center;  }
</style>

  <section id="main">

    { block name='page_header_container' }
      <header class="page-header">
        { block name='page_header_logo' }
        <div class="logo"><img src="{ $shop.logo }" alt="logo" loading="lazy"></div>
        { /block }

        { block name='hook_maintenance' }
          { $HOOK_MAINTENANCE nofilter }
        { /block }

        { block name='page_header' }
          <h1>{ block name='page_title' }{ l s='We\'ll be back soon.' d='Shop.Theme.Global' }{ /block }</h1>
        { /block }
      </header>
    { /block }

    { block name='page_content_container' }
      <section id="content" class="page-content page-maintenance">
        { block name='page_content' }
          { $maintenance_text nofilter }
        { /block }
      </section>
    { /block }

    { block name='page_footer_container' }

    { /block }

  </section>

{ /block }
