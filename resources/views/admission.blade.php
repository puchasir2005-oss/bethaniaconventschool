@extends('layouts.app')

@section('content')
<!-- ADMISSION FORM SECTION -->
<section class="admission-section">
    <div class="container">
        <div class="admission-header">
            <div class="section-eyebrow fade-up">Admissions Open</div>
            <h1 class="section-title fade-up fade-up-delay-1">
                Apply for <em>Admission</em>
            </h1>
            <p class="section-lead fade-up fade-up-delay-2">
                Begin your child's journey at Bethania Convent School. Fill in the details below and our admissions team will get in touch with you shortly.
            </p>
        </div>

        <div class="admission-form-wrapper fade-up fade-up-delay-3">
            @if(session('success'))
                <div class="alert-success">
                    <span class="alert-icon">&#10003;</span>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert-error">
                    <span class="alert-icon">&#9888;</span>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/admission" method="POST" class="admission-form">
                @csrf

                <div class="form-group">
                    <label for="parent_name" class="form-label">Parent / Guardian Name</label>
                    <input type="text" id="parent_name" name="parent_name" class="form-input" placeholder="Enter parent's full name" value="{{ old('parent_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="student_name" class="form-label">Student Name</label>
                    <input type="text" id="student_name" name="student_name" class="form-input" placeholder="Enter student's full name" value="{{ old('student_name') }}" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="student_age" class="form-label">Student Age</label>
                        <input type="number" id="student_age" name="student_age" class="form-input" placeholder="Age" min="2" max="20" value="{{ old('student_age') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="admission_class" class="form-label">Admission to Class</label>
                        <select id="admission_class" name="admission_class" class="form-input form-select" required>
                            <option value="" disabled {{ old('admission_class') ? '' : 'selected' }}>Select Class</option>
                            <option value="Nursery" {{ old('admission_class') == 'Nursery' ? 'selected' : '' }}>Nursery</option>
                            <option value="LKG" {{ old('admission_class') == 'LKG' ? 'selected' : '' }}>LKG</option>
                            <option value="UKG" {{ old('admission_class') == 'UKG' ? 'selected' : '' }}>UKG</option>
                            @for($i = 1; $i <= 10; $i++)
                                <option value="Class {{ $i }}" {{ old('admission_class') == "Class $i" ? 'selected' : '' }}>Class {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="parent_phone" class="form-label">Parent's Phone Number</label>
                    <input type="tel" id="parent_phone" name="parent_phone" class="form-input" placeholder="Enter 10-digit phone number" value="{{ old('parent_phone') }}" required>
                </div>

                <button type="submit" class="btn btn-primary admission-submit-btn">
                    <span>Submit Application</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
