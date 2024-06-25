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
        Schema::create('exemplaries_userrs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('exemplary_id')->nullable();
            $table->unsignedBigInteger('userr_id')->nullable();

            $table->foreign('exemplary_id')->references('id')->on('exemplaries')->onDelete('cascade');

            $table->foreign('userr_id')->references('id')->on('userrs')->onDelete('cascade');


            // $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('exemplaries_id')->constrained('exemplaries')->onDelete('cascade');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exemplaries_userrs');
    }
};
