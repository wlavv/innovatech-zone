<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Innovatech‑Zone | Store under construction</title>
<meta name="description" content="We're building Innovatech‑Zone. Meanwhile, explore our other stores for home, décor, fashion, beauty and toys."/>
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
  z-index: -1; /* fica atrás do conteúdo */
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
/* Stores grid */
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
</head>
<body>
<div class="gridbg" aria-hidden="true"></div>
<main>
  <section class="hero">
    <div>
      <h1 style="font-family:var(--display); font-size:clamp(28px,5vw,52px); margin:2.5rem 0">We're building Innovatech‑Zone</h1>
      <p>Our tech store is under construction. <br>While we get everything ready, discover our other stores.</p>
    </div>
  </section>
  <section id="stores" class="stores" aria-label="Our other stores">
    <a class="store-card" href="https://life-style.pt" target="_blank">
	  <div><img src="/img/logos/3w.webp" title="Life Style"></div>
      <div><h3>Life‑Style</h3><p>Premium picks for home, wellness and lifestyle.</p></div>
    </a>
    <a class="store-card" href="https://tcg-collectors.com" target="_blank">
	  <div><img src="/img/logos/4w.webp" title="TCG Collectors"></div>
      <div><h3>TCG‑Collectors</h3><p>For TCG collectors and enthusiasts.</p></div>
    </a>
    <a class="store-card" href="https://2play4fun.com" target="_blank">
	  <div><img src="/img/logos/7w.webp" title="2 Play 4 Fun"></div>
      <div><h3>2Play4Fun</h3><p>Creative, educational toys for all ages.</p></div>
    </a>
    <a class="store-card" href="https://as-yourself.com" target="_blank">
	  <div><img src="/img/logos/8w.webp" title="As Yourself"></div>
      <div><h3>As‑Yourself</h3><p>Simple, effective skincare with conscious ingredients.</p></div>
    </a>
    <a class="store-card" href="https://casual-vibes.com" target="_blank">
	  <div><img src="/img/logos/9w.webp" title="Casual Vibes"></div>
      <div><h3>Casual‑Vibes</h3><p>Light, versatile daily wear.</p></div>
    </a>
    <a class="store-card" href="https://world-decor.com" target="_blank">
	  <div><img src="/img/logos/10w.webp" title="World Decor"></div>
      <div><h3>World‑Decor</h3><p>Decor with soul: wood, linen and ceramics.</p></div>
    </a>
  </section>
</main>
<footer>
  <span>© <span id="y6"></span> Innovatech‑Zone</span>
</footer>
<script>document.getElementById('y6').textContent=new Date().getFullYear()</script>
</body>
</html>
