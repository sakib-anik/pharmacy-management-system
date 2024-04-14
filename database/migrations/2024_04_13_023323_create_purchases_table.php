<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('suppliers_id')->nullable();
            $table->integer('invoices_id')->nullable();
            $table->string('voucher_number')->nullable();
            $table->date('purchase_date')->nullable();
            $table->string('total_amount')->nullable();
            $table->integer('payment_status')->default(1)->comment('1:-Pending, 2:-Accept, 3:-Cancel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};