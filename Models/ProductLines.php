<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $table = 'productlines';
    protected $primaryKey = 'productLine';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'textDescription',
        'htmlDescription',
        'image'
    ];

    public function products()
    {
        return $this->hasMany('App\Product', 'productLine', 'productLine');
    }
}
