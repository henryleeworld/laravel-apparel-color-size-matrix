<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'code'])]
class Product extends Model
{
    /**
     * Get the product color sizes for the product.
     */
    public function productColorSizes(): HasMany
    {
        return $this->hasMany(ProductColorSize::class, 'product_id');
    }
}
