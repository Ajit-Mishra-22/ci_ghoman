<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Ghoman — IT Solutions & Business Services</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>"/>
<link rel="stylesheet" href="<?= base_url('css/styles.ribbon.css') ?>"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<style>
  .services-cards-wrap {
    background-image: url('<?= base_url('services_ai_bg.jpg') ?>');
  }

  /* Blur-like look for services cards background */
  .services-cards-wrap::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: inherit;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    filter: blur(8px);
    opacity: 0.55;
    transform: scale(1.08);
    z-index: 0;
    pointer-events: none;
  }

  .services-cards-wrap > * {
    position: relative;
    z-index: 1;
  }
  .hero{
      min-height:100vh;
      background:url('<?= base_url('hero-bg.jpeg') ?>');
      background-size: cover;
      background-position: center top;
      position:relative;overflow:hidden;
      display:flex;align-items:flex-end;
      padding:0 5% 15vh;
      top: 33px;
    }

    .d-hide{
      display:none;
    }

  @media (max-width: 768px) {
    .hero {
      align-items: center;
      justify-content: center;
      padding: 0 6% 1vh;
      text-align: center;
    }

    .hero-content {
      max-width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2rem;
      line-height: 1.4;
      margin-bottom: 1rem;
      width: 200px;
      text-align: left;
    }

    .hero p {
      font-size: 1rem;
    }

    .wcu-icon{
      display: inline-flex;
    }
  }

  .team-avatar {
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: 800;
    color: rgb(255, 255, 255);
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    margin: 0px auto 20px;
}
</style>
</head>
<body>

<!-- TOP RIBBON / OFFICES BAR -->
<div class="offices-bar">
  <div class="container">
    <div class="offices-bar-inner">
      <div class="offices-bar-left">
        <span class="offices-bar-item">
          <span class="offices-bar-label">CAN</span> : +1 (587) 736-2288
        </span>
        <span class="offices-bar-sep">|</span>
        <span class="offices-bar-item">
          <span class="offices-bar-label">IND</span> : +91 83604 22303
        </span>
        <span class="offices-bar-sep">|</span>
        <span class="offices-bar-item">
          <i class="fas fa-paper-plane" style="color:#06b6d4;margin-right:5px;"></i>
          <a href="mailto:hello@ghoman.ca" class="offices-email">hello@ghoman.ca</a>
        </span>
      </div>
      <div class="offices-bar-right">
        <a href="https://www.facebook.com/share/19AgdebvQK/?mibextid=wwXIfr" class="offices-social" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/ghoman.ca?igsh=ZndjZThidDY5d2tq&utm_source=qr" class="offices-social" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="offices-social" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="offices-social" aria-label="X"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- NAV -->
<nav id="main-nav">
  <a href="<?= base_url('/') ?>" class="logo-wrap">
    <!-- <div class="logo-icon">GT</div> -->
    <div class="logo-icon1">
      <img src="<?= base_url('logow.png') ?>" class="imgw" width="60" alt="GhomanITSolutions Logo">
      <img src="<?= base_url('logob.png') ?>" class="imgb" width="60" alt="GhomanITSolutions Logo">
    </div>
    <span class="logo-text">Ghoman<strong>IT </strong>Solutions</span>
  </a>
  <div class="nav-center" aria-label="Primary navigation">
    <a href="#home" class="nav-link">Home</a>
    <a href="#services" class="nav-link">Services</a>
    <a href="#about" class="nav-link">About</a>
    <a href="#why-choose-us" class="nav-link">Why Choose Us</a>
    <a href="#testimonials" class="nav-link">Testimonials</a>
    <a href="#technologies" class="nav-link">Technologies</a>
    <a href="#clients" class="nav-link">Clients</a>
    <a href="#contact" class="nav-link">Contact</a>

  </div>

  <div class="hamburger" id="hamburger">
    <span></span><span></span><span></span>
  </div>
</nav>

