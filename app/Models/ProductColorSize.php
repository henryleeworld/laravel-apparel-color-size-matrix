<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductColorSize extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'reference_number'
    ];

    /**
     * Get the product that owns the product color size.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the color that owns the product color size.
     */
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    /**
     * Get the size that owns the product color size.
     */
    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }
}
