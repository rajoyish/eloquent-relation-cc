<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Referral extends Model
{
    use HasFactory;

    public function referralCode(): BelongsTo
    {
        return $this->belongsTo(ReferralCode::class);
    }

    public function user(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, ReferralCode::class, 'id', 'id', 'referral_code_id');
    }
}
