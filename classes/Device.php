<?php
namespace Scanner;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Device extends Eloquent
{
    protected $fillable = [
        'name','ipaddr','macaddr'
    ];

    protected $hidden = [
        'password'
    ];
}