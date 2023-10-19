<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'orderNumber';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'orderDate',
        'requiredDate',
        'shippedDate',
        'status',
        'comments',
        'customerNumber'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customerNumber', 'customerNumber');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail', 'orderNumber', 'orderNumber');
    }
}
