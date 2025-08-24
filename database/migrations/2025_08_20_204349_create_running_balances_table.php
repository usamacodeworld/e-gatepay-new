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
        Schema::create('running_balances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('settlement_id')->nullable()->index(); // Nullable, linked settlement if any
            $table->decimal('opening_balance', 12, 2)->default(0);
            $table->decimal('transaction_amount', 12, 2)->default(0);
            $table->decimal('closing_balance', 12, 2)->default(0);
            $table->enum('transaction_type', ['credit', 'debit']);
            $table->text('description')->nullable();
            $table->timestamps();

            // Foreign key constraints (optional)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('settlement_id')->references('id')->on('settlements')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('running_balances');
    }
};
