<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    protected $fillable = [
        'parent_name',
        'student_name',
        'student_age',
        'admission_class',
        'parent_phone',
    ];
}
