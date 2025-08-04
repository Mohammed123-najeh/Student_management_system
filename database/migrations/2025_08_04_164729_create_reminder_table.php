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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->morphs('reminderable');
            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->text('body')->nullable();
            $table->dateTime('remind_at');
            $table->string('color', 20)->nullable();
            $table->boolean('is_done')->default(false);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminder');
    }
};
