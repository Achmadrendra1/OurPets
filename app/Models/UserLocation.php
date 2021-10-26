<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    use HasFactory;

    protected $table = "user_location";
    // protected $primaryKey = "id";

    protected $fillable = [
        'userid',
        'loc_name',
        'latitude',
        'longitude',
        'states',
        'city',
        'zipcode',
        'input_date',
        'status'  
    ];
}
