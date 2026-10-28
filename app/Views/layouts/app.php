<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php $seo ??= \Config\Seo::for('home'); ?>
    <?= $this->include('partials/seo') ?>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/styles.ribbon.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/chatbot.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
            background: rgba(255,255,255,0.2); /* or any overlay */
            backdrop-filter: blur(8px);
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
        .offices-phone{
            color: rgba(255, 255, 255, .85);
            text-decoration: none;
        }

        .offices-phone:hover{
            color: #00e5cc;
        }
    </style>
    <?= $this->renderSection('css') ?>
</head>

<body<?= !empty($body_class) ? ' class="' . esc($body_class) . '"' : '' ?>>


    <header class="site-header">
    <div class="top-ribbon" role="region" aria-label="Business announcement">
        <marquee class="top-ribbon-marquee" direction="left" scrollamount="5">Unlock the Future with power of AI 🚀 Save 50% on All Our Services | Transform Your Business Today.</marquee>
    </div>
    <!-- LOGO BAR AND MENU -->
    <nav id="main-nav">
        <div class="nav-brand-row">
            <a href="<?= route_to('home') ?>" class="logo-wrap">
                <div class="logo-icon1">
                    <img src="<?= base_url('logow1.png') ?>" class="imgw" width="160" alt="Ghoman IT Solutions Logo">
                    <img src="<?= base_url('logob4.png') ?>" class="imgb" width="160" alt="Ghoman IT Solutions Logo">
                </div>
            </a>
            <div class="offices-bar">
                <div class="offices-bar-inner">
                    <div class="offices-bar-left">
                        <span class="offices-bar-item">
                            <span class="offices-bar-label">CAN</span> : <a href="tel:+15877362288" class="offices-phone"> +1 (587) 736-2288 </a>
                        </span>
                        <span class="offices-bar-sep">|</span>
                        <span class="offices-bar-item">
                            <span class="offices-bar-label">IND</span> : <a href="tel:+918360422303" class="offices-phone">+91 83604 22303</a>
                        </span>
                        <span class="offices-bar-sep">|</span>
                        <span class="offices-bar-item">
                            <i class="fas fa-paper-plane" style="color:#06b6d4;margin-right:5px;"></i>
                            <a href="mailto:hello@ghoman.ca" class="offices-email">hello@ghoman.ca</a>
                        </span>
                    </div>
                    <div class="offices-bar-right">
                        <a href="https://www.facebook.com/share/19AgdebvQK/?mibextid=wwXIfr" target="_blank" class="offices-social" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/ghomanitsolutions?stkn=ZndjZThidDY5d2tq&utm_source=qr" target="_blank" class="offices-social" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://ca.linkedin.com/in/ghoman-it-solutions-305502440" target="_blank" rel="noopener noreferrer" class="offices-social" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="hamburger" id="hamburger" aria-label="Open menu">
                <span></span><span></span><span></span>
            </div>
        </div>
        <div class="nav-center" aria-label="Primary navigation">
            <a href="<?= route_to('home') ?>" class="nav-link"> <i class="fa-solid fa-house me-2"></i> Home</a>
            <a href="<?= route_to('services') ?>" class="nav-link"> <i class="fa-solid fa-cogs me-2"></i> Services</a>
            <a href="<?= route_to('about') ?>" class="nav-link"> <i class="fa-solid fa-info-circle me-2"></i> About</a>
            <a href="<?= route_to('home') ?>#why-choose-us" class="nav-link"> <i class="fa-solid fa-check-circle me-2"></i> Why Choose Us</a>
            <a href="<?= route_to('home') ?>#testimonials" class="nav-link"> <i class="fa-solid fa-comments me-2"></i> Testimonials</a>
            <a href="<?= route_to('home') ?>#technologies" class="nav-link"> <i class="fa-solid fa-laptop-code me-2"></i> Technologies</a>
            <a href="<?= route_to('home') ?>#clients" class="nav-link"> <i class="fa-solid fa-users me-2"></i> Clients</a>
            <a href="<?= route_to('contact') ?>" class="nav-link"> <i class="fa-solid fa-phone-alt me-2"></i> Contact</a>

        </div>
    </nav>
    </header>

    <div class="drawer-overlay" id="drawerOverlay"></div>
    <aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile navigation">
        <button class="drawer-close" id="drawerClose" aria-label="Close menu">×</button>
        <a href="<?= route_to('home') ?>" class="drawer-logo">
            <div class="logo-icon1"><img src="<?= base_url('logow1.png') ?>" width="160" alt="Ghoman IT Logo"></div>
        </a>
        <ul class="drawer-links">
            <li><a class="drawer-link" href="<?= route_to('home') ?>#home">Home</a></li>
            <li><a class="drawer-link" href="<?= route_to('services') ?>">Services</a></li>
            <li><a class="drawer-link" href="<?= route_to('about') ?>">About</a></li>
            <li><a class="drawer-link" href="<?= route_to('home') ?>#why-choose-us">Why Choose Us</a></li>
            <li><a class="drawer-link" href="<?= route_to('home') ?>#testimonials">Testimonials</a></li>
            <li><a class="drawer-link" href="<?= route_to('home') ?>#technologies">Technologies</a></li>
            <li><a class="drawer-link" href="<?= route_to('home') ?>#clients">Clients</a></li>
            <li><a class="drawer-link" href="<?= route_to('contact') ?>">Contact</a></li>
        </ul>
    </aside>

    <?= $this->renderSection('content') ?>


    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-bg" aria-hidden="true"></div>
        <div class="footer-grid">

            <div>
                <a href="<?= route_to('home') ?>" class="foot-logo">
                    <!-- <div class="logo-icon">GT</div> -->
                    <div class="logo-icon1"><img src="<?= base_url('logow1.png') ?>" width="160" alt="Ghoman IT Solutions Logo"></div>
                    
                </a>
                <p class="foot-desc">Empowering businesses with intelligent technology. From AI to cloud infrastructure, we build systems that move industries forward.</p>
            </div>
            <div class="foot-col">
                <h3>Services</h3>
                <ul>
                    <li><a href="<?= route_to('services') ?>#ai-ml">AI &amp; ML</a></li>
                    <li><a href="<?= route_to('services') ?>#cloud-infra">Cloud Infra</a></li>
                    <li><a href="<?= route_to('services') ?>#cybersecurity">Cybersecurity</a></li>
                    <li><a href="<?= route_to('services') ?>#analytics">Analytics</a></li>
                    <li><a href="<?= route_to('services') ?>#web-hosting">Web Hosting</a></li>
                    
                </ul>
            </div>
            <div class="foot-col">
                <h3>Company</h3>
                <ul>
                    <li><a href="<?= route_to('about') ?>">About Us</a></li>                    
                    <li><a href="<?= route_to('careers') ?>">Careers</a></li>
                    <li><a href="<?= route_to('services') ?>#software-development">Software Development</a></li>
                    <li><a href="<?= route_to('services') ?>#app-development">App Development</a></li>
                    <li><a href="<?= route_to('services') ?>#seo-digital-marketing">SEO &amp; Digital Marketing</a></li>
                    
                </ul>
            </div>
            <div class="foot-col">
                <h3>Contact</h3>
                <ul>
                    <li><a href="mailto:hello@ghoman.ca">hello@ghoman.ca</a></li>
                    <li><a href="tel:+15877362288">+1 (587) 736-2288</a></li>
                    <li><a href="<?= base_url('/') ?>">2836 36 Ave NW, Edmonton, AB T6T 0H7</a></li>
                    <li><a href="https://attendopay.com/">Support Portal - Attendopay</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <?= date('Y') ?> Ghoman IT. All rights reserved.</span>
            <div class="social-row">
                <a href="https://www.facebook.com/share/19AgdebvQK/?mibextid=wwXIfr" target="_blank" class="offices-social" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/ghomanitsolutions?stkn=ZndjZThidDY5d2tq&utm_source=qr" target="_blank" class="offices-social" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://ca.linkedin.com/in/ghoman-it-solutions-305502440" target="_blank" rel="noopener noreferrer" class="offices-social" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                
                <!-- <a href="https://www.youtube.com/@ghomanit" class="offices-social" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a> -->
            </div>
            <div style="display:flex;gap:1.5rem">
                <a href="<?= route_to('privacy') ?>" style="color:rgba(255,255,255,0.35);text-decoration:none;font-size:0.8rem">Privacy Policy</a>
                <a href="<?= route_to('terms') ?>" style="color:rgba(255,255,255,0.35);text-decoration:none;font-size:0.8rem">Terms & Conditions</a>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/15877362288" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>

    <div class="lella-chat" data-endpoint="<?= esc(parse_url(site_url('chat/respond'), PHP_URL_PATH) ?: '/chat/respond', 'attr') ?>">
        <section class="lella-panel" id="lellaPanel" role="dialog" aria-modal="true" aria-labelledby="lellaTitle" aria-hidden="true" hidden>
            <header class="lella-header">
                <img class="lella-avatar lella-header-avatar" src="<?= base_url('img_lella_chat.png') ?>" alt="">
                <div class="lella-header-copy">
                    <h2 id="lellaTitle"><span class="lella-online-dot" aria-hidden="true"></span>Leela support</h2>
                    <p>Ghoman IT Solutions · Online</p>
                </div>
                <button class="lella-close" type="button" aria-label="Close chat">×</button>
            </header>
            <div class="lella-welcome">
                <img class="lella-avatar lella-welcome-avatar" src="<?= base_url('img_lella_chat.png') ?>" alt="">
                <h3>Hi, I'm Leela<br>Ghoman IT Solutions' AI assistant</h3>
                <p>How can I help your business today?</p>
                <span>Ask about our services or choose a suggestion to get started.</span>
            </div>
            <div class="lella-messages" aria-live="polite" aria-relevant="additions text"></div>
            <div class="lella-suggestions" aria-label="Suggested questions">
                <button type="button" data-message="What services do you offer?">Our services</button>
                <button type="button" data-message="Tell me about your AI services">AI solutions</button>
                <button type="button" data-message="How can I contact your team?">Contact</button>
            </div>
            <form class="lella-form">
                <label class="lella-sr-only" for="lellaInput">Type your question</label>
                <input id="lellaInput" name="message" type="text" maxlength="1000" placeholder="Type your question..." autocomplete="off" required>
                <button class="lella-send" type="submit" aria-label="Send message">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 19V5m-6 6 6-6 6 6"/></svg>
                </button>
            </form>
        </section>
        <button class="lella-launcher" type="button" aria-label="Open Leela chat" aria-expanded="false" aria-controls="lellaPanel">
            <img src="<?= base_url('img_lella_chat.png') ?>" alt="">
            <span class="lella-launcher-dot" aria-hidden="true"></span>
        </button>
    </div>

    <button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

    <script src="<?= base_url('js/main.js') ?>"></script>
    <script src="<?= base_url('js/chatbot.js') ?>" defer></script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>