<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

//-----> many-to-many
    public function videos(): BelongsToMany
    {
        return $this->belongsToMany(Video::class);
    }
}
