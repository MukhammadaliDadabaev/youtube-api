<?php

namespace App\Models;

use App\Enums\Period;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Video extends Model
{
    use HasFactory;

//---> 1-taga | Ko'p -> (inverse) belongs-To
    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }

//----->  many-to-many
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

//    DATE-FILTER FUNC
    public function scopeFromPeriod($query, ?Period $period)
    {
        return $period ? $query->where('created_at', '>', $period->date()) : $query;
    }
}
