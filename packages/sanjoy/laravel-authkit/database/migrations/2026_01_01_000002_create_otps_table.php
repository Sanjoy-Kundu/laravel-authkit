<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {   
        //If opts exists then drop it
        Schema::dropIfExists('otps');

        Schema::create('otps', function (Blueprint $table) {
            $table->id();
            $table->string('identifier'); // Email address or Phone
            $table->string('token');      // OTP Code
            $table->timestamp('expires_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('otps');
    }
};