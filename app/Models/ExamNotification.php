<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamNotification extends Model
{
    protected $fillable = [
        'title',
        'exam_start_date',
        'timetable_pdf',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'exam_start_date' => 'date',
            'is_active' => 'boolean',
        ];
    }
}
