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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Creates the 'id' column as an auto-incrementing primary key
            $table->string('name'); // Creates a 'name' column of type string
            $table->string('content'); // Creates a 'content' column of type string
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
