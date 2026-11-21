<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'contract_id',
        'amount',
        'status',
        'paid_at'
    ];

    protected function casts(): array {
        return [
            'amount' => 'decimal:2',
            'paid_at' => 'datetime'
        ];
    }

    public function contract(): BelongsTo {
        return $this->belongsTo(Contract::class);
    }
}
