<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Encyclopedia extends Model
{
    use HasFactory;

    public function getRouteKeyName():string
    {
        return 'slug';
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function subtypes():BelongsToMany
    {
        return $this->belongsToMany(SubType::class);
    }
}