<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customerNumber';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'customerName',
        'contactLastName',
        'contactFirstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode',
        'country',
        'salesRepEmployeeNumber',
        'creditLimit'
    ];

    public function salesRep()
    {
        return $this->belongsTo('App\Employee', 'salesRepEmployeeNumber', 'employeeNumber');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'customerNumber', 'customerNumber');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment', 'customerNumber', 'customerNumber');
    }
}
