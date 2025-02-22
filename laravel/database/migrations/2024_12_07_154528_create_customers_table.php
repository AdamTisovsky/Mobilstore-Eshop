<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->unique()->onDelete('set null');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('phone',50);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
