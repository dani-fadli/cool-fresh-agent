<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Order status model
 *
 * @mixin \Illuminate\Database\Eloquent\Builder)
 */
class OrderStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sequence',
        'slug',
        'created_at',
        'updated_at'
    ];

    // Relations
    /**
     * One order status has many orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * One order status has many order histories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function histories(): HasMany
    {
        return $this->hasMany(OrderHistory::class);
    }
}
