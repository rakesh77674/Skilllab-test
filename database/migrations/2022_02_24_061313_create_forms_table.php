<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('LectureName')->unique();
            $table->string('Gender')->unique();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('Address')->unique();
            $table->string('Nationality')->unique();
            $table->string('DOB')->unique();
            $table->foreignid('faculties_id');
            $table->foreignid('modules_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
};
