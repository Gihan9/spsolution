<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table = 'delivery';

    protected $fillable = [
        
        'pickup_address',
        'Pickup_name',
        'Pickup_contact',
        'Pickup_email',
        'delivery_address', 
        'delivery_contact',
        'delivery_email',
        'Type_of_good',
        'status',
        'priority',
        'pickup_date',
        'Pickup_time',
        'package_description',
        'length',
        'height', 
        'width',
        'weight',
        'extraone',
        'extratwo',
        
        
    ];
}
