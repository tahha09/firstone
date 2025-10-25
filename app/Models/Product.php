<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image',
        'stock_quantity',
        'is_active',
    ];

    // optional: scope for search/filter
    public function scopeFilter($query, $filters)
    {
        return $query
            ->when($filters['search'] ?? null, fn($q, $s) =>
                $q->where('name', 'like', "%{$s}%")
                    ->orWhere('description', 'like', "%{$s}%"))
            ->when($filters['category'] ?? null, fn($q, $c) =>
                $q->where('category', $c))
            ->when(isset($filters['active']), fn($q, $a) =>
                $q->where('is_active', $a));
    }
}
