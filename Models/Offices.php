<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'offices';
    protected $primaryKey = 'officeCode';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'city',
        'phone',
        'addressLine1',
        'addressLine2',
        'state',
        'country',
        'postalCode',
        'territory'
    ];

    public function employees()
    {
        return $this->hasMany('App\Employee', 'officeCode', 'officeCode');
    }
}
