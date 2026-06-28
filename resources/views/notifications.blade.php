@extends('layouts.app')
@push('body-class', 'inner-page')

@section('content')
<!-- PAGE HEADER -->
<div class="page-header" style="background-color: var(--color-primary-dark); color: white; padding: var(--spacing-xxl) 0; text-align: center; margin-top: 70px;">
    <div class="container">
        <h1 class="page-title" style="font-size: 3rem; margin-bottom: 1rem; color: white;">Notices & Notifications</h1>
        <p class="page-subtitle" style="font-size: 1.25rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            Stay updated with the latest exam schedules, timetables, and important school announcements.
        </p>
    </div>
</div>

<!-- NOTIFICATIONS LIST -->
<section style="padding: 4rem 0; background: var(--cream); min-height: 60vh;">
    <div class="container">

        @if($notifications->count() > 0)
        <div class="notifications-grid">
            @foreach($notifications as $notification)
            <div class="notification-card fade-up" style="--stagger-index: {{ $loop->index }};">
                <div class="notification-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                    </svg>
                </div>
                <div class="notification-card-body">
                    <h3 class="notification-card-title">{{ $notification->title }}</h3>
                    <div class="notification-card-meta">
                        <span class="notification-card-date">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: -2px;">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            Exam Starts: <strong>{{ $notification->exam_start_date->format('d M Y') }}</strong>
                        </span>
                        <span class="notification-card-posted">
                            Posted: {{ $notification->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
                <div class="notification-card-actions">
                    @if($notification->timetable_pdf)
                    <a href="{{ asset('storage/' . $notification->timetable_pdf) }}" target="_blank" class="notification-pdf-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="12" y1="18" x2="12" y2="12"/>
                            <polyline points="9 15 12 18 15 15"/>
                        </svg>
                        <span>View / Download PDF</span>
                    </a>
                    @else
                    <span class="notification-no-pdf">No attachment</span>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="notifications-empty">
            <div class="notifications-empty-icon">📭</div>
            <h3>No Notifications</h3>
            <p>There are no active notifications at the moment. Check back later!</p>
        </div>
        @endif

    </div>
</section>

<style>
    .notifications-grid {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .notification-card {
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
        background: var(--white);
        border-radius: 16px;
        padding: 1.5rem 1.75rem;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        border-left: 4px solid var(--gold);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .notification-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(0,0,0,0.1);
    }

    .notification-card-icon {
        flex-shrink: 0;
        width: 52px;
        height: 52px;
        border-radius: 14px;
        background: var(--gold-pale);
        color: var(--gold);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .notification-card-body {
        flex: 1;
        min-width: 0;
    }

    .notification-card-title {
        font-family: var(--font-heading);
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--navy-dark);
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .notification-card-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        font-size: 0.85rem;
        color: var(--text-light);
    }

    .notification-card-date {
        color: var(--gold);
        font-weight: 500;
    }

    .notification-card-date strong {
        color: var(--navy);
    }

    .notification-card-posted {
        color: var(--text-light);
        font-size: 0.8rem;
    }

    .notification-card-actions {
        flex-shrink: 0;
        display: flex;
        align-items: center;
    }

    .notification-pdf-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.65rem 1.25rem;
        background: var(--gold);
        color: var(--white);
        border-radius: 10px;
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.25s, transform 0.2s;
        white-space: nowrap;
    }
    .notification-pdf-btn:hover {
        background: var(--orange);
        transform: scale(1.04);
    }

    .notification-no-pdf {
        font-size: 0.8rem;
        color: var(--text-light);
        font-style: italic;
        padding: 0.5rem 1rem;
        background: var(--cream);
        border-radius: 8px;
    }

    .notifications-empty {
        text-align: center;
        padding: 5rem 2rem;
    }
    .notifications-empty-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
    }
    .notifications-empty h3 {
        font-family: var(--font-heading);
        font-size: 1.5rem;
        color: var(--navy);
        margin-bottom: 0.5rem;
    }
    .notifications-empty p {
        color: var(--text-light);
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        .notification-card {
            flex-direction: column;
            gap: 1rem;
            padding: 1.25rem;
        }
        .notification-card-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
        }
        .notification-card-icon svg {
            width: 22px;
            height: 22px;
        }
        .notification-card-actions {
            width: 100%;
        }
        .notification-pdf-btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endsection
