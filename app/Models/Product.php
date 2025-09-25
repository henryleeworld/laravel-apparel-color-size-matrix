<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'code'
    ];

    /**
     * Get the product color sizes for the product.
     */
    public function productColorSizes(): HasMany
    {
        return $this->hasMany(ProductColorSize::class, 'product_id');
    }
}
