<?= $this->extend('layouts/app') ?>

<?= $this->section('css') ?>
<style>
  /* ===== Contact Page Specific Styles ===== */
  .contact-page {
    padding: 140px 5% 80px;
    background: var(--light-bg);
    min-height: 100vh;
  }

  .contact-header {
    text-align: center;
    margin-bottom: 3.5rem;
  }

  .contact-header h1 {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 0.6rem;
    letter-spacing: -0.5px;
  }

  .contact-header h1 span {
    color: var(--teal);
  }

  .contact-header p {
    font-size: 1rem;
    color: var(--text-muted);
    max-width: 520px;
    margin: 0 auto;
    line-height: 1.7;
  }

  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 3.5rem;
    max-width: 1100px;
    margin: 0 auto;
    align-items: start;
  }

  /* Contact Info Side */
  .contact-info {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
  }

  .contact-info-card {
    background: var(--white);
    border-radius: 16px;
    padding: 1.8rem 2rem;
    border: 1px solid var(--border-light);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .contact-info-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
  }

  .contact-info-card .info-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(0, 191, 165, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    color: var(--teal);
    font-size: 1.2rem;
  }

  .contact-info-card h3 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.4rem;
  }

  .contact-info-card p,
  .contact-info-card a {
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.6;
    text-decoration: none;
    display: block;
    transition: color 0.2s;
  }

  .contact-info-card a:hover {
    color: var(--teal);
  }

  /* Form Side */
  .contact-form-wrap {
    background: var(--white);
    border-radius: 20px;
    padding: 2.5rem;
    border: 1px solid var(--border-light);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
  }

  .contact-form-wrap h2 {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.4rem;
  }

  .contact-form-wrap p.form-sub {
    font-size: 0.88rem;
    color: var(--text-muted);
    margin-bottom: 1.8rem;
    line-height: 1.6;
  }

  .form-group {
    margin-bottom: 1.4rem;
  }

  .form-group label {
    display: block;
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.4rem;
  }

  .form-group label .required {
    color: #ef4444;
  }

  .form-control {
    width: 100%;
    padding: 0.85rem 1.1rem;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    font-family: 'Inter', sans-serif;
    font-size: 0.92rem;
    color: var(--text-dark);
    background: #f8fafc;
    transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
    outline: none;
  }

  .form-control:focus {
    border-color: var(--teal);
    box-shadow: 0 0 0 3px rgba(0, 191, 165, 0.12);
    background: var(--white);
  }

  .form-control::placeholder {
    color: #94a3b8;
  }

  select.form-control {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236b7a8d' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    padding-right: 2.5rem;
    cursor: pointer;
  }

  textarea.form-control {
    resize: vertical;
    min-height: 130px;
  }

  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  .btn-submit {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    padding: 0.95rem 2.5rem;
    background: var(--teal);
    color: var(--white);
    font-size: 0.95rem;
    font-weight: 700;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: background 0.25s, transform 0.25s, box-shadow 0.25s;
    box-shadow: 0 4px 20px rgba(0, 191, 165, 0.35);
    width: 100%;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
  }

  .btn-submit:hover {
    background: var(--teal-dark);
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(0, 191, 165, 0.45);
  }

  .btn-submit:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
  }

  .btn-submit i {
    font-size: 1rem;
  }

  /* Alert Messages */
  .alert {
    padding: 1rem 1.2rem;
    border-radius: 10px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.6rem;
  }

  .alert-success {
    background: #ecfdf5;
    color: #065f46;
    border: 1px solid #a7f3d0;
  }

  .alert-danger {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
  }

  .alert i {
    font-size: 1.1rem;
  }

  /* Validation Errors */
  .form-error {
    color: #ef4444;
    font-size: 0.78rem;
    font-weight: 500;
    margin-top: 0.3rem;
  }

  .form-control.is-invalid {
    border-color: #ef4444;
    background: #fef2f2;
  }

  .form-control.is-invalid:focus {
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.12);
  }

  /* Responsive */
  @media (max-width: 900px) {
    .contact-grid {
      grid-template-columns: 1fr;
      gap: 2rem;
    }

    .contact-page {
      padding: 110px 5% 60px;
    }

    .contact-form-wrap {
      padding: 1.8rem;
    }
  }

  @media (max-width: 600px) {
    .contact-page {
      padding: 100px 4% 50px;
    }

    .form-row {
      grid-template-columns: 1fr;
    }

    .contact-form-wrap {
      padding: 1.5rem;
    }

    .contact-info-card {
      padding: 1.4rem 1.5rem;
    }

    .btn-submit {
      padding: 0.85rem 2rem;
      font-size: 0.88rem;
    }
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="contact-page" id="contact-page">
  <div class="contact-header">
    <div class="eyebrow">Get In Touch</div>
    <h1>Let's <span>Talk</span> About Your Project</h1>
    <p>Have a question, a project idea, or just want to say hello? Fill out the form and we'll get back to you within 24 hours.</p>
  </div>

  <div class="contact-grid">
    <!-- Contact Info -->
    <div class="contact-info">
      <div class="contact-info-card">
        <div class="info-icon"><i class="fas fa-envelope"></i></div>
        <h3>Email Us</h3>
        <a href="mailto:hello@ghoman.ca">hello@ghoman.ca</a>
      </div>

      <div class="contact-info-card">
        <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
        <h3>Call Us</h3>
        <a href="tel:+15877362288">CAN: +1 (587) 736-2288</a>
        <a href="tel:+918360422303">IND: +91 83604 22303</a>
      </div>

      <div class="contact-info-card">
        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
        <h3>Visit Us</h3>
        <p>2836 36 Ave NW, Edmonton, AB T6T 0H7, Canada</p>
      </div>

      <div class="contact-info-card" style="display:none;">
        <div class="info-icon"><i class="fas fa-clock"></i></div>
        <h3>Working Hours</h3>
        <p>Mon – Fri: 9:00 AM – 6:00 PM (MST)</p>
        <p>Sat: 10:00 AM – 2:00 PM</p>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form-wrap">
      <h2>Send Us a Message</h2>
      <p class="form-sub">We'd love to hear from you. Drop us a message and we'll respond as soon as possible.</p>

      <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
          <i class="fas fa-check-circle"></i>
          <?= esc(session()->getFlashdata('success')) ?>
        </div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
          <i class="fas fa-exclamation-circle"></i>
          <?= esc(session()->getFlashdata('error')) ?>
        </div>
      <?php endif; ?>

      <?php $validationErrors = session()->getFlashdata('validation'); ?>
      <?php if ($validationErrors !== null && $validationErrors->getErrors()): ?>
        <div class="alert alert-danger">
          <i class="fas fa-exclamation-circle"></i>
          Please correct the errors below and try again.
        </div>
      <?php endif; ?>

      <form action="<?= base_url('contact/send') ?>" method="POST" id="contactForm">
        <?= csrf_field() ?>

        <div class="form-row">
          <div class="form-group">
            <label for="name">Full Name <span class="required">*</span></label>
            <input type="text" name="name" id="name" class="form-control <?= ($validationErrors !== null && $validationErrors->hasError('name')) ? 'is-invalid' : '' ?>" placeholder="John Doe" value="<?= old('name') ?>" required>
            <?php if ($validationErrors !== null && $validationErrors->hasError('name')): ?>
              <div class="form-error"><?= $validationErrors->getError('name') ?></div>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="email">Email Address <span class="required">*</span></label>
            <input type="email" name="email" id="email" class="form-control <?= ($validationErrors !== null && $validationErrors->hasError('email')) ? 'is-invalid' : '' ?>" placeholder="john@example.com" value="<?= old('email') ?>" required>
            <?php if ($validationErrors !== null && $validationErrors->hasError('email')): ?>
              <div class="form-error"><?= $validationErrors->getError('email') ?></div>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" id="phone" class="form-control <?= ($validationErrors !== null && $validationErrors->hasError('phone')) ? 'is-invalid' : '' ?>" placeholder="+1 (587) 736-2288" value="<?= old('phone') ?>">
            <?php if ($validationErrors !== null && $validationErrors->hasError('phone')): ?>
              <div class="form-error"><?= $validationErrors->getError('phone') ?></div>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="topic">Service Interested In</label>
            <?php $selectedTopic = old('topic'); ?>
            <select name="topic" id="topic" class="form-control <?= ($validationErrors !== null && $validationErrors->hasError('topic')) ? 'is-invalid' : '' ?>">
              <option value="">Select a service...</option>
              <option value="AI & Machine Learning" <?= ($selectedTopic === 'AI & Machine Learning') ? 'selected' : '' ?>>AI & Machine Learning</option>
              <option value="Cloud Infrastructure" <?= ($selectedTopic === 'Cloud Infrastructure') ? 'selected' : '' ?>>Cloud Infrastructure</option>
              <option value="Cybersecurity" <?= ($selectedTopic === 'Cybersecurity') ? 'selected' : '' ?>>Cybersecurity</option>
              <option value="Data Analytics" <?= ($selectedTopic === 'Data Analytics') ? 'selected' : '' ?>>Data Analytics</option>
              <option value="Web Hosting" <?= ($selectedTopic === 'Web Hosting') ? 'selected' : '' ?>>Web Hosting</option>
              <option value="Application Design" <?= ($selectedTopic === 'Application Design') ? 'selected' : '' ?>>Application Design</option>
              <option value="SEO Optimization" <?= ($selectedTopic === 'SEO Optimization') ? 'selected' : '' ?>>SEO Optimization</option>
              <option value="Other" <?= ($selectedTopic === 'Other') ? 'selected' : '' ?>>Other</option>
            </select>
            <?php if ($validationErrors !== null && $validationErrors->hasError('topic')): ?>
              <div class="form-error"><?= $validationErrors->getError('topic') ?></div>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-group">
          <label for="message">Message <span class="required">*</span></label>
          <textarea name="message" id="message" class="form-control <?= ($validationErrors !== null && $validationErrors->hasError('message')) ? 'is-invalid' : '' ?>" placeholder="Tell us about your project, requirements, timeline..." required><?= old('message') ?></textarea>
          <?php if ($validationErrors !== null && $validationErrors->hasError('message')): ?>
            <div class="form-error"><?= $validationErrors->getError('message') ?></div>
          <?php endif; ?>
        </div>

        <button type="submit" class="btn-submit">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
      </form>
    </div>
  </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  // Client-side validation enhancement
  document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !message) {
      e.preventDefault();
      alert('Please fill in all required fields (Name, Email, and Message).');
      return false;
    }
  });
</script>
<?= $this->endSection() ?>

