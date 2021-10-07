<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'component',
        'category_id',
        'regimen',
        'effect',
        'img_url',
    ];

    public function scopeSearch(Builder $query, $params)
    {
        if (!empty($params['name'])) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }
        if (!empty($params['category'])) {
            $query->whereHas('Category', function ($q) use ($params) {
                $q->where('name', 'like', '%' . $params['category'] . '%');
            });
        }
        return $query;
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
