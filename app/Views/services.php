<?= $this->extend('layouts/app') ?>

<?= $this->section('css') ?>
<style>
  body.page-services nav {
    background: rgba(255, 255, 255, 0.96);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
  }

  body.page-services nav .nav-link {
    color: var(--text-dark);
  }

  body.page-services nav .imgw {
    display: none;
  }

  body.page-services nav .imgb {
    display: block;
  }

  .services-page {
    min-height: 100vh;
    padding: 140px 5% 80px;
    background: var(--light-bg);
  }

  .services-page-header {
    max-width: 760px;
    margin: 0 auto 3.5rem;
    text-align: center;
  }

  .services-page-header h1 {
    margin: 0 0 0.8rem;
    color: var(--text-dark);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.5px;
  }

  .services-page-header h1 span {
    color: var(--teal);
  }

  .services-page-header p {
    max-width: 620px;
    margin: 0 auto;
    color: var(--text-muted);
    font-size: 1rem;
    line-height: 1.7;
  }

  .service-details {
    display: grid;
    gap: 1.5rem;
    max-width: 1000px;
    margin: 0 auto;
  }

  .service-detail {
    display: grid;
    grid-template-columns: 64px 1fr;
    gap: 1.25rem;
    align-items: start;
    padding: 2rem;
    background: var(--white);
    border: 1px solid var(--border-light);
    border-radius: 18px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    scroll-margin-top: 110px;
  }

  .service-detail-icon {
    display: flex;
    width: 56px;
    height: 56px;
    align-items: center;
    justify-content: center;
    border-radius: 16px;
    background: rgba(0, 191, 165, 0.1);
    color: var(--teal);
    font-size: 1.35rem;
  }

  .service-detail h2 {
    margin: 0 0 0.55rem;
    color: var(--text-dark);
    font-size: 1.35rem;
    font-weight: 700;
  }

  .service-detail p {
    margin: 0;
    color: var(--text-muted);
    font-size: 0.95rem;
    line-height: 1.75;
  }

  .service-detail a {
    display: inline-block;
    margin-top: 1rem;
    color: var(--teal);
    font-size: 0.9rem;
    font-weight: 700;
    text-decoration: none;
  }

  .service-detail a:hover {
    color: var(--teal-dark);
    text-decoration: underline;
    text-underline-offset: 0.2rem;
  }

  @media (max-width: 768px) {
    .services-page {
      padding: 110px 5% 60px;
    }

    .service-detail {
      grid-template-columns: 48px 1fr;
      gap: 1rem;
      padding: 1.5rem;
      scroll-margin-top: 80px;
    }

    .service-detail-icon {
      width: 46px;
      height: 46px;
      border-radius: 13px;
      font-size: 1.1rem;
    }
  }

  @media (max-width: 480px) {
    .services-page {
      padding: 100px 4% 50px;
    }

    .service-detail {
      grid-template-columns: 1fr;
      padding: 1.35rem;
    }
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main class="services-page">
  <header class="services-page-header">
    <div class="eyebrow">What We Do</div>
    <h1>IT Services Built for <span>Your Business</span></h1>
    <p>From intelligent automation to reliable infrastructure, explore the technology services that help your business work smarter and grow with confidence.</p>
  </header>

  <div class="service-details">
    <section class="service-detail" id="ai-ml">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-brain"></i></div>
      <div>
        <h2>AI &amp; Machine Learning</h2>
        <p>Apply artificial intelligence and machine learning to automate repetitive work, uncover useful patterns in your data, and build smarter digital products around your business needs.</p>
        <a href="<?= route_to('contact') ?>">Discuss an AI project <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>

    <section class="service-detail" id="software-development">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-code"></i></div>
      <div>
        <h2>Custom Software Development</h2>
        <p>Build custom software around the way your business works, from internal tools and workflow automation to scalable platforms and integrations.</p>
        <a href="<?= route_to('contact') ?>">Discuss software development <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>

    <section class="service-detail" id="app-development">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-mobile-alt"></i></div>
      <div>
        <h2>Web &amp; Mobile App Development</h2>
        <p>Design and develop responsive web applications and mobile experiences with intuitive interfaces, reliable performance, and features tailored to your users.</p>
        <a href="<?= route_to('contact') ?>">Discuss app development <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>

    <section class="service-detail" id="seo-digital-marketing">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-bullhorn"></i></div>
      <div>
        <h2>SEO &amp; Digital Marketing</h2>
        <p>Improve your visibility online with search engine optimization, technical SEO, content strategy, and digital marketing support designed to attract and engage the right audience.</p>
        <a href="<?= route_to('contact') ?>">Discuss SEO and digital marketing <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>

    <section class="service-detail" id="cloud-infra">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-cloud"></i></div>
      <div>
        <h2>Cloud Infrastructure</h2>
        <p>Design and manage secure, scalable cloud environments that support your applications, improve reliability, and adapt as your organization grows.</p>
        <a href="<?= route_to('contact') ?>">Discuss cloud infrastructure <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>

    <section class="service-detail" id="cybersecurity">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-shield-halved"></i></div>
      <div>
        <h2>Cybersecurity</h2>
        <p>Strengthen your security posture with practical protection for your systems and data, including security assessments, threat detection, and guidance on compliance.</p>
        <a href="<?= route_to('contact') ?>">Discuss cybersecurity <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>

    <section class="service-detail" id="analytics">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-chart-line"></i></div>
      <div>
        <h2>Data Analytics</h2>
        <p>Bring your business data together and turn it into clear reports, dashboards, and insights that help teams understand performance and make informed decisions.</p>
        <a href="<?= route_to('contact') ?>">Discuss data analytics <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>

    <section class="service-detail" id="web-hosting">
      <div class="service-detail-icon" aria-hidden="true"><i class="fas fa-server"></i></div>
      <div>
        <h2>Web Hosting</h2>
        <p>Keep your website available and performing with dependable hosting, security-conscious configuration, and support for the infrastructure your online presence relies on.</p>
        <a href="<?= route_to('contact') ?>">Discuss web hosting <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section>
  </div>
</main>
<?= $this->endSection() ?>
