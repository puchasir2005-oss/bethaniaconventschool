<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    protected $fillable = [
        'father_name',
        'mother_name',
        'student_name',
        'student_age',
        'admission_class',
        'previous_school',
        'parent_phone',
    ];
}
