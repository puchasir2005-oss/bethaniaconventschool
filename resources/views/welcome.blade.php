@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<section class="hero" id="home">
    <div class="hero-bg">
        <img src="/images/hero-desk.png" alt="Bethania Convent School Campus at Dusk">
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">
            Where Every Child is<br>
            <em>Lighted for Life</em>
        </h1>
        <p class="hero-subtitle">
            Nestled in the heart of Punjab's Malwa region, Bethania Convent School nurtures young minds through academic excellence, spiritual values, and holistic development.
        </p>
        <div class="hero-actions">
            <a href="/about" class="btn btn-primary">Explore Our School</a>
            <a href="#contact" class="btn btn-outline">Apply for Admission</a>
        </div>
    </div>

    <div class="hero-stats">
        <div class="hero-stats-inner">
            <div class="stat-item">
                <div class="stat-number" id="counter-1">188+</div>
                <div class="stat-label">Community Posts</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4</div>
                <div class="stat-label">Faculty Regions</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">8+</div>
                <div class="stat-label">Sports Disciplines</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Holistic Development</div>
            </div>
        </div>
    </div>
</section>

<!-- MOTTO BANNER -->
<div class="motto-banner">
    <div class="container" style="position:relative;z-index:1;">
        <div class="motto-eyebrow fade-up">Our Sacred Motto</div>
        <div class="motto-text fade-up fade-up-delay-1">&ldquo;To Serve is <strong>Glory</strong>&rdquo;</div>
        <div class="motto-sub fade-up fade-up-delay-2">&mdash; St. Martha of Bethany</div>
    </div>
</div>

<!-- CAMPUS / GALLERY SECTION -->
<section class="campus-section" id="campus">
    <div class="container">
        <div class="campus-header">
            <div class="section-eyebrow fade-up">Our Campus</div>
            <h2 class="section-title fade-up fade-up-delay-1">
                An Inspiring Place of<br><em>Learning &amp; Growth</em>
            </h2>
            <p class="section-lead fade-up fade-up-delay-2">
                Moving away from the concrete monotony of urban spaces, our campus is thoughtfully designed with manicured lawns, vibrant flower beds, and modern academic blocks.
            </p>
        </div>

        <div class="gallery-grid fade-up">
            <div class="gallery-item gallery-item-1" data-parallax>
                <img src="/images/school_building.png" alt="Bethania Convent School Main Building">
                <div class="gallery-overlay"><span class="gallery-caption">Main Academic Block</span></div>
            </div>
            <div class="gallery-item gallery-item-2" data-parallax>
                <img src="/images/campus_hero.png" alt="Green School Campus">
                <div class="gallery-overlay"><span class="gallery-caption">Green Campus</span></div>
            </div>
            <div class="gallery-item gallery-item-3" data-parallax>
                <img src="/images/students_activities.png" alt="Students in Activities">
                <div class="gallery-overlay"><span class="gallery-caption">Student Activities</span></div>
            </div>
            <div class="gallery-item gallery-item-4" data-parallax>
                <img src="/images/classroom_modern.png" alt="Modern Smart Classroom">
                <div class="gallery-overlay"><span class="gallery-caption">Smart Classrooms</span></div>
            </div>
            <div class="gallery-item gallery-item-5" data-parallax>
                <img src="/images/event1.png" alt="School Events">
                <div class="gallery-overlay"><span class="gallery-caption">School Events</span></div>
            </div>
        </div>
    </div>
</section>

<!-- INSTAGRAM FEED SECTION -->
<section class="instagram-section">
    <div class="container">
        <div class="instagram-header">
            <div>
                <div class="section-eyebrow fade-up">Latest from Campus</div>
                <h2 class="section-title fade-up fade-up-delay-1" style="margin-bottom:0;">Life at <em>Bethania</em></h2>
            </div>
            <a href="https://www.instagram.com/bethaniaconventschool" target="_blank" rel="noopener" class="instagram-link fade-up">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                &#64;bethaniaconventschool
            </a>
        </div>

        <!-- DYNAMIC INSTAGRAM WIDGET CONTAINER -->
        <!-- 
            INSTRUCTIONS: 
            1. Go to lightwidget.com or elfsight.com 
            2. Connect your @bethaniaconventschool account
            3. Paste the provided embed script/iframe exactly below this line:
        -->
        <div class="instagram-dynamic-widget fade-up" style="min-height: 400px; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.02); border-radius: 12px; margin-top: 2rem; border: 2px dashed #ccc; text-align: center;">
            <p style="color: #666; font-family: var(--font-body); font-weight: 500;">
                📸 Paste your LightWidget or Elfsight script code here!
            </p>
        </div>
    </div>
