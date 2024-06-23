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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->nullable();
$table->foreignId('recipient_id')->nullable();
$table->text('content')->nullable();
$table->string('file')->nullable();
$table->integer('is_publish')->nullable()->default(0);
$table->integer('is_confirm')->nullable()->default(0);
$table->integer('is_read')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
