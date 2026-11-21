<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Job extends Model
{
    protected $fillable = [
        'client_id',
        'title',
        'description',
        'budget',
        'deadline',
        'status'
    ];

    protected function casts(): array {
        return [
            'budget' => 'decimal:2',
            'deadline' => 'date'
        ];
    }

    public function client(): BelongsTo {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function proposals(): HasMany {
        return $this->hasMany(Proposal::class);
    }

    public function contract(): HasOne {
        return $this->hasOne(Contract::class);
    }
}