<div class="drawer-overlay" id="drawerOverlay"></div>
<aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile navigation">
  <button class="drawer-close" id="drawerClose" aria-label="Close menu">×</button>
  <a href="<?= base_url('/') ?>" class="drawer-logo">
    <!-- <div class="logo-icon">GT</div> -->
    <div class="logo-icon1"><img src="<?= base_url('logow.png') ?>" width="60" alt="GhomanIT Logo"></div>
    <span>Ghoman<strong>IT </strong>Solutions</span>
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
    <p>Custom IT solutions, optimized for growth and performance. Innovative, SEO-friendly platforms designed to help you lead. Your vision, our code — let's build the future together.</p>
  </div>
</section>

<div class="services-cards-wrap" id="services">
  <div class="services-heading" data-reveal="up">
    <h2>Services We Offer</h2>
    <p>Explore our creative solutions that make a real difference.</p>
  </div>
  <div class="services-grid">
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
<section class="wcu-section" id="why-choose-us" style="background-image: linear-gradient(135deg, rgba(8, 13, 13, 0.78), rgba(8, 13, 13, 0.68)), url('<?= base_url('hand_bg.png') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
  <div class="wcu-header" data-reveal="up">
    <h2>Why Choose <span style="color:var(--teal)">Us</span></h2>
    <p>We combine deep expertise with cutting-edge technology to deliver solutions that truly make a difference.</p>
  </div>

  <div class="wcu-layout">

    <!-- LEFT column -->
    <div class="wcu-left">

      <div class="wcu-row" data-reveal="right" data-delay="100">
        <div class="wcu-text-block">
          <div class="wcu-title">Experience
            <div class="wcu-icon icon-blue d-hide">
              <svg viewBox="0 0 32 32"><rect x="4" y="4" width="24" height="18" rx="2"/><line x1="4" y1="22" x2="28" y2="22"/><circle cx="16" cy="10" r="3"/><line x1="10" y1="16" x2="22" y2="16"/></svg>
            </div>
          </div>
          <div class="wcu-desc">Over 12 years of delivering enterprise-grade IT solutions across 40+ countries, with a proven track record of success.</div>
        </div>
        <div><!-- icon is in center --></div>
      </div>

      <div class="wcu-row" data-reveal="right" data-delay="200">
        <div class="wcu-text-block">
          <div class="wcu-title">Products
            <div class="wcu-icon icon-gray d-hide">
              <svg viewBox="0 0 32 32"><circle cx="16" cy="12" r="5"/><path d="M6 26c0-6 20-6 20 0"/><line x1="16" y1="6" x2="16" y2="3"/><line x1="22" y1="9" x2="24" y2="7"/><line x1="10" y1="9" x2="8" y2="7"/></svg>
            </div>
          </div>
          <div class="wcu-desc">Battle-tested, scalable products engineered with modern architecture that evolves with your business needs.</div>
        </div>
        <div></div>
      </div>

      <div class="wcu-row" data-reveal="right" data-delay="300">
        <div class="wcu-text-block">
          <div class="wcu-title">Approach
            <div class="wcu-icon icon-green d-hide">
              <svg viewBox="0 0 32 32"><rect x="4" y="6" width="24" height="18" rx="2"/><line x1="4" y1="12" x2="28" y2="12"/><line x1="10" y1="17" x2="22" y2="17"/><line x1="10" y1="21" x2="18" y2="21"/></svg>
            </div>
          </div>
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
          <div class="wcu-title">Pricing
            <div class="wcu-icon icon-red d-hide">
              <svg viewBox="0 0 32 32"><circle cx="16" cy="16" r="10"/><line x1="16" y1="10" x2="16" y2="16"/><line x1="16" y1="16" x2="20" y2="20"/><circle cx="16" cy="16" r="2" fill="white" stroke="none"/></svg>
            </div>
          </div>
          <div class="wcu-desc">Transparent, competitive pricing with no hidden fees. Choose a plan that fits your budget and scale anytime.</div>
        </div>
      </div>

      <div class="wcu-row right-row" data-reveal="left" data-delay="200">
        <div></div>
        <div class="wcu-text-block">
          <div class="wcu-title">Delivery
            <div class="wcu-icon icon-yellow d-hide">
              <svg viewBox="0 0 32 32"><circle cx="16" cy="16" r="8"/><circle cx="16" cy="16" r="3" stroke-width="1.5"/><line x1="16" y1="4" x2="16" y2="8"/><line x1="16" y1="24" x2="16" y2="28"/><line x1="4" y1="16" x2="8" y2="16"/><line x1="24" y1="16" x2="28" y2="16"/></svg>
            </div>
          </div>
          <div class="wcu-desc">On-time delivery guaranteed with sprint-based milestones, weekly demos, and zero surprise delays.</div>
        </div>
      </div>

      <div class="wcu-row right-row" data-reveal="left" data-delay="300">
        <div></div>
        <div class="wcu-text-block">
          <div class="wcu-title">Support
            <div class="wcu-icon icon-teal d-hide">
              <svg viewBox="0 0 32 32"><path d="M16 4 L28 10 L28 18 C28 23 22 27 16 29 C10 27 4 23 4 18 L4 10 Z"/><polyline points="10,16 14,20 22,12" stroke-width="2.5"/></svg>
            </div>
          </div>
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
<section class="testi-section" id="testimonials" style="background-image: linear-gradient(135deg, rgba(8, 13, 13, 0.78), rgba(8, 13, 13, 0.68)), url('<?= base_url('hand_bg.png') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
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


