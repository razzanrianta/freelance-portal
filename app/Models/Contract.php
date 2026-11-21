<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contract extends Model
{
    protected $fillable = [
        'job_id',
        'proposal_id',
        'agreed_amount',
        'start_date',
        'end_date',
        'status'
    ];

    protected function casts(): array {
        return [
            'agreed_amount' => 'decimal:2',
            'start_date' => 'date',
            'end_date' => 'date'
        ];
    }

    public function job(): BelongsTo {
        return $this->belongsTo(Job::class);
    }

    public function proposal(): BelongsTo {
        return $this->belongsTo(Proposal::class);
    }

    public function payments(): HasMany {
        return $this->hasMany(Payment::class);
    }
}
