<?php

namespace App\Enums;

use App\Models\Currency;

enum CurrencyEnum: string
{
    /**
     * Ye method DB se sari currencies fetch karega aur
     * select options ke liye array banayega
     */
    public static function options(): array
    {
        return Currency::where('status',1)->pluck('name', 'code')->toArray();
    }
}
