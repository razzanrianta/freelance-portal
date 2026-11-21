<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FreelancerProfile extends Model
{
    protected $fillable = [
        'user_id',
        'bio',
        'skills',
        'hourly_rate',
        'portfolio_url'
    ];

    protected function casts(): array {
        return [
            'skills' => 'array',
            'hourly_rate' => 'decimal:2'
        ];
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