</section>

<!-- FACULTY SECTION -->
<section class="faculty-section">
    <div class="container">
        <div class="faculty-header">
            <div class="section-eyebrow fade-up">Our Educators</div>
            <h2 class="section-title fade-up fade-up-delay-1">
                Nationally Sourced<br><em>Expert Faculty</em>
            </h2>
            <p class="section-lead fade-up fade-up-delay-2" style="margin: 0 auto;">
                To bring the best pedagogical practices to Kot-Ise-Khan, our highly qualified educators are drawn from India's finest academic regions, ensuring a rich, multicultural perspective.
            </p>
        </div>

        <div class="faculty-regions">
            <div class="faculty-region fade-up">
                <div class="region-flag">&#127807;</div>
                <div class="region-name">Punjab</div>
                <div class="region-desc">Deep local connection, cultural synergy, and native community understanding.</div>
            </div>
            <div class="faculty-region fade-up fade-up-delay-1">
                <div class="region-flag">&#127796;</div>
                <div class="region-name">Kerala</div>
                <div class="region-desc">Renowned for foundational educational excellence and high literacy standards.</div>
            </div>
            <div class="faculty-region fade-up fade-up-delay-2">
                <div class="region-flag">&#127981;</div>
                <div class="region-name">Pune</div>
                <div class="region-desc">A premier cultural and academic hub known for progressive teaching methodologies.</div>
            </div>
            <div class="faculty-region fade-up fade-up-delay-3">
                <div class="region-flag">&#9968;</div>
                <div class="region-name">Darjeeling</div>
                <div class="region-desc">Celebrated for elite convent schooling and English-medium educational traditions.</div>
            </div>
        </div>
    </div>
</section>

<!-- SPORTS SECTION -->
<section class="sports-section" id="sports">
    <div class="container">
        <div class="sports-layout">
            <div>
                <div class="section-eyebrow fade-up">Sports &amp; Fitness</div>
                <h2 class="section-title fade-up fade-up-delay-1">
                    Dynamic Sports &amp;<br><em>Athletic Programs</em>
                </h2>
                <p class="section-lead fade-up fade-up-delay-2">
                    Physical fitness and sportsmanship are vital components of life at Bethania. Recognizing that a healthy mind resides in a healthy body, our extensive sports programs cultivate teamwork, resilience, and physical excellence daily.
                </p>

                <div class="sports-list fade-up fade-up-delay-3">
                    <div class="sport-item"><span class="sport-emoji">&#127955;</span><span class="sport-name">Table Tennis</span></div>
                    <div class="sport-item"><span class="sport-emoji">&#127936;</span><span class="sport-name">Basketball</span></div>
                    <div class="sport-item"><span class="sport-emoji">&#127992;</span><span class="sport-name">Badminton</span></div>
                    <div class="sport-item"><span class="sport-emoji">&#127951;</span><span class="sport-name">Cricket</span></div>
                    <div class="sport-item"><span class="sport-emoji">&#127952;</span><span class="sport-name">Volleyball</span></div>
                    <div class="sport-item"><span class="sport-emoji">&#129336;</span><span class="sport-name">Kho-Kho</span></div>
                    <div class="sport-item"><span class="sport-emoji">&#128764;</span><span class="sport-name">Skating</span></div>
                    <div class="sport-item"><span class="sport-emoji">&#129355;</span><span class="sport-name">Karate</span></div>
                </div>
            </div>

            <div class="sports-image fade-up fade-up-delay-2" data-parallax>
                <img src="/images/students_activities.png" alt="Bethania Sports Activities">
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container" style="position:relative;z-index:1;text-align:center;">
        <div class="cta-eyebrow fade-up">Begin the Journey</div>
        <h2 class="cta-title fade-up fade-up-delay-1">
            Ready to Become<br>Part of the Bethania Family?
        </h2>
        <p class="cta-text fade-up fade-up-delay-2">
            Give your child an education that truly matters &mdash; one that lights their way through life. Join us at Bethania Convent School, Kot-Ise-Khan.
        </p>
        <div class="cta-actions fade-up fade-up-delay-3">
            <a href="mailto:bethaniaconventschool&#64;gmail.com" class="btn btn-primary">Apply for Admission</a>
            <a href="tel:+911234567890" class="btn btn-outline">Call Us Today</a>
        </div>
    </div>
</section>
@endsection
