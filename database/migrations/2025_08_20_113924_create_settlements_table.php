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
        Schema::create('settlements', function (Blueprint $table) {
            $table->id();
            $table->uuid('settlement_id')->unique()->comment('Unique identifier for the settlement');
            $table->timestamp('settlement_date')->comment('Date of the settlement');
            $table->enum('settlement_type', ['manual', 'automatic'])->default('manual');
            $table->enum('settlement_method', ['bank_transfer', 'cheque', 'cash', 'wallet'])->default('bank_transfer');

            // Currencies
            $table->string('base_currency', 3)->default('USD');
            $table->string('settlement_currency', 3)->default('USD');
            $table->decimal('exchange_rate', 15, 6)->default(1);
            $table->decimal('converted_amount', 15, 2)->nullable();

            // User & Merchant
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('merchant_id')->constrained('merchants')->onDelete('cascade');
            $table->string('merchant_name')->nullable();
            $table->string('merchant_email')->nullable();

            // Admin initiator
            $table->string('requested_by')->nullable();
            $table->timestamp('requested_at')->nullable();

            // Amounts & Charges
            $table->decimal('gross_amount', 15, 2);
            $table->decimal('tax_percentage', 5, 2)->default(0);
            $table->decimal('tax_amount', 15, 2)->default(0);
            $table->decimal('rolling_balance_percentage', 5, 2)->default(0);
            $table->decimal('rolling_balance_amount', 15, 2)->default(0);
            $table->decimal('gateway_fee_percentage', 5, 2)->default(0);
            $table->decimal('gateway_fee', 15, 2)->default(0);
            $table->decimal('platform_commission', 15, 2)->default(0);
            $table->decimal('other_charges', 15, 2)->default(0);
            $table->decimal('adjustments', 15, 2)->default(0);
            $table->decimal('net_amount', 15, 2);

            // Payment Proof
            $table->json('payment_receipts')->nullable();

            // Status & Workflow
            $table->enum('status', ['pending', 'processing', 'approved', 'paid', 'decline'])->default('pending');
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('processing_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('failed_at')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_reference')->nullable();

            // Notes
            $table->text('remarks')->nullable();
            $table->string('rejection_reason')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settlements');
    }
};
