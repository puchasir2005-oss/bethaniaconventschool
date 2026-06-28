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
            <a href="/admission" class="btn btn-outline">Apply for Admission</a>
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
                <img src="{{ asset('images/school 3.jpeg') }}" alt="Bethania Convent School Main Building">
                <div class="gallery-overlay"><span class="gallery-caption">Main Academic Block</span></div>
            </div>
            <div class="gallery-item gallery-item-2" data-parallax>
                <img src="{{ asset('images/school 6.jpeg') }}" alt="Green School Campus">
                <div class="gallery-overlay"><span class="gallery-caption">Green Campus</span></div>
            </div>
            <div class="gallery-item gallery-item-3" data-parallax>
                <img src="{{ asset('images/carate 1.jpeg') }}" alt="Students in Activities">
                <div class="gallery-overlay"><span class="gallery-caption">Student Activities</span></div>
            </div>
            <div class="gallery-item gallery-item-4" data-parallax>
                <img src="{{ asset('images/computer lab.jpeg') }}" alt="Computer Lab">
                <div class="gallery-overlay"><span class="gallery-caption">Computer Lab</span></div>
            </div>
            <div class="gallery-item gallery-item-5" data-parallax>
                <img src="{{ asset('images/fancy dress cometition.jpeg') }}" alt="School Events">
                <div class="gallery-overlay"><span class="gallery-caption">School Events</span></div>
            </div>
        </div>
    </div>
</section>

<!-- EVENTS IN BCS — Auto-scrolling poster carousel -->
<section class="events-carousel-section" id="eventsCarousel" style="padding: 5rem 0; background: var(--navy-dark); overflow: hidden; display: none;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2.5rem; flex-wrap: wrap; gap: 1rem;">
            <div>
                <div class="section-eyebrow fade-up" style="color: var(--gold-light);">What's Happening</div>
                <h2 class="section-title fade-up fade-up-delay-1" style="color: var(--white); margin-bottom:0;">Events at <em>BCS</em></h2>
            </div>
            <a href="/events" class="btn btn-outline fade-up" style="border-color: rgba(255,255,255,0.3); color: var(--white);">
                View All Events
            </a>
        </div>
    </div>

    <div class="events-scroll-container">
        <div class="events-scroll-track" id="eventsTrack">
            <!-- Populated by JS -->
        </div>
    </div>
</section>

<script>
(function() {
    fetch('/api/events')
        .then(function(res) { return res.json(); })
        .then(function(events) {
            if (events.length === 0) return;

            var section = document.getElementById('eventsCarousel');
            var track = document.getElementById('eventsTrack');
            if (!section || !track) return;

            var html = '';
            events.forEach(function(e) {
                html += '<a href="/events" class="event-carousel-card">' +
                    '<div class="event-carousel-poster">' +
                    '<img src="' + e.poster_url + '" alt="' + e.title + '" loading="lazy">' +
                    '</div>' +
                    '<div class="event-carousel-info">' +
                    '<div class="event-carousel-title">' + e.title + '</div>' +
                    (e.event_date ? '<div class="event-carousel-date">' + e.event_date + '</div>' : '') +
                    '</div>' +
                    '</a>';
            });

            // Duplicate for seamless infinite scrolling
            track.innerHTML = html + html;
            section.style.display = 'block';
        })
        .catch(function() {});
})();
</script>

<!-- GALLERY PREVIEW SECTION -->
<section class="gallery-preview-section" style="padding: var(--spacing-xxl) 0; background: var(--color-white);">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: var(--spacing-xl); flex-wrap: wrap; gap: 1rem;">
            <div>
                <div class="section-eyebrow fade-up">Latest from Campus</div>
                <h2 class="section-title fade-up fade-up-delay-1" style="margin-bottom:0;">Life at <em>Bethania</em></h2>
            </div>
            <a href="/gallery" class="btn btn-outline fade-up">
                View Full Gallery
            </a>
        </div>

        <div class="gallery-preview-grid fade-up" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--spacing-md);">
            <div class="gallery-preview-item" style="border-radius: 12px; overflow: hidden; height: 250px;">
                <img src="/images/school 4.jpeg" alt="School Activity" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="gallery-preview-item" style="border-radius: 12px; overflow: hidden; height: 250px;">
                <img src="/images/chemistry lab.jpeg" alt="Chemistry Lab" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="gallery-preview-item" style="border-radius: 12px; overflow: hidden; height: 250px;">
                <img src="/images/graduation ceremony.jpeg" alt="Graduation Ceremony" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="gallery-preview-item" style="border-radius: 12px; overflow: hidden; height: 250px;">
                <img src="/images/fancy dress cometition.jpeg" alt="Fancy Dress Competition" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>
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
                <img src="{{ asset('images/carate 1.jpeg') }}" alt="Bethania Sports Activities">
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
            <a href="/admission" class="btn btn-primary">Apply for Admission</a>
            <a href="tel:+911234567890" class="btn btn-outline">Call Us Today</a>
        </div>
    </div>
</section>
@endsection
