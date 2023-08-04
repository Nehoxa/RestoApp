<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_menu');
    }
}
