<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employeeNumber';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'lastName',
        'firstName',
        'extension',
        'email',
        'officeCode',
        'reportsTo',
        'jobTitle'
    ];

    public function office()
    {
        return $this->belongsTo('App\Office', 'officeCode', 'officeCode');
    }

    public function reportsToEmployee()
    {
        return $this->belongsTo('App\Employee', 'reportsTo', 'employeeNumber');
    }

    public function subordinates()
    {
        return $this->hasMany('App\Employee', 'reportsTo', 'employeeNumber');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'customerNumber', 'customerNumber');
    }
}
