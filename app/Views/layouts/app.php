<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ghoman — IT Solutions & Business Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/styles.ribbon.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        .services-cards-wrap {
            background-image: url('<?= base_url('services_ai_bg.jpg') ?>');
        }

        footer.footer {
            position: relative;
            background-image: linear-gradient(135deg, rgb(0 0 0 / 52%), rgb(0 0 0 / 73%)), url('<?= base_url('hero-bg.jpeg') ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* ensures background covers without affecting layout; used if needed */
        footer.footer .footer-bg {
            display: none;
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

        .services-cards-wrap>* {
            position: relative;
            z-index: 1;
        }

        .hero {
            min-height: 100vh;
            background: url('<?= base_url('hero-bg.jpeg') ?>');
            background-size: cover;
            background-position: center top;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 0 5% 15vh;
            top: 33px;
        }

        .d-hide {
            display: none;
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

            .wcu-icon {
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
    <?= $this->renderSection('css') ?>
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
                <img src="<?= base_url('logow.png') ?>" class="imgw" width="70" alt="Ghoman IT Solutions Logo">
                <img src="<?= base_url('logob.png') ?>" class="imgb" width="70" alt="Ghoman IT Solutions Logo">
            </div>
            <span class="logo-text">Ghoman <strong>IT</strong> Solutions</span>
        </a>
        <div class="nav-center" aria-label="Primary navigation">
            <a href="#home" class="nav-link">Home</a>
            <a href="#services" class="nav-link">Services</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#why-choose-us" class="nav-link">Why Choose Us</a>
            <a href="#testimonials" class="nav-link">Testimonials</a>
            <a href="#technologies" class="nav-link">Technologies</a>
            <a href="#clients" class="nav-link">Clients</a>
            <a href="<?= base_url('/contact') ?>" class="nav-link">Contact</a>

        </div>

        <div class="hamburger" id="hamburger">
            <span></span><span></span><span></span>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>


    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-bg" aria-hidden="true"></div>
        <div class="footer-grid">

            <div>
                <a href="<?= base_url('/') ?>" class="foot-logo">
                    <!-- <div class="logo-icon">GT</div> -->
                    <div class="logo-icon1"><img src="<?= base_url('logow.png') ?>" width="70" alt="Ghoman IT Solutions Logo"></div>
                    <span class="foot-logo-text">Ghoman<strong>IT </strong>Solutions</span>
                </a>
                <p class="foot-desc">Empowering businesses with intelligent technology. From AI to cloud infrastructure, we build systems that move industries forward.</p>
            </div>
            <div class="foot-col">
                <h3>Services</h3>
                <ul>
                    <li><a href="<?= base_url('/') ?>">AI & ML</a></li>
                    <li><a href="<?= base_url('/') ?>">Cloud Infra</a></li>
                    <li><a href="<?= base_url('/') ?>">Cybersecurity</a></li>
                    <li><a href="<?= base_url('/') ?>">Analytics</a></li>
                    <li><a href="<?= base_url('/') ?>">Web Hosting</a></li>
                </ul>
            </div>
            <div class="foot-col">
                <h3>Company</h3>
                <ul>
                    <li><a href="<?= base_url('/') ?>">About Us</a></li>
                    <li><a href="<?= base_url('/') ?>">Case Studies</a></li>
                    <li><a href="<?= base_url('/') ?>">Careers</a></li>
                    <li><a href="<?= base_url('/') ?>">Blog</a></li>
                    <li><a href="<?= base_url('/') ?>">Partners</a></li>
                </ul>
            </div>
            <div class="foot-col">
                <h3>Contact</h3>
                <ul>
                    <li><a href="<?= base_url('/') ?>">hello@ghoman.ca</a></li>
                    <li><a href="<?= base_url('/') ?>">+1 (587) 736-2288</a></li>
                    <li><a href="<?= base_url('/') ?>">2836 36 Ave NW, Edmonton, AB T6T 0H7</a></li>
                    <li><a href="https://attendopay.com/">Support Portal - Attendopay</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2026 Ghoman IT. All rights reserved.</span>
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
    <?= $this->renderSection('scripts') ?>
</body>

</html>