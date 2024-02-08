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
        Schema::create('fourmsatclass', function (Blueprint $table) {
            $table->id();
            $table->string('Programme');
            $table->string('time');
            $table->string('Online_Class')->default('none');
            $table->string('Student_name');
            $table->string('NRIC')->unique;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fourmsatclass');
    }
};
