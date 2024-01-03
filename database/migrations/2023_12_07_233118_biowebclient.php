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
        Schema::create('Client_info', function (Blueprint $table) {
            $table->id();
            $table->string('client_first_name');
            $table->string('client_last_name');
            $table->string('client_gender');
            $table->string('client_bod');
            $table->string('client_email');
            $table->string('client_password');
            $table->string('client_phone_number')->nullable(false);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Client_info');
    }
};
