<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'agent_id',
        'status_id',
        'is_returned',
        'created_at',
        'updated_at'
    ];

    // Relations
    /**
     * One order belongs to one agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    /**
     * One order belongs to one order status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class, 'status_id');
    }

    /**
     * One order belongs to many products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products')
            ->withPivot([
                'name',
                'quantity',
                'price',
                'total_price',
                'image_url'
            ]);
    }

    /**
     * One order has one order deliveries
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function delivery(): HasOne
    {
        return $this->hasOne(OrderDelivery::class);
    }

    /**
     * One order has many order histories
     *
     * @return HasMany
     */
    public function histories(): HasMany
    {
        return $this->hasMany(OrderHistory::class);
    }
}
