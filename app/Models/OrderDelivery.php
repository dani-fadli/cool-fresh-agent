<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDelivery extends Model
{
    protected $fillable = [
        'order_id',
        'delivery_number',
        'address',
        'driver_name',
        'vehicle_number',
        'created_at',
        'updated_at'
    ];

    // Relations
    /**
     * One order delivery belongs to one order
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