<!-- TEAM -->
<section class="team-section" id="team">
  <div class="text-center">
    <div class="eyebrow">Our People</div>
    <h2 class="section-title">Meet the <span>Team</span></h2>
    <p class="section-sub">Talented people behind our products and client success.</p>
  </div>

  <div class="team-grid">
    <div class="team-card" data-reveal="up">
      <div class="team-photo">
        <img src="<?= base_url('teams/team_cto.jpeg') ?>" alt="Ajit Mishra">
      </div>
      <div class="team-card-body">
        <h3 class="team-name">Ajit Mishra</h3>
        <div class="team-role">CTO</div>
        <p class="team-note">Drives technology vision and innovation with strategic leadership, ensuring scalable solutions and measurable impact.</p>
      </div>
    </div>

    <div class="team-card" data-reveal="up">
      <div class="team-photo"><img src="<?= base_url('teams/team_md.jpeg') ?>" alt="Amrinder Singh"></div>
      <div class="team-card-body">
        <h3 class="team-name">Amrinder Singh</h3>
        <div class="team-role">MD</div>
        <p class="team-note">Champions brand expansion and market leadership through innovative strategies that convert opportunities into results.</p>
      </div>
    </div>

    <div class="team-card" data-reveal="up">
      <div class="team-photo">
        <img src="<?= base_url('teams/team_iot.jpeg') ?>" alt="Ravinder Singh">
      </div>
      <div class="team-card-body">
        <h3 class="team-name">Ravinder Singh</h3>
        <div class="team-role">IOT Expert</div>
        <p class="team-note">Drives IoT innovation, transforming data from devices into actionable, measurable outcomes.</p>
      </div>
    </div>

    <div class="team-card" data-reveal="up">
      <div class="team-photo">
        <img src="<?= base_url('teams/team_development.jpeg') ?>" alt="Developer Teams">
      </div>
      <div class="team-card-body">
        <h3 class="team-name">Development Teams</h3>
        <div class="team-role">Engineering</div>
        <p class="team-note">Leads social media strategy, blending creativity with consistency to grow audiences and strengthen brand identity.</p>
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
        <!-- <div class="logo-icon">GT</div> -->
         <div class="logo-icon1"><img src="<?= base_url('logow.png') ?>" width="60"  alt="GhomanITSolutions Logo"></div>
        <span class="foot-logo-text">Ghoman<strong>IT </strong>Solutions</span>
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
        <li><a href="<?= base_url('/') ?>">hello@ghoman.ca</a></li>
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

<a href="https://wa.me/15877362288" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp" aria-hidden="true"></i>
</a>

<button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
