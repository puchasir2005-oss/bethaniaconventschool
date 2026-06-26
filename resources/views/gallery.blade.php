@extends('layouts.app')

@section('content')
<!-- PAGE HEADER -->
<div class="page-header" style="background-color: var(--color-primary-dark); color: white; padding: var(--spacing-xxl) 0; text-align: center; margin-top: 70px;">
    <div class="container">
        <h1 class="page-title fade-up" style="font-size: 3rem; margin-bottom: 1rem; color: white;">School Gallery</h1>
        <p class="page-subtitle fade-up fade-up-delay-1" style="font-size: 1.25rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            A glimpse into the vibrant life, events, and facilities at Bethania Convent School.
        </p>
    </div>
</div>

<!-- GALLERY SECTION -->
<section class="gallery-page-section" style="padding: var(--spacing-xxl) 0; background: var(--color-bg);">
    <div class="container">
        
        <div class="gallery-grid-full fade-up fade-up-delay-2" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: var(--spacing-md);">
            
            @php
                $images = [
                    'school 3.jpeg' => 'School Building',
                    'school 4.jpeg' => 'School Campus',
                    'school 5.jpeg' => 'School Events',
                    'school 6.jpeg' => 'Campus View',
                    'school 7.jpeg' => 'School Grounds',
                    'school.jpeg' => 'School Front',
                    'graduation ceremony.jpeg' => 'Graduation Ceremony',
                    'graduation ceremony 1.jpeg' => 'Graduation Ceremony',
                    'graduation ceremony 2.jpeg' => 'Graduation Ceremony',
                    'physics lab.jpeg' => 'Physics Lab',
                    'chemistry lab.jpeg' => 'Chemistry Lab',
                    'computer lab.jpeg' => 'Computer Lab',
                    'library.jpeg' => 'School Library',
                    'fancy dress cometition.jpeg' => 'Fancy Dress Competition',
                    'fancy dress.jpeg' => 'Fancy Dress',
                    'multipurpose hall.jpeg' => 'Multipurpose Hall',
                    'picnic.jpeg' => 'School Picnic',
                    'picnic 1.jpeg' => 'School Picnic',
                    'picnic 2.jpeg' => 'School Picnic',
                    'picnic 3.jpeg' => 'School Picnic',
                    'MLA addressing students.jpeg' => 'MLA Addressing Students',
                    'mla and parents.jpeg' => 'MLA and Parents',
                    'carate 1.jpeg' => 'Karate Classes',
                    'carate 2.jpeg' => 'Karate Classes',
                    'carate 3.jpeg' => 'Karate Classes',
                    'corridoor.jpeg' => 'School Corridor',
                    'corridoor 1.jpeg' => 'School Corridor',
                    'entrance.jpeg' => 'School Entrance',
                    'reception.jpeg' => 'Reception Area',
                    'teachers.jpeg' => 'Our Teachers',
                    'rank holders.jpeg' => 'Rank Holders',
                    'ek ped.jpeg' => 'Plantation Drive'
                ];
            @endphp

            @foreach($images as $image => $alt)
            <div class="gallery-item-full" style="border-radius: 12px; overflow: hidden; height: 250px; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.05); cursor: pointer;" onclick="openLightbox('/images/{{ $image }}', '{{ $alt }}')">
                <img src="/images/{{ $image }}" alt="{{ $alt }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" loading="lazy">
            </div>
            @endforeach
            
        </div>
    </div>
</section>

<!-- LIGHTBOX (Simple implementation) -->
<div id="lightbox" style="display: none; position: fixed; z-index: 9999; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); align-items: center; justify-content: center; flex-direction: column;">
    <span style="position: absolute; top: 20px; right: 30px; color: white; font-size: 40px; font-weight: bold; cursor: pointer;" onclick="closeLightbox()">&times;</span>
    <img id="lightbox-img" src="" alt="" style="max-width: 90%; max-height: 80vh; border-radius: 8px; box-shadow: 0 0 20px rgba(0,0,0,0.5);">
    <div id="lightbox-caption" style="color: white; margin-top: 15px; font-size: 1.2rem; font-family: var(--font-body);"></div>
</div>

<script>
    function openLightbox(src, alt) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox-caption').textContent = alt;
        document.getElementById('lightbox').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close lightbox on clicking outside the image
    document.getElementById('lightbox').addEventListener('click', function(e) {
        if(e.target === this) {
            closeLightbox();
        }
    });
    
    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape" && document.getElementById('lightbox').style.display === 'flex') {
            closeLightbox();
        }
    });
</script>
@endsection
