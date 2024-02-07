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
        Schema::create('studentreg', function (Blueprint $table) {
            $table->id();
            $table->string('Studentname');
            $table->string('Studentage');
            $table->string('Gender');
            $table->string('NRIC')->unique;
            $table->string('EtchnicBackground');
            $table->string('Schoolgrade');
            $table->string('Address');
            $table->string('Fathername');
            $table->string('Fathernum');
            $table->string('FatherEmail');
            $table->string('Mothername');
            $table->string('Motheremail');
            $table->string('Mothernum');
            $table->string('Progreg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentreg');
    }
};
