<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'address',
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function (Order $order) {
            $order->invoice_id = Order::query()->max('invoice_id') + 1;
        });
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class)
            ->as('orderProduct')
            ->withPivot('price', 'quantity')
            ->withTimestamps();
    }
}
