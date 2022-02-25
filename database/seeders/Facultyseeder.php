<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\faculty;

class Facultyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        faculty::create(['faculty' => 'Computing']);
        faculty::create(['faculty' => 'Management']);
        faculty::create(['faculty' => 'Hospitality']);
    }
}
