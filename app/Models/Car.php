<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'plate_number',
        'fuel',
        'in_use',
        'need_rapir',
        'company_vehicle'
    ];

}
