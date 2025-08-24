<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunningBalance extends Model
{
    /** @use HasFactory<\Database\Factories\RunningBalanceFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'settlement_id',
        'opening_balance',
        'transaction_amount',
        'closing_balance',
        'transaction_type', // 'credit' or 'debit'
        'description',
        'created_at',
        'updated_at',
    ];

    /**
     * Optional: Cast transaction_type as string, balances as float
     */
    protected $casts = [
        'opening_balance' => 'float',
        'transaction_amount' => 'float',
        'closing_balance' => 'float',
        'transaction_type' => 'string',
    ];

    /**
     * Relation to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Optional Relation to Settlement
     */
    public function settlement()
    {
        return $this->belongsTo(Settlement::class);
    }
}
