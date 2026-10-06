<?= $this->extend('layouts/app') ?>

<?= $this->section('css') ?>
<style>
  body.page-legal nav {
    background: rgba(255, 255, 255, 0.96);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
  }

  body.page-legal nav .nav-link {
    color: var(--text-dark);
  }

  body.page-legal nav .imgw {
    display: none;
  }

  body.page-legal nav .imgb {
    display: block;
  }

  .legal-page {
    min-height: 100vh;
    padding: 140px 5% 80px;
    background: var(--light-bg);
  }

  .legal-content {
    max-width: 900px;
    margin: 0 auto;
    padding: clamp(1.5rem, 5vw, 3.5rem);
    background: var(--white);
    border: 1px solid var(--border-light);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
  }

  .legal-content h1 {
    margin: 0 0 0.5rem;
    color: var(--text-dark);
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 800;
  }

  .legal-updated {
    margin: 0 0 2rem;
    color: var(--text-muted);
    font-size: 0.88rem;
  }

  .legal-content h2 {
    margin: 2rem 0 0.6rem;
    color: var(--text-dark);
    font-size: 1.2rem;
    font-weight: 700;
  }

  .legal-content p,
  .legal-content li {
    color: var(--text-muted);
    font-size: 0.96rem;
    line-height: 1.8;
  }

  .legal-content ul {
    padding-left: 1.4rem;
  }

  .legal-content a {
    color: var(--teal);
  }

  @media (max-width: 768px) {
    .legal-page {
      padding: 110px 5% 60px;
    }
  }

  @media (max-width: 600px) {
    .legal-page {
      padding: 100px 4% 50px;
    }
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main class="legal-page">
  <article class="legal-content">
    <h1>Terms and Conditions</h1>
    <p class="legal-updated">Last updated: October 5, 2026</p>

    <p>These terms apply to your use of the Ghoman IT Solutions website. By accessing or using this website, you agree to these terms. If you do not agree, please do not use the website.</p>

    <h2>Website information</h2>
    <p>This website provides general information about Ghoman IT Solutions and its services. Website content is provided for informational purposes and may be changed, updated, or removed without notice. It is not a binding offer to provide services.</p>

    <h2>Separate service agreements</h2>
    <p>Any services we provide are subject to a separate written agreement between you and Ghoman IT Solutions. If a separate agreement conflicts with these website terms, the separate agreement governs the services it covers.</p>

    <h2>Acceptable use</h2>
    <p>You agree not to misuse this website, interfere with its operation or security, attempt unauthorized access, or use it in a way that violates applicable law or infringes another person's rights.</p>

    <h2>Intellectual property</h2>
    <p>Unless otherwise stated, website text, graphics, branding, and other materials are owned by or used with permission by Ghoman IT Solutions. You may view and use the website for personal or internal business reference. You may not reproduce, modify, distribute, or commercially exploit website materials without prior written permission, except where applicable law permits.</p>

    <h2>Third-party links and services</h2>
    <p>This website may link to or embed third-party websites and services. These are provided for convenience; we do not control or endorse third-party content and are not responsible for their availability, terms, or privacy practices. Your use of third-party services is subject to their own terms.</p>

    <h2>Disclaimer</h2>
    <p>This website and its content are provided on an "as is" and "as available" basis. To the extent permitted by law, Ghoman IT Solutions makes no warranties that the website will always be available, error-free, or suitable for a particular purpose. Nothing in these terms excludes a right or remedy that cannot legally be excluded.</p>

    <h2>Limitation of liability</h2>
    <p>To the extent permitted by applicable law, Ghoman IT Solutions is not liable for indirect, incidental, special, or consequential loss arising from your use of, or inability to use, this website. These terms do not limit liability where such limitation is prohibited by law.</p>

    <h2>Governing law</h2>
    <p>These terms are governed by the laws of Alberta and the applicable laws of Canada. Courts located in Alberta will have jurisdiction, subject to any mandatory legal requirements that apply to you.</p>

    <h2>Changes and contact</h2>
    <p>We may revise these terms by posting an updated version on this page. Continued use of the website after changes are posted means you accept the revised terms. For questions, contact <a href="mailto:hello@ghoman.ca">hello@ghoman.ca</a>.</p>
  </article>
</main>
<?= $this->endSection() ?>
