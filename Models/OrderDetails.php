<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetails';
    protected $primaryKey = null; // Composite primary key, so set it to null
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'orderNumber',
        'productCode',
        'quantityOrdered',
        'priceEach',
        'orderLineNumber'
    ];

    public $incrementing = false; // Disable auto-incrementing for composite key

    public function order()
    {
        return $this->belongsTo('App\Order', 'orderNumber', 'orderNumber');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'productCode', 'productCode');
    }
}
