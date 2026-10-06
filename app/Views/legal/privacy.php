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
    <h1>Privacy Policy</h1>
    <p class="legal-updated">Last updated: October 5, 2026</p>

    <p>Ghoman IT Solutions ("we", "us", or "our") respects your privacy. This policy describes how information may be collected and used when you visit this website or contact us through it.</p>

    <h2>Information you provide</h2>
    <p>When you submit the contact form, we collect the information you enter: your name, email address, message, and, if provided, your phone number and the service you are interested in. We use this information to respond to your inquiry and discuss the services you requested.</p>

    <h2>Technical information</h2>
    <p>Like most websites, the server and application may process limited technical information needed to deliver pages, protect the site, and maintain reliable operation. This may include request details such as your IP address, browser information, and timestamps in server or security logs. The site may also use session-related browser storage for essential functions such as form security.</p>

    <h2>Third-party services</h2>
    <p>The contact page embeds a Google Map, and this website links to third-party services and social networks. When you load or follow those features, the relevant third party may collect information under its own privacy policy. We do not control third-party services. Please review their policies for details about their practices.</p>

    <h2>How we share information</h2>
    <p>We may make information available to service providers who help us operate this website, communicate with you, or protect our systems, and where disclosure is required by law or necessary to protect legal rights and safety. We do not use information submitted through the contact form for unrelated purposes.</p>

    <h2>Retention and security</h2>
    <p>We retain inquiry information for as long as reasonably needed to respond, maintain business records, resolve issues, and meet legal obligations. We use reasonable safeguards intended to protect information, but no website or transmission method can be guaranteed to be completely secure.</p>

    <h2>Your choices and privacy questions</h2>
    <p>You may contact us to ask about, correct, or request deletion of personal information you submitted, subject to applicable legal and operational requirements. To make a request or ask a privacy question, email <a href="mailto:hello@ghoman.ca">hello@ghoman.ca</a>.</p>

    <h2>Changes to this policy</h2>
    <p>We may update this policy from time to time. The updated version will be posted on this page with a revised "Last updated" date.</p>
  </article>
</main>
<?= $this->endSection() ?>
