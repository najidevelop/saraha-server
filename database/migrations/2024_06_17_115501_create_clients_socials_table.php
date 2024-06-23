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
        Schema::create('clients_socials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable();
$table->foreignId('social_id')->nullable();
$table->text('link')->nullable();
$table->integer('is_active')->nullable()->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients_socials');
    }
};
