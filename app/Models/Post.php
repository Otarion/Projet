<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $with =['category'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFilters(Builder $query, array $filters): Builder
    {
        if (isset($filters['search'])) {
            $query->where(function ($query) use ($filters) {
                $query->where('title', 'LIKE', '%'. $filters['search']. '%')
                    ->orWhere('content', 'LIKE', '%'. $filters['search']. '%');
            });
        }
    
        if (isset($filters['category'])) {
            $categoryId = isset($filters['category']->id)? $filters['category']->id : $filters['category'];
            $query->where('category_id', $categoryId);
        }
    
        return $query; // Retourne le résultat modifié de la requête
    }
    

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
