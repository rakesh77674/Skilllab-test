<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'LectureName',
         'Gender',
         'phone',
         'email',
         'Address',
         'Nationality',
         'DOB',
         'Faculty',
    ];
}
