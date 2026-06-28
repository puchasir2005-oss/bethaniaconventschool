@extends('layouts.app')
@push('body-class', 'inner-page')

@section('content')
<!-- PAGE HEADER -->
<div class="page-header" style="background-color: var(--color-primary-dark); color: white; padding: var(--spacing-xxl) 0; text-align: center; margin-top: 70px;">
    <div class="container">
        <h1 class="page-title" style="font-size: 3rem; margin-bottom: 1rem; color: white;">Events at BCS</h1>
        <p class="page-subtitle" style="font-size: 1.25rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            Explore the vibrant events, celebrations, and activities happening at Bethania Convent School.
        </p>
    </div>
</div>

<!-- EVENTS LIST -->
<section style="padding: 4rem 0; background: var(--cream); min-height: 60vh;">
    <div class="container">

        @if($events->count() > 0)
        <div class="events-grid">
            @foreach($events as $event)
            <div class="event-detail-card fade-up" style="--stagger-index: {{ $loop->index }};">
                <div class="event-detail-poster">
                    <img src="{{ asset('storage/' . $event->poster_image) }}" alt="{{ $event->title }}" loading="lazy">
                </div>
                <div class="event-detail-body">
                    <h3 class="event-detail-title">{{ $event->title }}</h3>
                    @if($event->event_date)
                    <div class="event-detail-date">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: -2px;">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        {{ $event->event_date->format('d M Y') }}
                    </div>
                    @endif
                    @if($event->description)
                    <p class="event-detail-desc">{{ $event->description }}</p>
                    @endif
                    <div class="event-detail-posted">Posted {{ $event->created_at->diffForHumans() }}</div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="events-empty">
            <div class="events-empty-icon">🎉</div>
            <h3>No Events Yet</h3>
            <p>Check back soon for upcoming events and celebrations at Bethania Convent School!</p>
        </div>
        @endif

    </div>
</section>

<style>
    .events-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 2rem;
    }

    .event-detail-card {
        background: var(--white);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .event-detail-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    }

    .event-detail-poster {
        width: 100%;
        height: 320px;
        overflow: hidden;
    }
    .event-detail-poster img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .event-detail-card:hover .event-detail-poster img {
        transform: scale(1.05);
    }

    .event-detail-body {
        padding: 1.5rem;
    }

    .event-detail-title {
        font-family: var(--font-heading);
        font-size: 1.35rem;
        font-weight: 600;
        color: var(--navy-dark);
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .event-detail-date {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--gold);
        margin-bottom: 0.75rem;
    }

    .event-detail-desc {
        font-size: 0.95rem;
        color: var(--text-mid);
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 0.75rem;
    }

    .event-detail-posted {
        font-size: 0.78rem;
        color: var(--text-light);
        font-style: italic;
    }

    .events-empty {
        text-align: center;
        padding: 5rem 2rem;
    }
    .events-empty-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
    }
    .events-empty h3 {
        font-family: var(--font-heading);
        font-size: 1.5rem;
        color: var(--navy);
        margin-bottom: 0.5rem;
    }
    .events-empty p {
        color: var(--text-light);
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        .events-grid {
            grid-template-columns: 1fr;
        }
        .event-detail-poster {
            height: 260px;
        }
    }
</style>
@endsection
