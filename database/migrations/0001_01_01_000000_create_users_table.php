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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('username')->unique(); // Ton pseudo
            $table->string('email')->unique();    // L'ajout standard Laravel
            $table->string('password');

            $table->text('description')->nullable();
            $table->boolean('is_admin')->default(false);

            // Ta contrainte de groupe
            $table->foreignId('group_id')->nullable()->constrained('groups')->nullOnDelete();

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
