<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    /** @use HasFactory<\Database\Factories\SettlementFactory> */
    use HasFactory;

    protected $fillable = [
        // Basic Info
        'settlement_id',
        'settlement_date',
        'settlement_type',
        'settlement_method',

        // Currencies
        'base_currency',
        'settlement_currency',
        'exchange_rate',
        'converted_amount',

        // User & Merchant
        'user_id',
        'merchant_id',
        'merchant_name',
        'merchant_email',

        // Admin Request Details
        'requested_by',
        'requested_at',

        // Amounts & Charges
        'gross_amount',
        'tax_percentage',
        'tax_amount',
        'rolling_balance_percentage',
        'rolling_balance_amount',
        'gateway_fee_percentage',
        'gateway_fee',
        'platform_commission',
        'other_charges',
        'adjustments',
        'net_amount',

        // Payment Proof
        'payment_receipts',

        // Status & Workflow
        'status',
        'approved_by',
        'processing_at',
        'approved_at',
        'paid_at',
        'failed_at',
        'transaction_id',
        'payment_reference',

        // Notes & Remarks
        'remarks',
        'rejection_reason'
    ];

    protected $casts = [
        'settlement_date'    => 'datetime',
        'requested_at'       => 'datetime',
        'processing_at'      => 'datetime',
        'approved_at'        => 'datetime',
        'paid_at'            => 'datetime',
        'failed_at'          => 'datetime',
        'payment_receipts'   => 'array', // JSON field
    ];
}
