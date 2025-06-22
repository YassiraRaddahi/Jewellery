<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderlines()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function getTotalOrderPriceAttribute()
    {
        return $this->getRelationValue('orderlines')->sum(function ($orderline)
        {
           return $orderline->quantity * $orderline->price_at_order_time;
        });
    }

    public function getTotalProductsOrderAttribute()
    {
        return $this->getRelationValue('orderlines')->sum('quantity');
    }

    public function getOrderDateAttribute()
    {
        return $this->created_at->format('d-m-Y');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id'
    ];

}
