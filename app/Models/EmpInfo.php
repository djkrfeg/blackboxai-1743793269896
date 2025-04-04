<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EmpInfo extends Authenticatable
{
    use HasFactory;

    protected $table = 'emp_info';
    protected $primaryKey = 'ID';
    public $timestamps = true;

    protected $fillable = [
        'emp_no',
        'emp_name',
        'emp_city',
        'gender',
        'DOB',
        'mobile_no',
        'aadhar_no',
        'emp_id',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}