<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = null; // Composite primary key, so set it to null
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'customerNumber',
        'checkNumber',
        'paymentDate',
        'amount'
    ];

    public $incrementing = false; // Disable auto-incrementing for composite key

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customerNumber', 'customerNumber');
    }
}
