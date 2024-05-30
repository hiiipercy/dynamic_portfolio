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
        Schema::create('whyuses', function (Blueprint $table) {
            $table->id();
            $table->string('name_section');
            $table->string('title');
            $table->string('subtitle');
            $table->string('list_1');
            $table->string('list_title_1');
            $table->string('list_2');
            $table->string('list_title_2');
            $table->string('list_3');
            $table->string('list_title_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whyuses');
    }
};
