<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminInfo extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_info';
    protected $primaryKey = 'ID';
    public $timestamps = true;

    protected $fillable = [
        'admin_no',
        'admin_name',
        'admin_id',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}