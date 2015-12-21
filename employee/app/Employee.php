<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //database name
    protected $table = 'employee';
    // allow field that will insert into database
     protected $fillable = ['name', 'address', 'telephone' , 'salary' , 'data_of_birth' , 'data_of_hire' ];
     
}
