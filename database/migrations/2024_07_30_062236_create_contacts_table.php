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
        // Schema::create('contacts', function (Blueprint $table) {
        //     $table->id();
        //     $table->text('alamat');
        //     $table->string('email')->unique();
        //     $table->integer('no_tlp')->unique();
        //     $table->timestamps();
        // });
        Schema::rename('contacts', 'dawei');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
