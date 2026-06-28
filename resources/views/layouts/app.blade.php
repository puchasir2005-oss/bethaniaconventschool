<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bethania Convent School – Kot-Ise-Khan, Punjab</title>
    <meta name="description"
        content="Bethania Convent School in Kot-Ise-Khan, Moga, Punjab – A premier institution run by Sisters of St. Martha, dedicated to academic excellence and holistic development. Lighted for Life.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@@0,300;0,400;0,600;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/school.css">
</head>

<body class="@stack('body-class')">

    <!-- ULTRA MODERN PRELOADER -->
    <div class="preloader-modern" id="preloader">
        <div class="preloader-modern-inner">
            <div class="preloader-logo-reveal">
                <img src="/images/school_logo.png" alt="Bethania Convent School Logo">
            </div>
            <div class="preloader-text-reveal">
                <span>B</span><span>E</span><span>T</span><span>H</span><span>A</span><span>N</span><span>I</span><span>A</span>
            </div>
            <div class="preloader-modern-line"></div>
        </div>
    </div>

    <!-- SCROLL PROGRESS BAR -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- SCROLL TO TOP -->
    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
        <svg class="scroll-top-ring" viewBox="0 0 50 50">
            <circle cx="25" cy="25" r="22" fill="none" stroke="rgba(211,47,47,0.15)" stroke-width="2.5" />
            <circle id="scrollRing" cx="25" cy="25" r="22" fill="none" stroke="var(--gold)" stroke-width="2.5"
                stroke-dasharray="138.23" stroke-dashoffset="138.23" stroke-linecap="round"
                transform="rotate(-90 25 25)" />
        </svg>
        <div class="scroll-top-arrow">&#8593;</div>
    </button>

    <!-- NAVIGATION -->
    <nav class="navbar" id="navbar">
        <div class="navbar-inner">
            <a href="/" class="navbar-logo" style="text-decoration: none;">
                <img src="/images/school_logo.png" alt="Bethania Convent School">
                <div class="school-name-container">
                    <span class="school-name">BETHANIA CONVENT SCHOOL</span>
                    <span class="school-subtitle">KOT ISE KHAN PUNJAB</span>
                </div>
            </a>

            <div class="navbar-actions">
                <a href="/about" class="nav-action-link">TOUR BETHANIA</a>
                <a href="#contact" class="nav-action-btn nav-action-enquire">ENQUIRE</a>
                <button class="nav-action-btn nav-action-menu" id="menuToggle" aria-label="Menu">
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round">
                        <line x1="0" y1="1" x2="16" y2="1" />
                        <line x1="0" y1="6" x2="16" y2="6" />
                        <line x1="0" y1="11" x2="16" y2="11" />
                    </svg>
                    <span>MENU</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- FULL-SCREEN MENU OVERLAY -->
    <div class="menu-overlay" id="menuOverlay">
        <div class="menu-overlay-left">
            <div>
                <div class="menu-overlay-label">Where to?</div>
                <nav class="menu-overlay-nav">
                    <a href="/" onclick="closeMenuOverlay()">Home</a>
                    <a href="/about" onclick="closeMenuOverlay()">About</a>
                    <a href="/vision" onclick="closeMenuOverlay()">Vision &amp; Mission</a>
                    <a href="/programs" onclick="closeMenuOverlay()">Programs</a>
                    <a href="/gallery" onclick="closeMenuOverlay()">Gallery</a>
                    <a href="/#campus" onclick="closeMenuOverlay()">Campus</a>
                    <a href="/#sports" onclick="closeMenuOverlay()">Sports</a>
                    <a href="/admission" onclick="closeMenuOverlay()">Admissions</a>
                </nav>
            </div>
            <div class="menu-overlay-socials">
                <a href="https://www.instagram.com/bethaniaconventschool" target="_blank" aria-label="Instagram">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                    </svg>
                </a>
                <a href="#" aria-label="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </a>
                <a href="#" aria-label="YouTube">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path
                            d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z" />
                        <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="menu-overlay-right">
            <div>
                <div class="menu-overlay-right-label">Academics</div>
                <div class="menu-overlay-sublinks">
                    <a href="#" onclick="closeMenuOverlay()">Primary School</a>
                    <a href="#" onclick="closeMenuOverlay()">Middle School</a>
                    <a href="#" onclick="closeMenuOverlay()">Senior Secondary</a>
                    <a href="#" onclick="closeMenuOverlay()">Language Lab</a>
                    <a href="#" onclick="closeMenuOverlay()">AI Teach Lab</a>
                    <a href="#" onclick="closeMenuOverlay()">Library</a>
                </div>
            </div>
            <div class="menu-overlay-quicklinks">
                <div class="menu-overlay-quicklinks-title">Quick Links</div>
                <a href="#contact" onclick="closeMenuOverlay()">Contact Us</a>
                <a href="/admission" onclick="closeMenuOverlay()">Admissions</a>
                <a href="https://www.instagram.com/bethaniaconventschool" target="_blank">Instagram</a>
            </div>
            <div class="menu-overlay-footer">
                Bethania Convent School &bull; Kot-Ise-Khan, Moga, Punjab &bull; bethaniaconventschool&#64;gmail.com
            </div>
        </div>
    </div>


    @yield('content')

    <!-- FOOTER -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="/images/school_logo.png" alt="Bethania Convent School">
                        <div class="footer-logo-text">Bethania Convent School</div>
                    </div>
                    <p class="footer-tagline">
                        A premier institution run by the Sisters of St. Martha (SMC), dedicated to nurturing young minds
                        through academic excellence, spiritual values, and holistic development in the heart of Punjab's
                        Malwa region.
                    </p>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/bethaniaconventschool" target="_blank"
                            aria-label="Instagram">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path
                                    d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z" />
                                <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="footer-col-title">Quick Links</div>
                    <ul class="footer-links">
                        <li><a href="/about">About the School</a></li>
                        <li><a href="/vision">Vision &amp; Mission</a></li>
                        <li><a href="/programs">Our Programs</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/#campus">Campus Life</a></li>
                        <li><a href="/#sports">Sports</a></li>
                        <li><a href="#contact">Admissions</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-col-title">Academics</div>
                    <ul class="footer-links">
                        <li><a href="#">Primary School</a></li>
                        <li><a href="#">Middle School</a></li>
                        <li><a href="#">Senior Secondary</a></li>
                        <li><a href="#">Language Lab</a></li>
                        <li><a href="#">AI Teach Lab</a></li>
                        <li><a href="#">Library</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-col-title">Contact Us</div>
                    <div class="footer-contact-item">
                        <span class="footer-contact-icon">&#128205;</span>
                        <span class="footer-contact-text">Bethania Convent School,<br>Kot-Ise-Khan, Moga,<br>Punjab,
                            India</span>
                    </div>
                    <div class="footer-contact-item">
                        <span class="footer-contact-icon">&#128222;</span>
                        <span class="footer-contact-text">+91 12345 67890<br>(Update with actual number)</span>
                    </div>
                    <div class="footer-contact-item">
                        <span class="footer-contact-icon">&#9993;</span>
                        <span class="footer-contact-text">bethaniaconventschool&#64;gmail.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <span class="footer-contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block; vertical-align:middle; margin-top:-2px;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </span>
                        <span class="footer-contact-text">Follow us on Instagram<br>&#64;bethaniaconventschool</span>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="footer-copy">
                    &copy; 2026 Bethania Convent School, Kot-Ise-Khan. All rights reserved.<br>
                    Run by the Sisters of St. Martha (SMC), Pala, Kerala.
                </p>
                <div class="footer-motto">&ldquo;Lighted for Life&rdquo;</div>
                <a href="/admin/login" class="footer-admin-link">Admin Login</a>
            </div>
        </div>
    </footer>

    <script>
        // =============================================
        // 1. SMART NAVBAR — Hide on scroll down, show on scroll up
        // =============================================
        var navbar = document.getElementById('navbar');
        var scrollTopBtn = document.getElementById('scrollTop');
        var scrollProgress = document.getElementById('scrollProgress');
        var scrollRing = document.getElementById('scrollRing');
        var lastScrollY = 0;
        var ticking = false;

        function onScroll() {
            var currentScroll = window.scrollY;
            var docHeight = document.documentElement.scrollHeight - window.innerHeight;
            var scrollPercent = docHeight > 0 ? currentScroll / docHeight : 0;

            // Navbar scrolled class
            if (currentScroll > 60) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Hide/show navbar based on scroll direction
            if (currentScroll > 300 && currentScroll > lastScrollY) {
                navbar.classList.add('nav-hidden');
            } else {
                navbar.classList.remove('nav-hidden');
            }

            // Scroll-to-top button visibility
            if (scrollTopBtn) {
                if (currentScroll > 400) {
                    scrollTopBtn.classList.add('visible');
                } else {
                    scrollTopBtn.classList.remove('visible');
                }
            }

            // 9. Scroll progress bar
            if (scrollProgress) {
                scrollProgress.style.width = (scrollPercent * 100) + '%';
            }

            // 10. Scroll-to-top ring progress
            if (scrollRing) {
                var circumference = 138.23;
                scrollRing.setAttribute('stroke-dashoffset', circumference - (scrollPercent * circumference));
            }

            // 3. Hero parallax
            var heroBg = document.querySelector('.hero-bg');
            if (heroBg && currentScroll < window.innerHeight) {
                heroBg.style.transform = 'translateY(' + (currentScroll * 0.3) + 'px)';
            }

            // 5. Image parallax for [data-parallax] elements
            document.querySelectorAll('[data-parallax]').forEach(function (container) {
                var rect = container.getBoundingClientRect();
                var winH = window.innerHeight;
                if (rect.top < winH && rect.bottom > 0) {
                    var progress = (winH - rect.top) / (winH + rect.height);
                    var offset = (progress - 0.5) * 40;
                    var img = container.querySelector('img');
                    if (img) img.style.transform = 'translateY(' + offset + 'px) scale(1.05)';
                }
            });

            lastScrollY = currentScroll;
            ticking = false;
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                requestAnimationFrame(onScroll);
                ticking = true;
            }
        });

        // Scroll to top click
        if (scrollTopBtn) {
            scrollTopBtn.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // =============================================
        // 2. FULL-SCREEN MENU OVERLAY
        // =============================================
        var menuToggle = document.getElementById('menuToggle');
        var menuOverlay = document.getElementById('menuOverlay');
        var menuToggleText = menuToggle ? menuToggle.querySelector('span') : null;

        function closeMenuOverlay() {
            if (menuOverlay) menuOverlay.classList.remove('open');
            document.body.classList.remove('menu-overlay-open');
            document.body.style.overflow = '';
            if (menuToggleText) menuToggleText.textContent = 'MENU';
        }

        if (menuToggle) {
            menuToggle.addEventListener('click', function () {
                var isOpen = menuOverlay.classList.contains('open');
                if (isOpen) {
                    closeMenuOverlay();
                } else {
                    menuOverlay.classList.add('open');
                    document.body.classList.add('menu-overlay-open');
                    document.body.style.overflow = 'hidden';
                    if (menuToggleText) menuToggleText.textContent = 'CLOSE';
                }
            });
        }

        // Close on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeMenuOverlay();
        });

        // =============================================
        // 4. SPLIT-TEXT SCROLL REVEAL
        // =============================================
        function splitTextIntoLines(el) {
            var html = el.innerHTML;
            // Split on <br> tags
            var parts = html.split(/<br\s*\/?>/gi);
            if (parts.length <= 1) {
                // Wrap entire content as one line
                el.innerHTML = '<span class="split-line-wrap"><span class="split-line">' + html + '</span></span>';
            } else {
                el.innerHTML = parts.map(function (part) {
                    return '<span class="split-line-wrap"><span class="split-line">' + part.trim() + '</span></span>';
                }).join('');
            }
            el.classList.add('split-parent');
        }

        // Apply split-text to titles
        document.querySelectorAll('.section-title, .motto-text, .cta-title').forEach(splitTextIntoLines);

        // Split-text reveal observer
        var splitObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    splitObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        document.querySelectorAll('.split-parent').forEach(function (el) { splitObserver.observe(el); });

        // =============================================
        // 8. STAGGER REVEAL + FADE-UP OBSERVER
        // =============================================
        // Assign stagger indices
        document.querySelectorAll('.gallery-grid, .faculty-regions, .features-grid, .sports-list, .instagram-grid, .hero-stats-inner').forEach(function (container) {
            container.classList.add('stagger-children', 'fade-up');
            Array.from(container.children).forEach(function (child, i) {
                child.style.setProperty('--stagger-index', i);
            });
        });

        var observerOptions = { threshold: 0.12, rootMargin: '0px 0px -50px 0px' };
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        document.querySelectorAll('.fade-up').forEach(function (el) { observer.observe(el); });

        // =============================================
        // 6. CARD TILT ON CURSOR HOVER
        // =============================================
        document.querySelectorAll('.gallery-item, .highlight-card, .feature-card, .vm-card, .faculty-region, .insta-item').forEach(function (card) {
            card.classList.add('tilt-card');
            card.addEventListener('mousemove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = (e.clientX - rect.left) / rect.width;
                var y = (e.clientY - rect.top) / rect.height;
                var tiltX = (0.5 - y) * 8;
                var tiltY = (x - 0.5) * 8;
                card.style.setProperty('--tilt-x', tiltX + 'deg');
                card.style.setProperty('--tilt-y', tiltY + 'deg');
            });
            card.addEventListener('mouseleave', function () {
                card.style.setProperty('--tilt-x', '0deg');
                card.style.setProperty('--tilt-y', '0deg');
            });
        });

        // =============================================
        // SMOOTH SCROLL FOR ANCHORS ON SAME PAGE
        // =============================================
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var href = this.getAttribute('href');
                if (href === '#') return;
                var target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    closeMenuOverlay();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // =============================================
        // ULTRA MODERN PRELOADER
        // =============================================
        window.addEventListener('load', function () {
            setTimeout(function () {
                var preloader = document.getElementById('preloader');
                if (preloader) {
                    preloader.classList.add('loaded'); // Triggers slide up
                    setTimeout(function () { preloader.remove(); }, 800);
                }
            }, 1800); // 1.8 seconds wait to show the elegant animation
        });

        // =============================================
        // 11. HERO 3D PARALLAX ON MOUSE MOVE
        // =============================================
        var heroSection = document.querySelector('.hero');
        var heroBgImg = document.querySelector('.hero-bg img');
        if (heroSection && heroBgImg) {
            heroSection.addEventListener('mousemove', function (e) {
                var rect = heroSection.getBoundingClientRect();
                var x = (e.clientX - rect.left) / rect.width;
                var y = (e.clientY - rect.top) / rect.height;
                var moveX = (x - 0.5) * -30; // Max move 15px
                var moveY = (y - 0.5) * -30;
                heroBgImg.style.transform = 'translate(' + moveX + 'px, ' + moveY + 'px) scale(1.05)';
            });
            heroSection.addEventListener('mouseleave', function () {
                heroBgImg.style.transform = 'translate(0px, 0px) scale(1.05)';
                heroBgImg.style.transition = 'transform 0.5s ease-out';
            });
            heroSection.addEventListener('mouseenter', function () {
                heroBgImg.style.transition = 'transform 0.1s ease-out';
            });
            // Initial state
            heroBgImg.style.transform = 'translate(0px, 0px) scale(1.05)';
        }

        // =============================================
        // EXAM NOTIFICATION TICKER
        // =============================================
        (function() {
            fetch('/api/exam-notifications')
                .then(function(res) { return res.json(); })
                .then(function(notifications) {
                    if (notifications.length === 0) return;

                    var ticker = document.getElementById('notificationTicker');
                    var track = document.getElementById('tickerTrack');
                    if (!ticker || !track) return;

                    var html = '';
                    notifications.forEach(function(n) {
                        html += '<span class="ticker-item">' +
                            '<span class="ticker-icon">📋</span>' +
                            '<span class="ticker-text">' + n.title + ' — Exam starts: ' + n.exam_start_date + '</span>' +
                            (n.timetable_url ? '<span class="ticker-pdf-badge">📄 PDF Available</span>' : '') +
                            '</span>';
                    });

                    // Duplicate for seamless looping
                    track.innerHTML = html + html;
                    ticker.classList.add('ticker-visible');
                })
                .catch(function() {});
        })();
    </script>

    <!-- NOTIFICATION TICKER BAR -->
    <a href="/notifications" class="notification-ticker" id="notificationTicker" style="text-decoration: none;">
        <div class="ticker-label">
            <span class="ticker-label-icon">🔔</span>
            <span>NOTICE</span>
        </div>
        <div class="ticker-wrapper">
            <div class="ticker-track" id="tickerTrack"></div>
        </div>
    </a>
</body>

</html>
