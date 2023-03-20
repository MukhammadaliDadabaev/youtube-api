<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    use HasFactory;

//---> 1-taga | ko'p -> one-to-many
    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

//---> 1-taga | 1-ta -> (inverse) belongs-To
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
