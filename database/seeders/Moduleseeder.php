<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\module;
use Illuminate\Support\Facades\DB;

class Moduleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        module::create(['module' => 'BSc(Hons) Computing', 'faculties_id' => 1]);
        module::create(['module' => 'MSc information and technology','faculties_id'=>1]);
        module::create(['module' => 'BBA','faculties_id'=>2]);
        module::create(['module' => 'MBA','faculties_id'=>2]);
        module::create(['module' => 'BHM','faculties_id'=>3]);
    }
}
