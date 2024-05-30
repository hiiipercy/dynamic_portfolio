<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name_section');
            $table->string('image');
            $table->string('title');
            $table->string('subtitle');
            $table->string('skill_name_1');
            $table->string('skill_percent_1');
            $table->string('skill_fill_percent_1');
            $table->string('skill_name_2');
            $table->string('skill_percent_2');
            $table->string('skill_fill_percent_2');
            $table->string('skill_name_3');
            $table->string('skill_percent_3');
            $table->string('skill_fill_percent_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
