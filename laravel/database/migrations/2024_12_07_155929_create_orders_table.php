<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->enum('payment', ['karta', 'dobierka', 'bankovy_prevod']);
            $table->enum('shipping', ['kurier', 'osobny_odber']);
            $table->decimal('total', 10, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
