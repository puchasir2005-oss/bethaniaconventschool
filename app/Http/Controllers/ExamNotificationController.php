<?php

namespace App\Http\Controllers;

use App\Models\ExamNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExamNotificationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'exam_start_date' => 'required|date',
            'timetable_pdf' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $pdfPath = null;
        if ($request->hasFile('timetable_pdf')) {
            $pdfPath = $request->file('timetable_pdf')->store('timetables', 'public');
        }

        ExamNotification::create([
            'title' => $validated['title'],
            'exam_start_date' => $validated['exam_start_date'],
            'timetable_pdf' => $pdfPath,
            'is_active' => true,
        ]);

        return redirect('/admin/dashboard')->with('success', 'Exam notification created successfully!');
    }

    public function destroy($id)
    {
        $notification = ExamNotification::findOrFail($id);

        // Delete the PDF file if it exists
        if ($notification->timetable_pdf) {
            Storage::disk('public')->delete($notification->timetable_pdf);
        }

        $notification->delete();

        return redirect('/admin/dashboard')->with('success', 'Notification deleted successfully!');
    }

    public function index()
    {
        $notifications = ExamNotification::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('notifications', compact('notifications'));
    }

    public function getActive()
    {
        $notifications = ExamNotification::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($notification) {
                return [
                    'id' => $notification->id,
                    'title' => $notification->title,
                    'exam_start_date' => $notification->exam_start_date->format('d M Y'),
                    'timetable_url' => $notification->timetable_pdf
                        ? asset('storage/' . $notification->timetable_pdf)
                        : null,
                ];
            });

        return response()->json($notifications);
    }
}
