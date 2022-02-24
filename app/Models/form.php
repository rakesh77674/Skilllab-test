<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable = [
        'faculty_id',
        'module_id',
        'LectureName',
         'Gender',
         'phone',
         'email',
         'Address',
         'Nationality',
         'DOB',
    ];
}
