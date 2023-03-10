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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('mentor_id');
            $table->string('namaCourse');
            $table->string('slugCourse');
            $table->string('imgCourse')->nullable();
            $table->string('lamaVideo');
            $table->string('jumlahVideo');
            $table->text('deskripsiCourse');
            $table->string('hargaCourse');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
