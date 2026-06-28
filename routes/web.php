<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamNotificationController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/vision', function () {
    return view('vision');
});

Route::get('/programs', function () {
    return view('programs');
});

Route::get('/gallery', function () {
    return view('gallery');
});

// Admission
Route::get('/admission', [AdmissionController::class, 'showForm']);
Route::post('/admission', [AdmissionController::class, 'store']);

// Events
Route::get('/events', [EventController::class, 'index']);

// Admin Auth
Route::get('/admin/login', [AdminController::class, 'showLogin']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);

// Admin Dashboard (protected)
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::post('/admin/exam-notifications', [ExamNotificationController::class, 'store']);
    Route::delete('/admin/exam-notifications/{id}', [ExamNotificationController::class, 'destroy']);
    Route::post('/admin/events', [EventController::class, 'store']);
    Route::delete('/admin/events/{id}', [EventController::class, 'destroy']);
});

// Notifications Page
Route::get('/notifications', [ExamNotificationController::class, 'index']);

// APIs
Route::get('/api/exam-notifications', [ExamNotificationController::class, 'getActive']);
Route::get('/api/events', [EventController::class, 'getActive']);
