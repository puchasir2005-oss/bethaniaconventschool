<?php

namespace App\Http\Controllers;

use App\Models\AdmissionEnquiry;
use App\Models\ExamNotification;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (!Auth::user()->is_admin) {
                Auth::logout();
                return back()->with('error', 'You are not authorized as admin.');
            }

            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid credentials. Please try again.');
    }

    public function dashboard()
    {
        $enquiries = AdmissionEnquiry::orderBy('created_at', 'desc')->get();
        $notifications = ExamNotification::orderBy('created_at', 'desc')->get();
        $events = Event::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact('enquiries', 'notifications', 'events'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
