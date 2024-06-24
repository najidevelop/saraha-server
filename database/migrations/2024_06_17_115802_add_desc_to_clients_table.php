<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.2024_06_17_115802_php artisan make:migration  add_facebook_id_to_clients_table
     */
    public function up(): void
    {
        Schema::table('clients', function (Blueprint $table) {
         
                $table->text('desc')->nullable();
           
                $table->string('country')->nullable();
                $table->string('gender')->nullable();
                $table->dateTime('birthdate')->nullable();
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColum('desc');
            $table->dropColum('country');
            $table->dropColum('gender');
            $table->dropColum('birthdate');
        });
    }
};
