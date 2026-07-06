<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Ghoman — IT Solutions & Business Services</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    :root{
      --teal:#00bfa5;
      --teal-dark:#009688;
      --teal-light:#00e5cc;
      --black:#080d0d;
      --white:#ffffff;
      --light-bg:#f8fffe;
      --text-dark:#1a2332;
      --text-muted:#6b7a8d;
      --border-light:#e8f5f3;
    }
    html{scroll-behavior:smooth}
    body{font-family:'Poppins',sans-serif;overflow-x:hidden}

    /* ── NAV ── */
    nav{
      position:fixed;top:0;left:0;right:0;z-index:200;
      display:flex;align-items:center;justify-content:space-between;
      padding:0 3%;height:70px;
      background:transparent;
      transition:background .35s ease,box-shadow .35s ease;
    }
    nav.scrolled{
      background:var(--white);
      box-shadow:0 2px 20px rgba(0,0,0,0.08);
    }
    nav.scrolled .logo-text{color:var(--text-dark)}
    nav.scrolled .hamburger span{background:var(--text-dark)}

    .logo-wrap{display:flex;align-items:center;gap:8px;text-decoration:none}
    .logo-text{font-family:'Poppins',sans-serif;font-size:1.4rem;font-weight:700;color:var(--white);letter-spacing:-0.5px;transition:color .3s}
    .logo-icon{
      width:32px;height:32px;
      background:var(--teal);
      clip-path:polygon(50% 0%,93% 25%,93% 75%,50% 100%,7% 75%,7% 25%);
      display:flex;align-items:center;justify-content:center;
      font-size:0.55rem;font-weight:800;color:var(--white);letter-spacing:0.5px;flex-shrink:0;
    }

    .logo-icon1 {
        background-color: aliceblue;
        border-radius: 15%;
    }

    

    .nav-center{position:absolute;left:50%;transform:translateX(-50%)}
    .btn-quotes{
      padding:0.6rem 2.2rem;border-radius:50px;
      background:var(--teal);color:var(--white);
      font-weight:700;font-size:0.82rem;letter-spacing:1.5px;text-transform:uppercase;
      border:none;cursor:pointer;text-decoration:none;
      transition:background .2s,transform .2s,box-shadow .2s;
      box-shadow:0 4px 20px rgba(0,191,165,0.4);
      display:inline-block;
    }
    .btn-quotes:hover{background:var(--teal-dark);transform:translateY(-1px);box-shadow:0 6px 24px rgba(0,191,165,0.5)}
    nav.scrolled .btn-quotes{box-shadow:0 4px 16px rgba(0,191,165,0.35)}

    .hamburger{display:flex;flex-direction:column;gap:5px;cursor:pointer;padding:4px}
    .hamburger span{width:26px;height:2px;background:var(--white);border-radius:2px;transition:background .3s}

    /* ── HERO ── */
    .hero{
      min-height:100vh;
      background:url('<?= base_url('hero-bg.jpeg') ?>');
      background-size: cover;
      background-position: center top;
      position:relative;overflow:hidden;
      display:flex;align-items:flex-end;
      padding:0 5% 10vh;
    }
    /* dark overlay on left so text is readable */
    .hero::before{
      content:'';position:absolute;inset:0;z-index:0;
      /* background:linear-gradient(90deg, rgba(5,10,10,0.78) 0%, rgba(5,10,10,0.45) 50%, rgba(0,0,0,0) 100%); */
      pointer-events:none;
    }
    .hero::after{
      content:'';position:absolute;inset:0;z-index:0;
      /* background:linear-gradient(180deg, rgba(0,0,0,0.25) 0%, rgba(0,0,0,0.5) 100%); */
      pointer-events:none;
    }
    .hero-content{position:relative;z-index:3;max-width:560px}
    .hero h1{
      font-size:clamp(2.8rem,5.5vw,4.2rem);
      font-weight:800;line-height:1.1;
      color:var(--white);
      margin-bottom:1.2rem;
    }
    .hero h1 .teal-line{color:#7de4d6;display:block}
    .hero-dot{
      display:inline-block;width:10px;height:10px;border-radius:50%;
      background:var(--teal);margin-left:6px;vertical-align:middle;
    }
    .hero p{
      font-size:0.95rem;color:rgba(255,255,255,0.6);
      line-height:1.75;max-width:440px;
    }

    /* network dots canvas */
    #network-canvas{position:absolute;top:0;left:0;width:100%;height:100%;z-index:2;opacity:0.8;pointer-events:auto;display:block;cursor:crosshair;}

    #repulse-circle-div {
        position: absolute;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.4;
        }
        50% {
            transform: translate(-50%, -50%) scale(1.2);
            opacity: 0.1;
        }
        100% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.4;
        }
    }

    /* robot replaced by bg image */

    /* ── SECTION BASE ── */
    section{padding:100px 5%}
    .eyebrow{font-size:0.8rem;text-transform:uppercase;letter-spacing:2.5px;color:var(--teal);font-weight:600;margin-bottom:0.6rem}
    h2.section-title{
      font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:800;
      color:var(--text-dark);line-height:1.2;margin-bottom:0.8rem;
      letter-spacing:-0.5px;
    }
    h2.section-title span{color:var(--teal)}
    .section-sub{font-size:0.95rem;color:var(--text-muted);max-width:520px;line-height:1.7}
    .text-center{text-align:center}
    .text-center .section-sub{margin:0 auto}

    /* ── SERVICES ── */
    .services-section{background:var(--white);padding-top:80px;padding-bottom:100px}
    .services-hero-band{
      width:100%;min-height:220px;
      background:linear-gradient(135deg,#0d1f1e 0%,#1a3a36 100%);
      display:flex;align-items:center;justify-content:center;flex-direction:column;
      text-align:center;padding:3rem 5%;margin-bottom:0;
      position:relative;overflow:hidden;
    }
    .services-hero-band::before{
      content:'';position:absolute;inset:0;
      background:url("data:image/svg+xml,%3Csvg width='60' height='60' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='30' cy='30' r='1' fill='rgba(0,191,165,0.15)'/%3E%3C/svg%3E");
      opacity:0.5;
    }
    .services-hero-band h2{
      font-size:clamp(2rem,4vw,3rem);font-weight:800;
      color:var(--white);letter-spacing:-1px;margin-bottom:0.5rem;position:relative;
    }
    .services-hero-band p{font-size:0.95rem;color:rgba(255,255,255,0.6);position:relative}

    .services-cards-wrap{
      padding:0 5%;
      background:linear-gradient(180deg, #f0faf9 0%, #ffffff 60%);
      overflow:visible;
      position:relative;
    }
    /* subtle watermark background shapes matching screenshot */
    .services-cards-wrap::before{
      content:'';
      position:absolute;
      top:-60px; right:5%;
      width:260px; height:260px;
      background:radial-gradient(circle, rgba(0,191,165,0.07) 0%, transparent 70%);
      border-radius:50%;
      pointer-events:none;
    }
    .services-grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:2.5rem;
      margin-top:-1px;
      padding:5rem 0 3rem;
      /* give tilted cards room to breathe */
      overflow: visible;
    }
    .svc-card{
      background:var(--white);
      border-radius:20px;
      padding:2.8rem 2rem 2.2rem;
      text-align:center;
      box-shadow:
        0 8px 24px rgba(0,0,0,0.07),
        0 2px 6px rgba(0,0,0,0.04);
      border:1px solid rgba(0,191,165,0.08);
      transition:
        transform .35s cubic-bezier(.25,.46,.45,.94),
        box-shadow .35s cubic-bezier(.25,.46,.45,.94),
        border-color .35s;
      /* alternating tilt — overridden per nth-child below */
      transform: rotate(-3deg) translateY(0px);
      will-change: transform;
      position: relative;
      overflow: visible;
    }
    /* Odd cards tilt left, even cards tilt right */
    .svc-card:nth-child(odd)  { transform: rotate(-3deg); }
    .svc-card:nth-child(even) { transform: rotate(3deg);  }
    .svc-card:hover{
      transform: rotate(0deg) translateY(-6px) !important;
      box-shadow:
        0 20px 50px rgba(0,0,0,0.12),
        0 6px 16px rgba(0,191,165,0.10);
      border-color: rgba(0,191,165,0.18);
      z-index: 2;
    }
    .svc-icon-wrap{
      width:90px; height:90px; border-radius:50%;
      background:#f4fffe;
      display:flex; align-items:center; justify-content:center;
      margin:0 auto 1.8rem;
      border:1.5px solid rgba(0,191,165,0.15);
      box-shadow: 0 2px 12px rgba(0,191,165,0.08);
      transition: box-shadow .35s, transform .35s;
    }
    .svc-card:hover .svc-icon-wrap{
      box-shadow: 0 4px 20px rgba(0,191,165,0.18);
      transform: scale(1.06);
    }
    .svc-icon-wrap svg{
      width:44px; height:44px;
      stroke:var(--teal); fill:none;
      stroke-width:1.4; stroke-linecap:round; stroke-linejoin:round;
    }
    .svc-card h3{
      font-size:1.2rem; font-weight:800;
      color:var(--text-dark); margin-bottom:0.8rem;
      letter-spacing:-0.3px;
    }
    .svc-card p{
      font-size:0.88rem; color:#8a9bb0;
      line-height:1.75; margin-bottom:2rem;
    }
    .btn-explore{
      display:inline-block;padding:0.65rem 2rem;border-radius:50px;
      background:var(--teal);color:var(--white);
      font-size:0.75rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;
      text-decoration:none;border:none;cursor:pointer;
      transition:background .2s,transform .2s;
    }
    .btn-explore:hover{background:var(--teal-dark);transform:translateY(-1px)}

    /* ── ABOUT ── */
    .about-section{background:var(--light-bg);border-top:1px solid var(--border-light)}
    .about-grid{display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center}
    .about-visual{position:relative}
    .about-img-card{
      background:linear-gradient(135deg,#0d2421,#1a3d39);
      border-radius:20px;padding:3rem 2.5rem;
      position:relative;overflow:hidden;
    }
    .about-img-card::after{
      content:'';position:absolute;
      bottom:-30%;right:-20%;
      width:200px;height:200px;border-radius:50%;
      background:radial-gradient(circle,rgba(0,191,165,0.25),transparent 70%);
    }
    .about-num{
      font-size:4rem;font-weight:900;
      color:var(--teal);line-height:1;margin-bottom:0.3rem;
    }
    .about-num-label{font-size:0.85rem;color:rgba(255,255,255,0.6);text-transform:uppercase;letter-spacing:1.5px}
    .about-list{margin-top:1.5rem;display:flex;flex-direction:column;gap:0.7rem}
    .about-list-item{
      display:flex;align-items:center;gap:10px;
      font-size:0.85rem;color:rgba(255,255,255,0.75);
    }
    .about-list-item::before{content:'✓';color:var(--teal);font-weight:700;flex-shrink:0}
    .about-content .section-title{text-align:left}
    .about-content .section-sub{text-align:left}
    .about-content .eyebrow{text-align:left}
    .feature-pills{display:flex;flex-wrap:wrap;gap:0.75rem;margin:1.8rem 0 2rem}
    .pill{
      display:flex;align-items:center;gap:7px;
      padding:0.5rem 1rem;border-radius:100px;
      border:1.5px solid var(--border-light);
      background:var(--white);
      font-size:0.8rem;font-weight:600;color:var(--text-dark);
    }
    .pill-dot{width:8px;height:8px;border-radius:50%;background:var(--teal);flex-shrink:0}
    .btn-primary{
      display:inline-block;padding:0.85rem 2.5rem;border-radius:50px;
      background:var(--teal);color:var(--white);
      font-weight:700;font-size:0.9rem;text-decoration:none;
      transition:background .2s,transform .2s,box-shadow .2s;
      box-shadow:0 4px 20px rgba(0,191,165,0.35);
      border:none;cursor:pointer;
    }
    .btn-primary:hover{background:var(--teal-dark);transform:translateY(-2px);box-shadow:0 8px 28px rgba(0,191,165,0.45)}

    /* ── STATS ── */
    .stats-section{
      background:var(--teal);
      padding:60px 5%;
    }
    .stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;text-align:center}
    .stat-item .num{font-size:2.8rem;font-weight:900;color:var(--white);font-family:'Poppins',sans-serif}
    .stat-item .lbl{font-size:0.82rem;color:rgba(255,255,255,0.8);margin-top:4px;font-weight:500}
    .stat-divider{width:1px;background:rgba(255,255,255,0.25);height:60px;margin:auto}

    /* ── WHY US ── */
    .whyus-section{background:var(--white)}
    .why-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:3rem}
    .why-card{
      padding:2rem;border-radius:14px;
      border:1.5px solid var(--border-light);
      transition:border-color .2s,box-shadow .2s;
    }
    .why-card:hover{border-color:var(--teal);box-shadow:0 4px 24px rgba(0,191,165,0.1)}
    .why-num{
      font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:2px;
      color:var(--teal);margin-bottom:1rem;
    }
    .why-card h4{font-size:1rem;font-weight:700;color:var(--text-dark);margin-bottom:0.5rem}
    .why-card p{font-size:0.85rem;color:var(--text-muted);line-height:1.7}

    /* ── TESTIMONIALS ── */
    .testi-section{background:var(--light-bg);border-top:1px solid var(--border-light)}
    .testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:3rem}
    .testi-card{
      background:var(--white);border-radius:16px;padding:2rem;
      border:1px solid var(--border-light);
      box-shadow:0 2px 16px rgba(0,0,0,0.04);
      transition:transform .2s,box-shadow .2s;
    }
    .testi-card:hover{transform:translateY(-4px);box-shadow:0 8px 30px rgba(0,191,165,0.1)}
    .stars{color:var(--teal);font-size:0.9rem;letter-spacing:2px;margin-bottom:1rem}
    .testi-text{font-size:0.875rem;color:var(--text-muted);line-height:1.75;font-style:italic;margin-bottom:1.5rem}
    .testi-author{display:flex;align-items:center;gap:0.75rem}
    .av{
      width:42px;height:42px;border-radius:50%;
      background:var(--teal);display:flex;align-items:center;justify-content:center;
      font-weight:700;font-size:0.85rem;color:var(--white);flex-shrink:0;
    }
    .av-name{font-size:0.9rem;font-weight:700;color:var(--text-dark)}
    .av-role{font-size:0.75rem;color:var(--text-muted)}

    /* ── CTA BAND ── */
    .cta-band{
      background:linear-gradient(135deg,#042e29,#0a3d38);
      padding:80px 5%;text-align:center;position:relative;overflow:hidden;
    }
    .cta-band::before{
      content:'';position:absolute;inset:0;
      background:radial-gradient(ellipse 70% 100% at 50% 50%,rgba(0,191,165,0.12),transparent);
    }
    .cta-band h2{
      font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:800;
      color:var(--white);margin-bottom:0.8rem;position:relative;
    }
    .cta-band p{color:rgba(255,255,255,0.6);margin-bottom:2.5rem;font-size:0.95rem;position:relative}
    .cta-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;position:relative}
    .btn-white{
      display:inline-block;padding:0.85rem 2.5rem;border-radius:50px;
      background:var(--white);color:var(--teal);
      font-weight:700;font-size:0.9rem;text-decoration:none;
      transition:transform .2s,box-shadow .2s;
      box-shadow:0 4px 20px rgba(0,0,0,0.2);
      border:none;cursor:pointer;
    }
    .btn-white:hover{transform:translateY(-2px);box-shadow:0 8px 28px rgba(0,0,0,0.3)}
    .btn-ghost{
      display:inline-block;padding:0.85rem 2.5rem;border-radius:50px;
      border:2px solid rgba(255,255,255,0.4);color:var(--white);
      font-weight:700;font-size:0.9rem;text-decoration:none;
      transition:border-color .2s,background .2s;cursor:pointer;background:transparent;
    }
    .btn-ghost:hover{border-color:var(--white);background:rgba(255,255,255,0.08)}

    /* ── FOOTER ── */
    footer{background:#080d0d;padding:60px 5% 30px}
    .footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:3rem;margin-bottom:3rem}
    .foot-logo{display:flex;align-items:center;gap:8px;margin-bottom:1rem;text-decoration:none}
    .foot-logo-text{font-size:1.3rem;font-weight:700;color:var(--white)}
    footer p.foot-desc{font-size:0.85rem;color:rgba(255,255,255,0.45);line-height:1.7}
    .foot-col h5{font-size:0.75rem;text-transform:uppercase;letter-spacing:2px;color:rgba(255,255,255,0.4);font-weight:600;margin-bottom:1.2rem}
    .foot-col ul{list-style:none;display:flex;flex-direction:column;gap:0.65rem}
    .foot-col ul a{font-size:0.85rem;color:rgba(255,255,255,0.55);text-decoration:none;transition:color .2s}
    .foot-col ul a:hover{color:var(--teal)}
    .footer-bottom{
      padding-top:1.5rem;border-top:1px solid rgba(255,255,255,0.08);
      display:flex;align-items:center;justify-content:space-between;
      font-size:0.8rem;color:rgba(255,255,255,0.35);flex-wrap:wrap;gap:1rem;
    }
    .social-row{display:flex;gap:0.75rem}
    .soc{
      width:36px;height:36px;border-radius:8px;
      border:1px solid rgba(255,255,255,0.12);
      display:flex;align-items:center;justify-content:center;
      color:rgba(255,255,255,0.5);text-decoration:none;font-size:0.8rem;
      transition:border-color .2s,color .2s;
    }
    .soc:hover{border-color:var(--teal);color:var(--teal)}

    /* scroll-to-top */
    .scroll-top{
      position:fixed;bottom:2rem;right:2rem;z-index:150;
      width:44px;height:44px;border-radius:50%;
      background:var(--teal);color:var(--white);
      border:none;cursor:pointer;font-size:1.1rem;
      display:none;align-items:center;justify-content:center;
      box-shadow:0 4px 16px rgba(0,191,165,0.4);
      transition:transform .2s;
    }
    .scroll-top:hover{transform:translateY(-2px)}
    .scroll-top.show{display:flex}

    /* dark mode toggle */
    .mode-toggle{
      position:fixed;right:0;top:50%;transform:translateY(-50%);z-index:150;
      width:36px;height:36px;border-radius:50% 0 0 50%;
      background:var(--teal);color:var(--white);
      border:none;cursor:pointer;font-size:0.9rem;
      display:flex;align-items:center;justify-content:center;
      box-shadow:-2px 0 12px rgba(0,0,0,0.2);
    }

    /* ── RESPONSIVE ── */
    /* ── MOBILE DRAWER ── */
    .mobile-drawer{
      position:fixed;top:0;right:-100%;width:min(320px,85vw);height:100vh;
      background:#080f0f;z-index:300;
      padding:2rem 2rem 3rem;
      display:flex;flex-direction:column;
      transition:right .35s cubic-bezier(.4,0,.2,1);
      border-left:1px solid rgba(0,191,165,0.15);
    }
    .mobile-drawer.open{ right:0; }
    .drawer-overlay{
      position:fixed;inset:0;z-index:299;
      background:rgba(0,0,0,0.6);backdrop-filter:blur(3px);
      opacity:0;pointer-events:none;transition:opacity .35s;
    }
    .drawer-overlay.open{ opacity:1;pointer-events:all; }
    .drawer-close{
      align-self:flex-end;background:none;border:none;
      color:rgba(255,255,255,0.6);font-size:1.3rem;cursor:pointer;
      width:36px;height:36px;border-radius:8px;
      display:flex;align-items:center;justify-content:center;
      transition:color .2s,background .2s;
    }
    .drawer-close:hover{ color:var(--teal);background:rgba(0,191,165,0.1); }
    .drawer-logo{
      display:flex;align-items:center;gap:10px;
      font-size:1.3rem;font-weight:700;color:var(--white);
      margin:1.5rem 0 2rem;
    }
    .drawer-links{ list-style:none;display:flex;flex-direction:column;gap:0.3rem; }
    .drawer-link{
      display:block;padding:0.85rem 1rem;border-radius:10px;
      color:rgba(255,255,255,0.75);text-decoration:none;
      font-size:1rem;font-weight:600;
      border:1px solid transparent;
      transition:color .2s,border-color .2s,background .2s;
    }
    .drawer-link:hover{
      color:var(--teal);border-color:rgba(0,191,165,0.2);
      background:rgba(0,191,165,0.06);
    }

    /* ══════════════════════════════
      SCROLL REVEAL ANIMATIONS
    ══════════════════════════════ */

    /* Base hidden state — set via JS data-reveal attribute */
    [data-reveal] {
      opacity: 0;
      transition-property: opacity, transform, filter;
      transition-timing-function: cubic-bezier(0.22, 0.61, 0.36, 1);
      transition-duration: 0.75s;
      will-change: opacity, transform;
    }
    [data-reveal].revealed {
      opacity: 1 !important;
      transform: none !important;
      filter: none !important;
    }

    [data-reveal].not-revealed {
      opacity: 1 !important;
      /* transform: none !important; */
      filter: none !important;
    }

    /* Slide up (default) */
    [data-reveal="up"]       { transform: translateY(60px); }
    /* Slide down */
    [data-reveal="down"]     { transform: translateY(-50px); }
    /* Slide left */
    [data-reveal="left"]     { transform: translateX(70px); }
    /* Slide right */
    [data-reveal="right"]    { transform: translateX(-70px); }
    /* Zoom in */
    [data-reveal="zoom"]     { transform: scale(0.85); }
    /* Flip up */
    [data-reveal="flip"]     { transform: perspective(600px) rotateX(30deg) translateY(40px); }
    /* Fade only */
    [data-reveal="fade"]     { transform: none; }

    /* Stagger delay helpers */
    [data-delay="100"] { transition-delay: 0.10s; }
    [data-delay="200"] { transition-delay: 0.20s; }
    [data-delay="300"] { transition-delay: 0.30s; }
    [data-delay="400"] { transition-delay: 0.40s; }
    [data-delay="500"] { transition-delay: 0.50s; }
    [data-delay="600"] { transition-delay: 0.60s; }
    [data-delay="700"] { transition-delay: 0.70s; }
    [data-delay="800"] { transition-delay: 0.80s; }

    /* Section title reveal */
    .section-reveal-wrap { overflow: hidden; }

    /* Reduce motion */
    @media (prefers-reduced-motion: reduce) {
      [data-reveal] { transition: opacity 0.3s ease !important; transform: none !important; }
    }

    /* ══════════════════════════════
      RESPONSIVE — TABLET (≤900px)
    ══════════════════════════════ */
    @media(max-width:900px){

      /* NAV */
      nav{ gap:1rem; flex-wrap:nowrap; padding:0 4%; }
      .nav-center{ position:static; transform:none; }

      /* HERO */
      .hero{
        min-height:100svh;
        align-items:center;
        padding:100px 6% 60px;
        background-position:right center;
      }
      .hero-content{ max-width:100%; }
      .hero h1{ font-size:clamp(2.2rem,6vw,3rem); }
      .hero p{ font-size:0.9rem; max-width:100%; }

      /* GRIDS → single column */
      .services-grid,
      .about-grid,
      .why-grid,
      .testi-grid,
      .footer-grid{ grid-template-columns:1fr; }

      .services-grid{ grid-template-columns:repeat(2,1fr); gap:1.5rem; padding:3rem 0 2rem; }
      /* reduce tilt on tablet */
      .svc-card:nth-child(odd)  { transform: rotate(-2deg); }
      .svc-card:nth-child(even) { transform: rotate(2deg);  }

      /* ABOUT */
      .about-grid{ gap:2.5rem !important; }
      .about-num{ font-size:3rem; }

      /* STATS */
      .stats-grid{ grid-template-columns:repeat(2,1fr); gap:1.5rem; }

      /* SECTION padding */
      section{ padding:70px 5%; }

      /* FOOTER */
      .footer-grid{ grid-template-columns:1fr 1fr; gap:2rem; }
      .footer-bottom{ flex-direction:column; text-align:center; gap:0.8rem; }

      .about-section{
        padding: 60px 20px;
        overflow: hidden;
    }

    .about-grid{
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .about-content,
    .about-visual{
        width:100%;
        max-width:100%;
    }

    .about-img-card{
        width:100%;
        max-width:100%;
        padding:25px;
    }

    .about-stats{
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        gap:15px;
    }

    .about-stats > div{
        width:45%;
        text-align:center;
    }

    .feature-pills{
        display:flex;
        flex-wrap:wrap;
        gap:10px;
    }

    .btn-primary{
        width:100%;
        text-align:center;
    }
    .btn-quotes{
      display:none;
    }
    }

    /* ══════════════════════════════
      RESPONSIVE — MOBILE (≤600px)
    ══════════════════════════════ */
    @media(max-width:600px){

      /* NAV */
      nav{ padding:0 5%; height:64px; }
      .logo-text{ font-size:1.1rem; }

      /* HERO */
      .hero{
        padding:90px 5% 50px;
        align-items:flex-end;
        background-position:50% center;
      }
      .hero::before{
        /* background:linear-gradient(90deg, rgba(5,10,10,0.88) 0%, rgba(5,10,10,0.75) 60%, rgba(0,0,0,0.3) 100%); */
      }
      .hero h1{ font-size:clamp(1.9rem,7vw,2.6rem); margin-bottom:1rem; }
      .hero p{ font-size:0.95rem; margin-bottom:0; color: white; }
      .hero-dot{ width:8px; height:8px; }

      /* SERVICES BAND */
      .services-hero-band{ min-height:160px; padding:2rem 5%; }
      .services-hero-band h2{ font-size:1.8rem; }

      /* SERVICES CARDS */
      .services-grid{ grid-template-columns:1fr; gap:1rem; padding:2rem 0 1rem; }
      /* no tilt on small mobile */
      .svc-card:nth-child(odd),
      .svc-card:nth-child(even){ transform: rotate(0deg); }
      .svc-card:hover{ transform: translateY(-4px) !important; }
      .services-cards-wrap{ padding:0 4%; }
      .svc-card{ padding:1.8rem 1.5rem; }
      .svc-icon-wrap{ width:72px; height:72px; }
      .svc-icon-wrap svg{ width:36px; height:36px; }
      .svc-card h3{ font-size:1.1rem; }

      /* ABOUT */
      .about-img-card{ padding:2rem 1.5rem; }
      .about-num{ font-size:2.5rem; }
      .feature-pills{ gap:0.5rem; }
      .pill{ font-size:0.75rem; padding:0.4rem 0.8rem; }

      /* STATS */
      .stats-section{ padding:50px 5%; }
      .stats-grid{ grid-template-columns:repeat(2,1fr); gap:1.2rem; }
      .stat-item .num{ font-size:2.2rem; }

      /* WHY US */
      .why-grid{ grid-template-columns:1fr; gap:1rem; }
      .why-card{ padding:1.5rem; }

      /* TESTIMONIALS */
      .testi-grid{ grid-template-columns:1fr; }
      .testi-card{ padding:1.5rem; }

      /* CTA */
      .cta-band{ padding:60px 5%; }
      .cta-band h2{ font-size:1.7rem; }
      .cta-btns{ flex-direction:column; align-items:center; }
      .btn-white,.btn-ghost{ width:100%; max-width:280px; text-align:center; }

      /* SECTION */
      section{ padding:60px 5%; }
      h2.section-title{ font-size:1.7rem; }
      .section-sub{ font-size:0.875rem; }

      /* FOOTER */
      .footer-grid{ grid-template-columns:1fr; gap:1.8rem; }
      .footer-bottom{ flex-direction:column; text-align:center; gap:0.8rem; font-size:0.75rem; }
      footer{ padding:50px 5% 24px; }
      .foot-logo-text{ font-size:1.1rem; }

      /* SCROLL TOP */
      .scroll-top{ bottom:1.2rem; right:1.2rem; width:38px; height:38px; font-size:1rem; }
    }

    /* ══════════════════════════════
      RESPONSIVE — SMALL (≤400px)
    ══════════════════════════════ */
    @media(max-width:400px){
      .hero h1{ font-size:1.75rem; }
      .hero p{ font-size:0.82rem; }
      .stats-grid{ grid-template-columns:1fr 1fr; }
      .btn-quotes{ padding:0.5rem 1.4rem; font-size:0.75rem; letter-spacing:1px; }
      .services-hero-band h2{ font-size:1.5rem; }
      h2.section-title{ font-size:1.5rem; }
      .about-num{ font-size:2rem; }
    }

    /* ── WHY CHOOSE US ── */
    .wcu-section{
      background: var(--white);
      padding: 100px 5%;
      position: relative;
      overflow: hidden;
    }
    .wcu-section::before{
      content:'';
      position:absolute;
      top: -100px; right: -80px;
      width: 500px; height: 500px;
      background: radial-gradient(circle, rgba(0,191,165,0.05) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events:none;
    }
    .wcu-header{
      text-align:center;
      margin-bottom: 4rem;
      position:relative;
    }
    .wcu-header h2{
      font-family:'Poppins',sans-serif;
      font-size: clamp(1.9rem, 3.5vw, 2.8rem);
      font-weight: 800;
      color: var(--text-dark);
      letter-spacing: -0.5px;
      margin-bottom: 0.6rem;
    }
    .wcu-header p{
      font-size: 1rem;
      color: var(--text-muted);
    }

    /* Main layout: left features | center icons+illustration | right features */
    .wcu-layout{
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      gap: 0 2rem;
      align-items: start;
      position: relative;
    }

    /* Left column - text right-aligned */
    .wcu-left{ display:flex; flex-direction:column; gap:0; }
    /* Right column - text left-aligned */
    .wcu-right{ display:flex; flex-direction:column; gap:0; }

    /* Each feature row */
    .wcu-row{
      display: grid;
      grid-template-columns: 1fr 70px;
      align-items: center;
      gap: 1.2rem;
      padding: 2rem 0;
      border-bottom: 1px solid rgba(0,191,165,0.08);
    }
    .wcu-row:last-child{ border-bottom: none; }
    .wcu-row.right-row{
      grid-template-columns: 70px 1fr;
    }

    .wcu-text-block{ }
    .wcu-left .wcu-text-block{ text-align: right; }
    .wcu-right .wcu-text-block{ text-align: left; }

    .wcu-title{
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--teal);
      margin-bottom: 0.4rem;
      font-family:'Poppins',sans-serif;
    }
    .wcu-desc{
      font-size: 0.82rem;
      color: var(--text-muted);
      line-height: 1.7;
    }

    /* Center icon column */
    .wcu-center{
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0;
      position: relative;
    }
    /* Vertical connecting line */
    .wcu-center::before{
      content:'';
      position:absolute;
      top: 35px; bottom: 35px; left: 50%;
      width: 2px;
      background: linear-gradient(180deg, transparent, rgba(0,191,165,0.2) 20%, rgba(0,191,165,0.2) 80%, transparent);
      transform: translateX(-50%);
    }

    /* Icon pair row */
    .wcu-icon-pair{
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 1.55rem 0;
      position: relative;
      z-index: 1;
    }
    .wcu-icon{
      width: 62px;
      height: 62px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
      transition: transform .3s cubic-bezier(.34,1.56,.64,1), box-shadow .3s;
    }
    .wcu-icon:hover{
      transform: scale(1.12) rotate(-5deg);
      box-shadow: 0 10px 28px rgba(0,0,0,0.2);
    }
    .wcu-icon svg{
      width: 30px; height: 30px;
      stroke: #fff; fill: none;
      stroke-width: 1.8; stroke-linecap:round; stroke-linejoin:round;
    }
    /* Color variants */
    .icon-blue   { background: linear-gradient(135deg,#4f8ef7,#2563eb); }
    .icon-red    { background: linear-gradient(135deg,#f87171,#dc2626); }
    .icon-gray   { background: linear-gradient(135deg,#6b7280,#374151); }
    .icon-yellow { background: linear-gradient(135deg,#fbbf24,#d97706); }
    .icon-green  { background: linear-gradient(135deg,#34d399,#059669); }
    .icon-teal   { background: linear-gradient(135deg,#2dd4bf,#0d9488); }

    /* Illustration */
    .wcu-illustration{
      display: flex;
      align-items: flex-end;
      justify-content: center;
      padding-top: 1rem;
    }

    /* ── RESPONSIVE ── */
    @media(max-width:900px){
      .wcu-layout{
        grid-template-columns: 1fr;
        gap: 0;
      }
      .wcu-center{ flex-direction: row; flex-wrap: wrap; justify-content:center; gap:1rem; padding:2rem 0; }
      .wcu-center::before{ display:none; }
      .wcu-icon-pair{ padding: 0; }
      .wcu-left .wcu-row{ grid-template-columns: 1fr; text-align:center; }
      .wcu-right .wcu-row{ grid-template-columns: 1fr; text-align:center; }
      .wcu-left .wcu-text-block, .wcu-right .wcu-text-block{ text-align:center; }
      .wcu-row{ justify-items:center; }
      .wcu-illustration{ display:none; }
    }
    @media(max-width:600px){
      .wcu-section{ padding:60px 5%; }
      .wcu-header h2{ font-size:1.7rem; }
      .wcu-icon{ width:52px; height:52px; }
      .wcu-icon svg{ width:24px; height:24px; }
    }


    /* ── TECHNOLOGIES SECTION ── */
    .tech-section{
      background: var(--white);
      padding: 90px 0 80px;
      overflow: hidden;
      border-top: 1px solid var(--border-light);
    }
    .tech-header{
      text-align: center;
      padding: 0 5%;
      margin-bottom: 3.5rem;
    }
    .tech-header h2{
      font-family: 'Poppins', sans-serif;
      font-size: clamp(2rem, 4vw, 2.8rem);
      font-weight: 800;
      color: var(--text-dark);
      letter-spacing: -0.5px;
      margin-bottom: 0.5rem;
    }
    .tech-header p{
      font-size: 0.95rem;
      color: var(--text-muted);
    }

    /* Ribbon track wrapper - masks overflow */
    .ribbon-wrapper{
      position: relative;
      width: 100%;
      overflow: hidden;
      margin-bottom: 1.5rem;
      /* fade edges */
      -webkit-mask-image: linear-gradient(90deg, transparent 0%, black 8%, black 92%, transparent 100%);
      mask-image: linear-gradient(90deg, transparent 0%, black 8%, black 92%, transparent 100%);
    }
    .ribbon-wrapper:last-child{ margin-bottom: 0; }

    /* The scrolling track */
    .ribbon-track{
      display: flex;
      gap: 1.2rem;
      width: max-content;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }
    .ribbon-track.scroll-left {
      animation-name: scrollLeft;
      animation-duration: 35s;
    }
    .ribbon-track.scroll-right {
      animation-name: scrollRight;
      animation-duration: 40s;
    }

    /* Pause on hover */
    .ribbon-wrapper:hover .ribbon-track{
      animation-play-state: paused;
    }

    @keyframes scrollLeft {
      0%   { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    @keyframes scrollRight {
      0%   { transform: translateX(-50%); }
      100% { transform: translateX(0); }
    }

    /* Individual tech card */
    .tech-card{
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 0.9rem 1.8rem;
      background: var(--white);
      border: 1.5px solid #e8edf3;
      border-radius: 14px;
      min-width: 190px;
      height: 76px;
      flex-shrink: 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.04);
      transition: border-color .25s, box-shadow .25s, transform .25s;
      cursor: default;
      user-select: none;
    }
    .tech-card:hover{
      border-color: rgba(0,191,165,0.35);
      box-shadow: 0 6px 24px rgba(0,191,165,0.12);
      transform: translateY(-3px);
    }
    .tech-card .t-logo{
      font-size: 1.6rem;
      line-height: 1;
      flex-shrink: 0;
    }
    .tech-card .t-name{
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      font-weight: 700;
      white-space: nowrap;
    }

    /* Brand colors */
    .tc-django   .t-name { color: #092e20; }
    .tc-php      .t-name { color: #4f5b93; }
    .tc-ci       .t-name { color: #dd4814; }
    .tc-laravel  .t-name { color: #ff2d20; }
    .tc-python   .t-name { color: #3670a0; }
    .tc-react    .t-name { color: #61dafb; }
    .tc-node     .t-name { color: #3c873a; }
    .tc-vue      .t-name { color: #41b883; }
    .tc-ts       .t-name { color: #3178c6; }
    .tc-postgres .t-name { color: #336791; }
    .tc-ionic    .t-name { color: #3880ff; }
    .tc-woo      .t-name { color: #96588a; }
    .tc-magento  .t-name { color: #f46f25; }
    .tc-shopify  .t-name { color: #96bf48; }
    .tc-aws      .t-name { color: #ff9900; }
    .tc-docker   .t-name { color: #2496ed; }
    .tc-mongo    .t-name { color: #4db33d; }
    .tc-next     .t-name { color: #000000; }

    @media(max-width:600px){
      .tech-section{ padding:60px 0; }
      .tech-card{ min-width:150px; height:64px; padding:0.7rem 1.2rem; }
      .tech-card .t-name{ font-size:0.88rem; }
      .tech-card .t-logo{ font-size:1.3rem; }
      .ribbon-track.scroll-left { animation-duration: 25s; }
      .ribbon-track.scroll-right{ animation-duration: 30s; }
    }


    /* ── CLIENTS WORLD SECTION ── */
    .clients-world-section {
      background: var(--white);
      padding: 90px 5% 80px;
      text-align: center;
      position: relative;
      overflow: hidden;
      border-top: 1px solid var(--border-light);
    }

    .clients-world-section h2 {
      font-family: 'Poppins', sans-serif;
      font-size: clamp(1.8rem, 3.5vw, 2.8rem);
      font-weight: 800;
      color: var(--text-dark);
      letter-spacing: -0.5px;
      margin-bottom: 0.5rem;
    }
    .clients-world-section .sub {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin-bottom: 0;
    }

    /* World map SVG background */
    .world-map-wrap {
      position: relative;
      margin-top: 2.5rem;
    }
    .world-map-bg {
      width: 100%;
      max-width: 1100px;
      margin: 0 auto;
      display: block;
      opacity: 0.13;
      pointer-events: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -45%);
      z-index: 0;
    }

    /* Flag grid */
    .flag-grid {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 2rem 1.5rem;
      max-width: 1000px;
      margin: 0 auto;
      padding: 3rem 0 1rem;
    }

    .flag-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.75rem;
      cursor: default;
    }

    /* Flag circle */
    .flag-circle {
      width: 100%;
      height: 120px;
      justify-content: center;
      border-radius: 50%;
      overflow: hidden;
      box-shadow:
        0 4px 16px rgba(0,0,0,0.12),
        0 0 0 4px rgba(255,255,255,0.9),
        0 0 0 6px rgba(0,0,0,0.06);
      transition: transform .35s cubic-bezier(.34,1.56,.64,1), box-shadow .35s;
      position: relative;
      flex-shrink: 0;
    }
    .flag-circle:hover {
      transform: translateY(-8px) scale(1.08);
      box-shadow:
        0 16px 36px rgba(0,0,0,0.18),
        0 0 0 4px rgba(255,255,255,0.9),
        0 0 0 7px rgba(0,191,165,0.3);
    }

    /* Flag rendered as emoji inside circle */
    .flag-emoji {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3.8rem;
      line-height: 1;
      /* scale emoji to fill circle */
      transform: scale(1.35);
    }

    .flag-label {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--text-dark);
      letter-spacing: 0.2px;
    }

    /* pulse ring animation on random flags */
    @keyframes pulseRing {
      0%   { box-shadow: 0 4px 16px rgba(0,0,0,0.12), 0 0 0 4px rgba(255,255,255,0.9), 0 0 0 6px rgba(0,191,165,0); }
      50%  { box-shadow: 0 4px 16px rgba(0,0,0,0.12), 0 0 0 4px rgba(255,255,255,0.9), 0 0 0 14px rgba(0,191,165,0.2); }
      100% { box-shadow: 0 4px 16px rgba(0,0,0,0.12), 0 0 0 4px rgba(255,255,255,0.9), 0 0 0 6px rgba(0,191,165,0); }
    }
    .flag-circle.pulse { animation: pulseRing 3s ease-in-out infinite; }
    .flag-circle.pulse-delay { animation: pulseRing 3s ease-in-out 1.5s infinite; }

    /* Responsive */
    @media(max-width:900px) {
      .flag-grid { grid-template-columns: repeat(4, 1fr); gap: 1.5rem 1rem; }
      /* .flag-circle { width: 80px; height: 80px; } */
      .flag-emoji  { font-size: 3rem; }
    }
    @media(max-width:600px) {
      .clients-world-section { padding: 60px 4% 60px; }
      .flag-grid { grid-template-columns: repeat(3, 1fr); gap: 1.2rem 0.8rem; }
      /* .flag-circle { width: 68px; height: 68px; } */
      .flag-emoji  { font-size: 2.5rem; }
      .flag-label  { font-size: 0.78rem; }
      .clients-world-section h2 { font-size: 1.6rem; }
    }
    @media(max-width:380px) {
      .flag-grid { grid-template-columns: repeat(3, 1fr); gap: 1rem 0.5rem; }
      /* .flag-circle { width: 58px; height: 58px; } */
      .flag-emoji  { font-size: 2rem; }
    }

</style>
</head>
<body>

<!-- NAV -->
<nav id="main-nav">
  <a href="<?= base_url('/') ?>" class="logo-wrap">
    <div class="logo-icon">GT</div>
    <!-- <div class="logo-icon1"><img src="<?= base_url('logo.png') ?>" width="50" alt="GhomanITSolutions Logo"></div> -->
    <span class="logo-text">Ghoman<strong>IT</strong>Solutions</span>
  </a>
  <div class="nav-center">
    <a href="#contact" class="btn-quotes">Get Quotes</a>
  </div>
  <div class="hamburger" id="hamburger">
    <span></span><span></span><span></span>
  </div>
</nav>

<div class="drawer-overlay" id="drawerOverlay"></div>
<aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile navigation">
  <button class="drawer-close" id="drawerClose" aria-label="Close menu">×</button>
  <a href="<?= base_url('/') ?>" class="drawer-logo">
    <div class="logo-icon">GT</div>
    <!-- <div class="logo-icon1"><img src="<?= base_url('logo.png') ?>" width="50" alt="GhomanIT Logo"></div> -->
    <span>Ghoman<strong>IT</strong>Solutions</span>
  </a>
  <ul class="drawer-links">
    <li><a class="drawer-link" href="#home">Home</a></li>
    <li><a class="drawer-link" href="#services">Services</a></li>
    <li><a class="drawer-link" href="#about">About</a></li>
    <li><a class="drawer-link" href="#why-choose-us">Why Choose Us</a></li>
    <li><a class="drawer-link" href="#testimonials">Testimonials</a></li>
    <li><a class="drawer-link" href="#technologies">Technologies</a></li>
    <li><a class="drawer-link" href="#clients">Clients</a></li>
    <li><a class="drawer-link" href="#contact">Contact</a></li>
  </ul>
</aside>

<!-- HERO -->
<section class="hero" id="home">
  <canvas id="network-canvas"></canvas>

  <!-- Robot visual — SVG illustration of AI robot head -->
  <div id="repulse-circle-div"></div>

  <div class="hero-content">
    <h1>
      Delivering
      <span class="teal-line">Superior IT Solutions</span>
    </h1>
    <p>Custom IT solutions, optimized for growth and performance. Innovative, SEO-friendly platforms designed to help you lead. Your vision, our code — let’s build the future together.</p>
  </div>
</section>

<!-- SERVICES BAND -->
<div class="services-hero-band" data-reveal="up">
  <h2>Services We Offer</h2>
  <p>Explore our creative solutions that make a real difference.</p>
</div>

<div class="services-cards-wrap">
  <div class="services-grid" id="services">
    <div class="svc-card not-revealed" data-reveal="up" data-delay="100">
      <div class="svc-icon-wrap">
        <svg viewBox="0 0 48 48"><circle cx="24" cy="18" r="10"/><line x1="24" y1="28" x2="24" y2="38"/><line x1="8" y1="38" x2="40" y2="38"/><line x1="8" y1="16" x2="14" y2="20"/><line x1="40" y1="16" x2="34" y2="20"/></svg>
      </div>
      <h3>Application Design</h3>
      <p>We craft stunning, user-friendly applications that make your vision come to life.</p>
      <a href="<?= base_url('/') ?>" class="btn-explore">Explore</a>
    </div>
    <div class="svc-card not-revealed" data-reveal="up" data-delay="200">
      <div class="svc-icon-wrap">
        <svg viewBox="0 0 48 48"><rect x="6" y="10" width="36" height="24" rx="3"/><line x1="18" y1="34" x2="15" y2="42"/><line x1="30" y1="34" x2="33" y2="42"/><line x1="12" y1="42" x2="36" y2="42"/><circle cx="30" cy="20" r="4"/><line x1="12" y1="18" x2="22" y2="18"/><line x1="12" y1="23" x2="22" y2="23"/></svg>
      </div>
      <h3>Web Hosting</h3>
      <p>Powerful, secure hosting services that ensure your site runs smoothly, 24/7.</p>
      <a href="<?= base_url('/') ?>" class="btn-explore">Explore</a>
    </div>
    <div class="svc-card not-revealed" data-reveal="up" data-delay="300">
      <div class="svc-icon-wrap">
        <svg viewBox="0 0 48 48"><polyline points="8,36 18,24 26,30 36,16 42,22"/><circle cx="8" cy="36" r="2" fill="currentColor" stroke="none"/><circle cx="18" cy="24" r="2" fill="currentColor" stroke="none"/><circle cx="26" cy="30" r="2" fill="currentColor" stroke="none"/><circle cx="36" cy="16" r="2" fill="currentColor" stroke="none"/><line x1="36" y1="16" x2="42" y2="16"/><line x1="42" y1="16" x2="42" y2="22"/></svg>
      </div>
      <h3>SEO Optimization</h3>
      <p>Enhance your online presence and drive traffic with our expert SEO strategies.</p>
      <a href="<?= base_url('/') ?>" class="btn-explore">Explore</a>
    </div>
    <div class="svc-card not-revealed" data-reveal="up" data-delay="100">
      <div class="svc-icon-wrap">
        <svg viewBox="0 0 48 48"><path d="M24 6 L30 18 L44 18 L33 27 L37 41 L24 33 L11 41 L15 27 L4 18 L18 18 Z"/></svg>
      </div>
      <h3>AI Integration</h3>
      <p>Bring artificial intelligence into your product pipeline for smarter automation and insights.</p>
      <a href="<?= base_url('/') ?>" class="btn-explore">Explore</a>
    </div>
    <div class="svc-card not-revealed" data-reveal="up" data-delay="200">
      <div class="svc-icon-wrap">
        <svg viewBox="0 0 48 48"><rect x="6" y="28" width="10" height="14" rx="2"/><rect x="19" y="20" width="10" height="22" rx="2"/><rect x="32" y="12" width="10" height="30" rx="2"/><line x1="6" y1="42" x2="42" y2="42"/></svg>
      </div>
      <h3>Data Analytics</h3>
      <p>Turn raw data into powerful insights with our business intelligence and analytics platform.</p>
      <a href="<?= base_url('/') ?>" class="btn-explore">Explore</a>
    </div>
    <div class="svc-card not-revealed" data-reveal="up" data-delay="300">
      <div class="svc-icon-wrap">
        <svg viewBox="0 0 48 48"><path d="M24 6 C14 6 8 12 8 20 C8 28 14 32 24 34 C34 32 40 28 40 20 C40 12 34 6 24 6Z"/><path d="M16 20 L20 24 L28 16" stroke-width="2.5" fill="none"/><line x1="24" y1="34" x2="24" y2="42"/><line x1="18" y1="42" x2="30" y2="42"/></svg>
      </div>
      <h3>Cybersecurity</h3>
      <p>Protect your business with enterprise-grade security, threat detection, and compliance frameworks.</p>
      <a href="<?= base_url('/') ?>" class="btn-explore">Explore</a>
    </div>
  </div>
</div>

<!-- ABOUT / FEATURES -->
<section class="about-section" id="about">
  <div class="about-grid">
    <div class="about-visual" data-reveal="right">
      <div class="about-img-card">
        <div class="about-num">12+</div>
        <div class="about-num-label">Years of Innovation</div>
        <div class="about-list">
          <div class="about-list-item">AI-powered product development</div>
          <div class="about-list-item">Cloud-native architecture</div>
          <div class="about-list-item">Zero-trust security by default</div>
          <div class="about-list-item">Agile, sprint-based delivery</div>
          <div class="about-list-item">24/7 monitoring & support</div>
        </div>
        <div style="margin-top:2rem;display:flex;gap:1.5rem">
          <div>
            <div style="font-size:1.6rem;font-weight:900;color:#00e5cc">500+</div>
            <div style="font-size:0.72rem;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:1px">Projects</div>
          </div>
          <div>
            <div style="font-size:1.6rem;font-weight:900;color:#00e5cc">40+</div>
            <div style="font-size:0.72rem;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:1px">Countries</div>
          </div>
          <div>
            <div style="font-size:1.6rem;font-weight:900;color:#00e5cc">98%</div>
            <div style="font-size:0.72rem;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:1px">Satisfaction</div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-content" data-reveal="left">
      <div class="eyebrow">Why Choose Us</div>
      <h2 class="section-title">We Build Technology That <span>Scales With You</span></h2>
      <p class="section-sub">From early-stage startups to Fortune 500 enterprises, our solutions are engineered for clarity, performance, and growth — without the technical debt.</p>
      <div class="feature-pills">
        <div class="pill"><div class="pill-dot"></div>AI-Native</div>
        <div class="pill"><div class="pill-dot"></div>Cloud-Ready</div>
        <div class="pill"><div class="pill-dot"></div>ISO 27001</div>
        <div class="pill"><div class="pill-dot"></div>SOC 2 Type II</div>
        <div class="pill"><div class="pill-dot"></div>24/7 Support</div>
      </div>
      <a href="#contact" class="btn-primary">Get a Free Consultation</a>
    </div>
  </div>
</section>


<!-- WHY CHOOSE US -->
<section class="wcu-section" id="why-choose-us">
  <div class="wcu-header" data-reveal="up">
    <div class="eyebrow">Why Choose Us</div>
    <h2>Why Choose <span style="color:var(--teal)">Us</span></h2>
    <p>We combine deep expertise with cutting-edge technology to deliver solutions that truly make a difference.</p>
  </div>

  <div class="wcu-layout">

    <!-- LEFT column -->
    <div class="wcu-left">

      <div class="wcu-row" data-reveal="right" data-delay="100">
        <div class="wcu-text-block">
          <div class="wcu-title">Experience</div>
          <div class="wcu-desc">Over 12 years of delivering enterprise-grade IT solutions across 40+ countries, with a proven track record of success.</div>
        </div>
        <div><!-- icon is in center --></div>
      </div>

      <div class="wcu-row" data-reveal="right" data-delay="200">
        <div class="wcu-text-block">
          <div class="wcu-title">Products</div>
          <div class="wcu-desc">Battle-tested, scalable products engineered with modern architecture that evolves with your business needs.</div>
        </div>
        <div></div>
      </div>

      <div class="wcu-row" data-reveal="right" data-delay="300">
        <div class="wcu-text-block">
          <div class="wcu-title">Approach</div>
          <div class="wcu-desc">Agile, client-first methodology that keeps you informed, aligned, and in control at every stage of the project.</div>
        </div>
        <div></div>
      </div>

    </div>

    <!-- CENTER icons column -->
    <div class="wcu-center">

      <div class="wcu-icon-pair" data-reveal="zoom" data-delay="100">
        <div class="wcu-icon icon-blue">
          <svg viewBox="0 0 32 32"><rect x="4" y="4" width="24" height="18" rx="2"/><line x1="4" y1="22" x2="28" y2="22"/><circle cx="16" cy="10" r="3"/><line x1="10" y1="16" x2="22" y2="16"/></svg>
        </div>
        <div class="wcu-icon icon-red">
          <svg viewBox="0 0 32 32"><circle cx="16" cy="16" r="10"/><line x1="16" y1="10" x2="16" y2="16"/><line x1="16" y1="16" x2="20" y2="20"/><circle cx="16" cy="16" r="2" fill="white" stroke="none"/></svg>
        </div>
      </div>

      <div class="wcu-icon-pair" data-reveal="zoom" data-delay="200">
        <div class="wcu-icon icon-gray">
          <svg viewBox="0 0 32 32"><circle cx="16" cy="12" r="5"/><path d="M6 26c0-6 20-6 20 0"/><line x1="16" y1="6" x2="16" y2="3"/><line x1="22" y1="9" x2="24" y2="7"/><line x1="10" y1="9" x2="8" y2="7"/></svg>
        </div>
        <div class="wcu-icon icon-yellow">
          <svg viewBox="0 0 32 32"><circle cx="16" cy="16" r="8"/><circle cx="16" cy="16" r="3" stroke-width="1.5"/><line x1="16" y1="4" x2="16" y2="8"/><line x1="16" y1="24" x2="16" y2="28"/><line x1="4" y1="16" x2="8" y2="16"/><line x1="24" y1="16" x2="28" y2="16"/></svg>
        </div>
      </div>

      <div class="wcu-icon-pair" data-reveal="zoom" data-delay="300">
        <div class="wcu-icon icon-green">
          <svg viewBox="0 0 32 32"><rect x="4" y="6" width="24" height="18" rx="2"/><line x1="4" y1="12" x2="28" y2="12"/><line x1="10" y1="17" x2="22" y2="17"/><line x1="10" y1="21" x2="18" y2="21"/></svg>
        </div>
        <div class="wcu-icon icon-teal">
          <svg viewBox="0 0 32 32"><path d="M16 4 L28 10 L28 18 C28 23 22 27 16 29 C10 27 4 23 4 18 L4 10 Z"/><polyline points="10,16 14,20 22,12" stroke-width="2.5"/></svg>
        </div>
      </div>

    </div>

    <!-- RIGHT column -->
    <div class="wcu-right">

      <div class="wcu-row right-row" data-reveal="left" data-delay="100">
        <div><!-- icon is in center --></div>
        <div class="wcu-text-block">
          <div class="wcu-title">Pricing</div>
          <div class="wcu-desc">Transparent, competitive pricing with no hidden fees. Choose a plan that fits your budget and scale anytime.</div>
        </div>
      </div>

      <div class="wcu-row right-row" data-reveal="left" data-delay="200">
        <div></div>
        <div class="wcu-text-block">
          <div class="wcu-title">Delivery</div>
          <div class="wcu-desc">On-time delivery guaranteed with sprint-based milestones, weekly demos, and zero surprise delays.</div>
        </div>
      </div>

      <div class="wcu-row right-row" data-reveal="left" data-delay="300">
        <div></div>
        <div class="wcu-text-block">
          <div class="wcu-title">Support</div>
          <div class="wcu-desc">24/7 dedicated support with rapid SLA response times, proactive monitoring, and a team that genuinely cares.</div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- STATS BAR -->
<div class="stats-section">
  <div class="stats-grid">
    <div class="stat-item" data-reveal="up" data-delay="100"><div class="num">500+</div><div class="lbl">Projects Delivered</div></div>
    <div class="stat-item" data-reveal="up" data-delay="200"><div class="num">120+</div><div class="lbl">Expert Engineers</div></div>
    <div class="stat-item" data-reveal="up" data-delay="300"><div class="num">40+</div><div class="lbl">Countries Served</div></div>
    <div class="stat-item" data-reveal="up" data-delay="400"><div class="num">98%</div><div class="lbl">Client Satisfaction</div></div>
  </div>
</div>

<!-- WHY US -->
<section class="whyus-section">
  <div class="text-center">
    <div class="eyebrow" data-reveal="fade">Our Approach</div>
    <h2 class="section-title">How We <span>Make It Happen</span></h2>
    <p class="section-sub">A proven four-step methodology that takes you from idea to impact — fast.</p>
  </div>
  <div class="why-grid">
    <div class="why-card" data-reveal="up" data-delay="100">
      <div class="why-num">Step 01</div>
      <h4>Discovery & Audit</h4>
      <p>We study your goals, existing tech stack, and growth targets to craft a precise, data-driven roadmap tailored to you.</p>
    </div>
    <div class="why-card" data-reveal="up" data-delay="200">
      <div class="why-num">Step 02</div>
      <h4>Architecture Design</h4>
      <p>Our architects design resilient, scalable systems aligned to your industry's compliance and performance standards.</p>
    </div>
    <div class="why-card" data-reveal="up" data-delay="300">
      <div class="why-num">Step 03</div>
      <h4>Agile Development</h4>
      <p>Sprint-based execution with weekly demos — keeping your team aligned, informed, and in control at every milestone.</p>
    </div>
    <div class="why-card" data-reveal="up" data-delay="100">
      <div class="why-num">Step 04</div>
      <h4>Launch & Support</h4>
      <p>We handle deployment, performance monitoring, and continuous optimization well beyond your go-live date.</p>
    </div>
    <div class="why-card" data-reveal="up" data-delay="200">
      <div class="why-num">Step 05</div>
      <h4>AI-Powered Insights</h4>
      <p>Post-launch, our AI layer surfaces real-time analytics, anomalies, and opportunities to keep you ahead of the curve.</p>
    </div>
    <div class="why-card" data-reveal="up" data-delay="300">
      <div class="why-num">Step 06</div>
      <h4>Scale on Demand</h4>
      <p>As your user base grows, our elastic infrastructure auto-scales — so performance never becomes a bottleneck.</p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi-section" id="testimonials">
  <div class="text-center">
    <div class="eyebrow" data-reveal="fade">Client Stories</div>
    <h2 class="section-title">What Our <span>Clients Say</span></h2>
    <p class="section-sub">Trusted by teams across industries — here's what they have to say about working with us.</p>
  </div>
  <div class="testi-grid">
    <div class="testi-card" data-reveal="zoom" data-delay="100">
      <div class="stars">★★★★★</div>
      <p class="testi-text">"Ghoman - IT rebuilt our data pipeline from scratch. Processing time dropped from 4 hours to under 3 minutes. The ROI was visible within the first quarter."</p>
      <div class="testi-author">
        <div class="av">AR</div>
        <div><div class="av-name">Alex Rivera</div><div class="av-role">CTO, DataFlow Inc.</div></div>
      </div>
    </div>
    <div class="testi-card" data-reveal="zoom" data-delay="250">
      <div class="stars">★★★★★</div>
      <p class="testi-text">"Their cybersecurity team identified 11 critical vulnerabilities that others had missed. Professional, thorough, and completely trustworthy."</p>
      <div class="testi-author">
        <div class="av">SP</div>
        <div><div class="av-name">Sara Patel</div><div class="av-role">CISO, FinBridge Group</div></div>
      </div>
    </div>
    <div class="testi-card" data-reveal="zoom" data-delay="400">
      <div class="stars">★★★★★</div>
      <p class="testi-text">"We moved from a monolith to microservices in 6 months. Ghoman-IT's agile approach kept us informed at every step without slowing us down."</p>
      <div class="testi-author">
        <div class="av">MK</div>
        <div><div class="av-name">Marcus Kim</div><div class="av-role">VP Engineering, RetailSphere</div></div>
      </div>
    </div>
  </div>
</section>


<!-- TECHNOLOGIES -->
<section class="tech-section" id="technologies">
  <div class="tech-header" data-reveal="up">
    <div class="eyebrow">Tech Stack</div>
    <h2>Technologies</h2>
    <p>Advanced Technologies Driving Innovation and Efficiency in Your Business</p>
  </div>

  <!-- Row 1: scrolls LEFT -->
  <div class="ribbon-wrapper">
    <div class="ribbon-track scroll-left" id="ribbon1">
      <!-- set 1 -->
      <div class="tech-card tc-django"><span class="t-logo">🐍</span><span class="t-name">django</span></div>
      <div class="tech-card tc-php"><span class="t-logo">🐘</span><span class="t-name">PHP</span></div>
      <div class="tech-card tc-ci"><span class="t-logo">🔥</span><span class="t-name">CodeIgniter</span></div>
      <div class="tech-card tc-laravel"><span class="t-logo">🎨</span><span class="t-name">Laravel</span></div>
      <div class="tech-card tc-python"><span class="t-logo">🐍</span><span class="t-name">python</span></div>
      <div class="tech-card tc-react"><span class="t-logo">⚛️</span><span class="t-name">React</span></div>
      <div class="tech-card tc-node"><span class="t-logo">💚</span><span class="t-name">Node.js</span></div>
      <div class="tech-card tc-vue"><span class="t-logo">💚</span><span class="t-name">Vue.js</span></div>
      <div class="tech-card tc-ts"><span class="t-logo">📘</span><span class="t-name">TypeScript</span></div>
      <div class="tech-card tc-next"><span class="t-logo">▲</span><span class="t-name">Next.js</span></div>
      <!-- duplicate for seamless loop -->
      <div class="tech-card tc-django"><span class="t-logo">🐍</span><span class="t-name">django</span></div>
      <div class="tech-card tc-php"><span class="t-logo">🐘</span><span class="t-name">PHP</span></div>
      <div class="tech-card tc-ci"><span class="t-logo">🔥</span><span class="t-name">CodeIgniter</span></div>
      <div class="tech-card tc-laravel"><span class="t-logo">🎨</span><span class="t-name">Laravel</span></div>
      <div class="tech-card tc-python"><span class="t-logo">🐍</span><span class="t-name">python</span></div>
      <div class="tech-card tc-react"><span class="t-logo">⚛️</span><span class="t-name">React</span></div>
      <div class="tech-card tc-node"><span class="t-logo">💚</span><span class="t-name">Node.js</span></div>
      <div class="tech-card tc-vue"><span class="t-logo">💚</span><span class="t-name">Vue.js</span></div>
      <div class="tech-card tc-ts"><span class="t-logo">📘</span><span class="t-name">TypeScript</span></div>
      <div class="tech-card tc-next"><span class="t-logo">▲</span><span class="t-name">Next.js</span></div>
    </div>
  </div>

  <!-- Row 2: scrolls RIGHT -->
  <div class="ribbon-wrapper">
    <div class="ribbon-track scroll-right" id="ribbon2">
      <!-- set 1 -->
      <div class="tech-card tc-postgres"><span class="t-logo">🐘</span><span class="t-name">PostgreSQL</span></div>
      <div class="tech-card tc-ionic"><span class="t-logo">⚡</span><span class="t-name">ionic</span></div>
      <div class="tech-card tc-woo"><span class="t-logo">🛒</span><span class="t-name">WooCommerce</span></div>
      <div class="tech-card tc-magento"><span class="t-logo">🧲</span><span class="t-name">Magento</span></div>
      <div class="tech-card tc-shopify"><span class="t-logo">🛍️</span><span class="t-name">shopify</span></div>
      <div class="tech-card tc-aws"><span class="t-logo">☁️</span><span class="t-name">AWS</span></div>
      <div class="tech-card tc-docker"><span class="t-logo">🐳</span><span class="t-name">Docker</span></div>
      <div class="tech-card tc-mongo"><span class="t-logo">🍃</span><span class="t-name">MongoDB</span></div>
      <div class="tech-card tc-django"><span class="t-logo">🐍</span><span class="t-name">django</span></div>
      <div class="tech-card tc-laravel"><span class="t-logo">🎨</span><span class="t-name">Laravel</span></div>
      <!-- duplicate for seamless loop -->
      <div class="tech-card tc-postgres"><span class="t-logo">🐘</span><span class="t-name">PostgreSQL</span></div>
      <div class="tech-card tc-ionic"><span class="t-logo">⚡</span><span class="t-name">ionic</span></div>
      <div class="tech-card tc-woo"><span class="t-logo">🛒</span><span class="t-name">WooCommerce</span></div>
      <div class="tech-card tc-magento"><span class="t-logo">🧲</span><span class="t-name">Magento</span></div>
      <div class="tech-card tc-shopify"><span class="t-logo">🛍️</span><span class="t-name">shopify</span></div>
      <div class="tech-card tc-aws"><span class="t-logo">☁️</span><span class="t-name">AWS</span></div>
      <div class="tech-card tc-docker"><span class="t-logo">🐳</span><span class="t-name">Docker</span></div>
      <div class="tech-card tc-mongo"><span class="t-logo">🍃</span><span class="t-name">MongoDB</span></div>
      <div class="tech-card tc-django"><span class="t-logo">🐍</span><span class="t-name">django</span></div>
      <div class="tech-card tc-laravel"><span class="t-logo">🎨</span><span class="t-name">Laravel</span></div>
    </div>
  </div>

</section>


<!-- CLIENTS WORLD -->
<section class="clients-world-section" id="clients">

  <!-- World map SVG background (light blue continents) -->
  <svg class="world-map-bg" viewBox="0 0 1000 500" xmlns="http://www.w3.org/2000/svg" fill="#0d9488">
    <!-- North America -->
    <path d="M80,80 L180,60 L220,90 L200,130 L240,150 L230,200 L180,220 L140,210 L100,180 L70,140 Z" opacity="0.8"/>
    <path d="M180,200 L230,200 L260,240 L240,270 L200,260 L175,230 Z" opacity="0.8"/>
    <!-- Greenland -->
    <path d="M230,30 L280,20 L300,50 L270,70 L240,60 Z" opacity="0.6"/>
    <!-- South America -->
    <path d="M200,280 L260,260 L290,300 L300,360 L280,420 L240,440 L210,410 L190,360 L195,310 Z" opacity="0.8"/>
    <!-- Europe -->
    <path d="M420,60 L480,50 L510,80 L500,110 L470,120 L450,100 L430,110 L410,90 Z" opacity="0.8"/>
    <path d="M430,110 L470,120 L490,150 L460,160 L440,145 Z" opacity="0.7"/>
    <!-- Africa -->
    <path d="M430,160 L500,150 L530,180 L540,260 L520,330 L490,360 L460,340 L440,280 L420,220 L415,180 Z" opacity="0.8"/>
    <!-- Asia -->
    <path d="M510,50 L700,40 L780,70 L800,120 L760,150 L700,140 L650,160 L600,150 L560,120 L520,110 Z" opacity="0.8"/>
    <path d="M600,150 L700,140 L740,180 L720,230 L680,240 L640,220 L610,190 Z" opacity="0.8"/>
    <path d="M700,140 L780,130 L820,160 L810,200 L770,210 L740,190 L720,170 Z" opacity="0.7"/>
    <!-- India subcontinent -->
    <path d="M620,180 L660,175 L670,230 L650,270 L625,250 L610,210 Z" opacity="0.8"/>
    <!-- Southeast Asia -->
    <path d="M720,200 L780,190 L800,220 L780,250 L750,240 L725,225 Z" opacity="0.7"/>
    <path d="M750,250 L780,245 L785,290 L760,295 Z" opacity="0.6"/>
    <path d="M795,240 L830,235 L840,270 L815,275 Z" opacity="0.6"/>
    <!-- Japan -->
    <path d="M820,100 L840,90 L855,110 L845,130 L825,125 Z" opacity="0.7"/>
    <!-- Australia -->
    <path d="M750,320 L840,310 L870,350 L860,400 L820,420 L770,410 L740,370 L745,335 Z" opacity="0.8"/>
    <!-- New Zealand -->
    <path d="M880,370 L900,360 L910,390 L895,405 L878,395 Z" opacity="0.7"/>
    <!-- UK/Ireland -->
    <path d="M400,65 L415,60 L420,80 L408,85 Z" opacity="0.7"/>
    <path d="M393,68 L403,65 L405,82 L394,80 Z" opacity="0.6"/>
    <!-- Iceland -->
    <path d="M340,40 L370,35 L375,55 L355,60 L338,52 Z" opacity="0.5"/>
  </svg>

  <div data-reveal="up">
    <h2>We Works in Every Part of the World</h2>
    <p class="sub">Trusted by teams in 25+ countries worldwide</p>
  </div>

  <div class="world-map-wrap">
    <div class="flag-grid">

      <!-- Row 1 -->
      <div class="flag-item" data-reveal="zoom" data-delay="100">
        <div class="flag-circle pulse">
          <div><img src="<?= base_url('images/uk.png') ?>" alt="GB"></div>
        </div>
        <span class="flag-label">UK</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="150">
        <div class="flag-circle">
            <div><img src="<?= base_url('images/usa.png') ?>" alt="US"></div>
        </div>
        <span class="flag-label">USA</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="200">
        <div class="flag-circle pulse-delay">
          <div><img src="<?= base_url('images/canada.png') ?>" alt="CA"></div>
        </div>
        <span class="flag-label">Canada</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="250">
        <div class="flag-circle">
            <div><img src="<?= base_url('images/italy.png') ?>" alt="IT"></div>
        </div>
        <span class="flag-label">Italy</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="300">
        <div class="flag-circle pulse">
          <div><img src="<?= base_url('images/india.png') ?>" alt="IN"></div>
        </div>
        <span class="flag-label">India</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="350">
        <div class="flag-circle">
          <div><img src="<?= base_url('images/ireland.png') ?>" alt="IE"></div>
        </div>
        <span class="flag-label">Ireland</span>
      </div>

      <!-- Row 2 -->
      <div class="flag-item" data-reveal="zoom" data-delay="200">
        <div class="flag-circle pulse-delay">
          <div><img src="<?= base_url('images/australia.png') ?>" alt="AU"></div>
        </div>
        <span class="flag-label">Australia</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="250">
        <div class="flag-circle">
          <div><img src="<?= base_url('images/spain.png') ?>" alt="ES"></div>
        </div>
        <span class="flag-label">Spain</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="300">
        <div class="flag-circle pulse">
          <div><img src="<?= base_url('images/south-africa.png') ?>" alt="ZA"></div>
        </div>
        <span class="flag-label">South Africa</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="350">
        <div class="flag-circle">
          <div><img src="<?= base_url('images/new-zealand.png') ?>" alt="NZ"></div>
        </div>
        <span class="flag-label">New Zealand</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="400">
        <div class="flag-circle pulse-delay">
          <div><img src="<?= base_url('images/portugal.png') ?>" alt="PT"></div>
        </div>
        <span class="flag-label">Portugal</span>
      </div>

      <div class="flag-item" data-reveal="zoom" data-delay="450">
        <div class="flag-circle">
          <div><img src="<?= base_url('images/france.png') ?>" alt="FR"></div>
        </div>
        <span class="flag-label">France</span>
      </div>

    </div>
  </div>

</section>

<!-- CTA BAND -->
<section class="cta-band" id="contact">
  <h2 data-reveal="up">Ready to Transform Your Business?</h2>
  <p data-reveal="fade" data-delay="200">Book a free 30-minute strategy call. No strings attached — just clarity on what's possible.</p>
  <div class="cta-btns" data-reveal="up" data-delay="350">
    <button class="btn-white">Get a Free Quote</button>
    <a href="#services" class="btn-ghost">View Services</a>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div>
      <a href="<?= base_url('/') ?>" class="foot-logo">
        <div class="logo-icon">GT</div>
         <!-- <div class="logo-icon1"><img src="<?= base_url('logo.png') ?>" width="50"  alt="GhomanITSolutions Logo"></div> -->
        <span class="foot-logo-text">Ghoman<strong>IT</strong>Solutions</span>
      </a>
      <p class="foot-desc">Empowering businesses with intelligent technology. From AI to cloud infrastructure, we build systems that move industries forward.</p>
    </div>
    <div class="foot-col">
      <h5>Services</h5>
      <ul>
        <li><a href="<?= base_url('/') ?>">AI & ML</a></li>
        <li><a href="<?= base_url('/') ?>">Cloud Infra</a></li>
        <li><a href="<?= base_url('/') ?>">Cybersecurity</a></li>
        <li><a href="<?= base_url('/') ?>">Analytics</a></li>
        <li><a href="<?= base_url('/') ?>">Web Hosting</a></li>
      </ul>
    </div>
    <div class="foot-col">
      <h5>Company</h5>
      <ul>
        <li><a href="<?= base_url('/') ?>">About Us</a></li>
        <li><a href="<?= base_url('/') ?>">Case Studies</a></li>
        <li><a href="<?= base_url('/') ?>">Careers</a></li>
        <li><a href="<?= base_url('/') ?>">Blog</a></li>
        <li><a href="<?= base_url('/') ?>">Partners</a></li>
      </ul>
    </div>
    <div class="foot-col">
      <h5>Contact</h5>
      <ul>
        <li><a href="<?= base_url('/') ?>">ghomanitsolutions@gmail.com</a></li>
        <li><a href="<?= base_url('/') ?>">+1 (587) 736-2288</a></li>
        <li><a href="<?= base_url('/') ?>">2836 36 Ave NW, Edmonton, AB T6T 0H7</a></li>
        <li><a href="https://attendopay.com/">Support Portal - Attendopay</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2026 GhomanIT. All rights reserved.</span>
    <div class="social-row">
      <a href="<?= base_url('/') ?>" class="soc">𝕏</a>
      <a href="<?= base_url('/') ?>" class="soc">in</a>
      <a href="<?= base_url('/') ?>" class="soc">gh</a>
      <a href="<?= base_url('/') ?>" class="soc">yt</a>
    </div>
    <div style="display:flex;gap:1.5rem">
      <a href="<?= base_url('/') ?>" style="color:rgba(255,255,255,0.35);text-decoration:none;font-size:0.8rem">Privacy</a>
      <a href="<?= base_url('/') ?>" style="color:rgba(255,255,255,0.35);text-decoration:none;font-size:0.8rem">Terms</a>
    </div>
  </div>
</footer>

<button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<script>
document.addEventListener('DOMContentLoaded', () => {

// ─── Navbar scroll behavior ───
const nav = document.getElementById('main-nav');
const scrollTopBtn = document.getElementById('scrollTop');

window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 60);
  if(scrollTopBtn) scrollTopBtn.classList.toggle('show', window.scrollY > 400);
});

// ─── Mobile drawer ───
const drawer   = document.getElementById('mobileDrawer');
const overlay  = document.getElementById('drawerOverlay');
const hamburger = document.getElementById('hamburger');
const drawerClose = document.getElementById('drawerClose');

function openDrawer(){
  if(!drawer || !overlay) return;
  drawer.classList.add('open');
  overlay.classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeDrawer(){
  if(!drawer || !overlay) return;
  drawer.classList.remove('open');
  overlay.classList.remove('open');
  document.body.style.overflow = '';
}
function toggleDrawer(){
  if(!drawer || !overlay) return;
  if(drawer.classList.contains('open')) {
    closeDrawer();
  } else {
    openDrawer();
  }
}
if(hamburger)   hamburger.addEventListener('click', toggleDrawer);
if(drawerClose) drawerClose.addEventListener('click', closeDrawer);
if(overlay)     overlay.addEventListener('click', closeDrawer);
document.addEventListener('keydown', e => {
  if(e.key === 'Escape') closeDrawer();
});
document.querySelectorAll('.drawer-link').forEach(a => a.addEventListener('click', closeDrawer));

// ─── Network canvas animation ───
const canvas = document.getElementById('network-canvas');
const heroSection = document.querySelector('.hero');
if(!canvas || !heroSection) return;

const ctx = canvas.getContext('2d');
let W, H, dots = [];
const mouse = { x: -9999, y: -9999 };

function getCanvasPos(e){
  const rect = canvas.getBoundingClientRect();
  const src = e.touches ? e.touches[0] : e;
  return { x: src.clientX - rect.left, y: src.clientY - rect.top };
}

canvas.addEventListener('mousemove', e => {
  const p = getCanvasPos(e); mouse.x = p.x; mouse.y = p.y;
});
canvas.addEventListener('mouseleave', () => { mouse.x = -9999; mouse.y = -9999; });
canvas.addEventListener('touchmove', e => {
  e.preventDefault();
  const p = getCanvasPos(e); mouse.x = p.x; mouse.y = p.y;
}, { passive: false });
canvas.addEventListener('touchend', () => { mouse.x = -9999; mouse.y = -9999; });

canvas.addEventListener('click', e => {
  const p = getCanvasPos(e);
  for(let i = 0; i < 6; i++){
    const angle = (Math.PI * 2 / 6) * i;
    dots.push({
      x: p.x, y: p.y,
      vx: Math.cos(angle) * (1.5 + Math.random()),
      vy: Math.sin(angle) * (1.5 + Math.random()),
      r: Math.random() * 2 + 1.5,
      life: 1.0
    });
  }
  dots.forEach(d => {
    const dx = d.x - p.x, dy = d.y - p.y;
    const dist = Math.sqrt(dx*dx + dy*dy);
    if(dist < 150 && dist > 0){
      const force = (150 - dist) / 150 * 3;
      d.vx += (dx / dist) * force;
      d.vy += (dy / dist) * force;
    }
  });
});

function resize(){
  W = canvas.width  = heroSection.offsetWidth;
  H = canvas.height = heroSection.offsetHeight;
}

function makeDot(){
  return {
    x: Math.random() * W,
    y: Math.random() * H,
    vx: (Math.random() - .5) * 0.6,
    vy: (Math.random() - .5) * 0.6,
    r: Math.random() * 2.5 + 1,
    life: null
  };
}

const REPEL_R = 120, CONNECT_R = 180, MOUSE_R = 220;

function draw(){
  ctx.clearRect(0, 0, W, H);

  dots.forEach(d => {
    const mdx = d.x - mouse.x, mdy = d.y - mouse.y;
    const mDist = Math.sqrt(mdx*mdx + mdy*mdy);
    if(mDist < REPEL_R && mDist > 0){
      const force = (REPEL_R - mDist) / REPEL_R * 0.8;
      d.vx += (mdx / mDist) * force;
      d.vy += (mdy / mDist) * force;
    }
    const speed = Math.sqrt(d.vx*d.vx + d.vy*d.vy);
    if(speed > 3)  { d.vx *= 0.92; d.vy *= 0.92; }
    if(speed < 0.3){ d.vx *= 1.04; d.vy *= 1.04; }
    d.x += d.vx; d.y += d.vy;
    if(d.x < 0 || d.x > W) d.vx *= -1;
    if(d.y < 0 || d.y > H) d.vy *= -1;
    if(d.life !== null) d.life -= 0.012;
  });

  dots = dots.filter(d => d.life === null || d.life > 0);

  // dot-to-dot lines
  for(let i = 0; i < dots.length; i++){
    for(let j = i+1; j < dots.length; j++){
      const dx = dots[i].x - dots[j].x, dy = dots[i].y - dots[j].y;
      const dist = Math.sqrt(dx*dx + dy*dy);
      if(dist < CONNECT_R){
        ctx.beginPath();
        ctx.moveTo(dots[i].x, dots[i].y);
        ctx.lineTo(dots[j].x, dots[j].y);
        ctx.strokeStyle = `rgba(0,191,165,${0.45*(1-dist/CONNECT_R)*Math.min(dots[i].life??1, dots[j].life??1)})`;
        ctx.lineWidth = 0.8;
        ctx.stroke();
      }
    }
  }

  // mouse-to-dot lines
  if(mouse.x > -1000){
    dots.forEach(d => {
      const dx = d.x - mouse.x, dy = d.y - mouse.y;
      const dist = Math.sqrt(dx*dx + dy*dy);
      if(dist < MOUSE_R){
        ctx.beginPath();
        ctx.moveTo(mouse.x, mouse.y);
        ctx.lineTo(d.x, d.y);
        ctx.strokeStyle = `rgba(0,230,200,${0.6*(1-dist/MOUSE_R)})`;
        ctx.lineWidth = 0.9;
        ctx.stroke();
      }
    });
    // cursor glow
    ctx.beginPath();
    ctx.arc(mouse.x, mouse.y, 4, 0, Math.PI*2);
    ctx.fillStyle = 'rgba(0,230,200,0.9)';
    ctx.fill();
    ctx.beginPath();
    ctx.arc(mouse.x, mouse.y, 12, 0, Math.PI*2);
    ctx.strokeStyle = 'rgba(0,191,165,0.3)';
    ctx.lineWidth = 1;
    ctx.stroke();
  }

  // draw dots
  dots.forEach(d => {
    ctx.beginPath();
    ctx.arc(d.x, d.y, d.r, 0, Math.PI*2);
    ctx.fillStyle = `rgba(0,210,180,${0.85*(d.life??1)})`;
    ctx.fill();
  });

  requestAnimationFrame(draw);
}

// Init after fonts/images load so hero has correct height
window.addEventListener('load', () => {
  resize();
  dots = [];
  for(let i = 0; i < 90; i++) dots.push(makeDot());
  draw();
});
window.addEventListener('resize', resize);

// ─── Scroll Reveal (data-reveal) ───
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      //do not add revealed for svc-card
      if(entry.target.classList.contains('svc-card')) return;
      entry.target.classList.add('revealed');
      // once revealed, stop watching
      revealObserver.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.12,
  rootMargin: '0px 0px -60px 0px'  // trigger slightly before fully in view
});

// Observe all elements with data-reveal
document.querySelectorAll('[data-reveal]').forEach(el => {
  revealObserver.observe(el);
});

// ─── Smooth scroll ───
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const href = a.getAttribute('href');
    if (!href || href === '#') {
      return;
    }

    const target = document.querySelector(href);
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior:'smooth' });
    }
  });
});

}); // end DOMContentLoaded
</script>
</body>
</html>
