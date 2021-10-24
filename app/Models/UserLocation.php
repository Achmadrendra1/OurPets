<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    use HasFactory;

    public $table = "user_location";

    protected $fillable = [
        'userid','locid','loc_name','latitude','longitude','states','city','zipcode','input_date','status'  
    ];
}
