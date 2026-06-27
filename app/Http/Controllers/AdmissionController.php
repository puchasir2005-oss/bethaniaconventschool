<?php

namespace App\Http\Controllers;

use App\Models\AdmissionEnquiry;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function showForm()
    {
        return view('admission');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'parent_name' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'student_age' => 'required|integer|min:2|max:20',
            'admission_class' => 'required|string|max:50',
            'parent_phone' => 'required|string|max:15',
        ]);

        AdmissionEnquiry::create($validated);

        return redirect('/admission')->with('success', 'Your admission enquiry has been submitted successfully! We will contact you soon.');
    }
}
