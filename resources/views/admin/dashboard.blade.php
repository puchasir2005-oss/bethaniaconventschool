<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard – Bethania Convent School</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/school.css">
</head>
<body class="admin-body">
    <!-- ADMIN NAVBAR -->
    <nav class="admin-navbar">
        <div class="admin-navbar-inner">
            <div class="admin-navbar-brand">
                <img src="/images/school_logo.png" alt="Bethania">
                <span>Admin Dashboard</span>
            </div>
            <div class="admin-navbar-actions">
                <a href="/" class="admin-nav-link">View Website</a>
                <form action="/admin/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="admin-logout-btn">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="admin-container">
        <!-- SUCCESS/ERROR MESSAGES -->
        @if(session('success'))
            <div class="alert-success" style="margin-bottom: 1.5rem;">
                <span class="alert-icon">&#10003;</span>
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert-error" style="margin-bottom: 1.5rem;">
                <span class="alert-icon">&#9888;</span>
                {{ session('error') }}
            </div>
        @endif

        <!-- TAB NAVIGATION -->
        <div class="admin-tabs">
            <button class="admin-tab active" onclick="switchTab('enquiries')">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                Admission Enquiries
                <span class="admin-tab-badge">{{ $enquiries->count() }}</span>
            </button>
            <button class="admin-tab" onclick="switchTab('notifications')">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                Exam Notifications
                <span class="admin-tab-badge">{{ $notifications->count() }}</span>
            </button>
        </div>

        <!-- ENQUIRIES TAB -->
        <div class="admin-tab-content active" id="tab-enquiries">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h2>Admission Enquiries</h2>
                    <span class="admin-card-count">{{ $enquiries->count() }} total</span>
                </div>

                @if($enquiries->isEmpty())
                    <div class="admin-empty-state">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/></svg>
                        <p>No admission enquiries yet.</p>
                    </div>
                @else
                    <div class="admin-table-wrapper">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Parent Name</th>
                                    <th>Student Name</th>
                                    <th>Age</th>
                                    <th>Class</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enquiries as $index => $enquiry)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $enquiry->created_at->format('d M Y, h:i A') }}</td>
                                        <td><strong>{{ $enquiry->parent_name }}</strong></td>
                                        <td>{{ $enquiry->student_name }}</td>
                                        <td>{{ $enquiry->student_age }}</td>
                                        <td><span class="admin-badge">{{ $enquiry->admission_class }}</span></td>
                                        <td><a href="tel:{{ $enquiry->parent_phone }}" class="admin-phone-link">{{ $enquiry->parent_phone }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        <!-- NOTIFICATIONS TAB -->
        <div class="admin-tab-content" id="tab-notifications">
            <!-- CREATE NOTIFICATION FORM -->
            <div class="admin-card">
                <div class="admin-card-header">
                    <h2>Create Exam Notification</h2>
                </div>
                <form action="/admin/exam-notifications" method="POST" enctype="multipart/form-data" class="admin-notification-form">
                    @csrf
                    <div class="form-row" style="gap: 1rem;">
                        <div class="form-group" style="flex: 2;">
                            <label for="title" class="form-label">Notification Title</label>
                            <input type="text" id="title" name="title" class="form-input" placeholder="e.g., Mid-Term Examination 2026" required>
                        </div>
                        <div class="form-group" style="flex: 1;">
                            <label for="exam_start_date" class="form-label">Exam Start Date</label>
                            <input type="date" id="exam_start_date" name="exam_start_date" class="form-input" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="timetable_pdf" class="form-label">Upload Timetable (PDF)</label>
                        <input type="file" id="timetable_pdf" name="timetable_pdf" class="form-input form-file-input" accept=".pdf">
                        <small class="form-hint">Optional. Max 10MB. Students can download this from the notification.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        Create Notification
                    </button>
                </form>
            </div>

            <!-- EXISTING NOTIFICATIONS -->
            <div class="admin-card" style="margin-top: 1.5rem;">
                <div class="admin-card-header">
                    <h2>Active Notifications</h2>
                    <span class="admin-card-count">{{ $notifications->count() }} total</span>
                </div>

                @if($notifications->isEmpty())
                    <div class="admin-empty-state">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.4"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                        <p>No exam notifications created yet.</p>
                    </div>
                @else
                    <div class="admin-notifications-list">
                        @foreach($notifications as $notification)
                            <div class="admin-notification-item">
                                <div class="admin-notification-info">
                                    <div class="admin-notification-title">{{ $notification->title }}</div>
                                    <div class="admin-notification-meta">
                                        <span>📅 Exam starts: {{ $notification->exam_start_date->format('d M Y') }}</span>
                                        @if($notification->timetable_pdf)
                                            <span>📎 <a href="{{ asset('storage/' . $notification->timetable_pdf) }}" target="_blank">View Timetable PDF</a></span>
                                        @else
                                            <span class="admin-notification-no-pdf">No PDF attached</span>
                                        @endif
                                        <span>{{ $notification->is_active ? '🟢 Active' : '🔴 Inactive' }}</span>
                                    </div>
                                </div>
                                <form action="/admin/exam-notifications/{{ $notification->id }}" method="POST" onsubmit="return confirm('Delete this notification?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="admin-delete-btn" title="Delete">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function switchTab(tab) {
            // Remove active from all tabs and contents
            document.querySelectorAll('.admin-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.admin-tab-content').forEach(c => c.classList.remove('active'));

            // Add active to selected
            if (tab === 'enquiries') {
                document.querySelectorAll('.admin-tab')[0].classList.add('active');
                document.getElementById('tab-enquiries').classList.add('active');
            } else {
                document.querySelectorAll('.admin-tab')[1].classList.add('active');
                document.getElementById('tab-notifications').classList.add('active');
            }
        }
    </script>
</body>
</html>
