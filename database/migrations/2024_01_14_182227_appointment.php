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
        Schema::create('appointment',function (Blueprint $table) {
            $table->id();
            $table->string('parentsname');
            $table->string('studentssname');
            $table->string('studentsage');
            $table->string('address');
            $table->string('contactnum');
            $table->string('email')->unique;
            $table->date('date');
            $table->time('time');
            $table->string('assessmentopt');
            $table->string('paymentopt');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
