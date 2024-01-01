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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20)->unique();
            $table->text('password');
            $table->string('name');
            $table->string('owner_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('route', 20)->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('avatar_url')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
