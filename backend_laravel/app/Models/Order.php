<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable =
    ['
        OrderNo','
        CustomerID','
        PMethod','
        GTotal','
        DeletedOrderItemIDs','
        Paid'
    ];
    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'CustomerID');
    }
    public function OrderItems(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'OrderItem', 'OrderID', 'ItemID')->withPivot('Quantity');
    }
}