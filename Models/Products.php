<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'productCode';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'productName',
        'productLine',
        'productScale',
        'productVendor',
        'productDescription',
        'quantityInStock',
        'buyPrice',
        'MSRP'
    ];

    public function productLineInfo()
    {
        return $this->belongsTo('App\ProductLine', 'productLine', 'productLine');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail', 'productCode', 'productCode');
    }
}
