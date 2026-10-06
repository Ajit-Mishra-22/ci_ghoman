<?= $this->extend('layouts/app') ?>

<?= $this->section('css') ?>
<style>
  body.page-company nav {
    background: rgba(255, 255, 255, 0.96);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
  }

  body.page-company nav .nav-link {
    color: var(--text-dark);
  }

  body.page-company nav .imgw {
    display: none;
  }

  body.page-company nav .imgb {
    display: block;
  }

  .company-page {
    min-height: 100vh;
    padding: 140px 5% 80px;
    background: var(--light-bg);
  }

  .company-content {
    max-width: 1000px;
    margin: 0 auto;
  }

  .company-header {
    max-width: 760px;
    margin: 0 auto 3rem;
    text-align: center;
  }

  .company-header h1 {
    margin: 0 0 0.8rem;
    color: var(--text-dark);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.5px;
  }

  .company-header h1 span {
    color: var(--teal);
  }

  .company-header p,
  .company-card p {
    color: var(--text-muted);
    font-size: 1rem;
    line-height: 1.8;
  }

  .company-card {
    margin-bottom: 1.5rem;
    padding: clamp(1.5rem, 4vw, 2.5rem);
    background: var(--white);
    border: 1px solid var(--border-light);
    border-radius: 18px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
  }

  .company-card h2 {
    margin: 0 0 0.75rem;
    color: var(--text-dark);
    font-size: 1.35rem;
    font-weight: 700;
  }

  .company-card p {
    margin: 0 0 1rem;
  }

  .company-card p:last-child {
    margin-bottom: 0;
  }

  .company-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 0.5rem;
    color: var(--teal);
    font-weight: 700;
    text-decoration: none;
  }

  .company-link:hover {
    color: var(--teal-dark);
    text-decoration: underline;
    text-underline-offset: 0.2rem;
  }

  @media (max-width: 768px) {
    .company-page {
      padding: 110px 5% 60px;
    }
  }

  @media (max-width: 600px) {
    .company-page {
      padding: 100px 4% 50px;
    }
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main class="company-page">
  <div class="company-content">
    <header class="company-header">
      <div class="eyebrow">About Ghoman IT</div>
      <h1>Technology That Helps <span>Businesses Move Forward</span></h1>
      <p>Ghoman IT Solutions partners with businesses to plan, build, and support practical technology that fits their goals and grows with them.</p>
    </header>

    <section class="company-card">
      <h2>Who We Are</h2>
      <p>We are an IT solutions company based in Edmonton, Alberta. Our work spans custom software and application development, AI and machine learning, cloud infrastructure, cybersecurity, data analytics, web hosting, and digital marketing.</p>
      <p>We focus on understanding the problem first, then shaping technology around the people and processes that rely on it.</p>
    </section>

    <section class="company-card">
      <h2>How We Work</h2>
      <p>Our approach is collaborative and iterative. We keep communication open, break complex work into manageable steps, and consider security, performance, and maintainability throughout delivery.</p>
      <p>Whether you are starting a new product or improving existing systems, we aim to make each solution clear, dependable, and useful to your business.</p>
    </section>

    <section class="company-card">
      <h2>What We Do</h2>
      <p>We bring software development and IT services together so businesses can work with one team across planning, implementation, and ongoing support.</p>
      <a class="company-link" href="<?= route_to('services') ?>">Explore our services <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
    </section>

    <section class="company-card">
      <h2>Let’s Talk</h2>
      <p>Have a project in mind or want to learn how we can help? Tell us what you are working on and our team will get back to you.</p>
      <a class="company-link" href="<?= route_to('contact') ?>">Contact our team <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
    </section>
  </div>
</main>
<?= $this->endSection() ?>
