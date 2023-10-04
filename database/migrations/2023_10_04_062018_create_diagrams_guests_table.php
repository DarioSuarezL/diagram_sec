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
        Schema::create('diagrams_guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diagram_id')->constrained('diagrams', 'id')->onDelete('cascade');
            $table->string('guest_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagrams_guests');
    }
};
