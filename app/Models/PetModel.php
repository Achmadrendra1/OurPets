<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetModel extends Model
{
    use HasFactory;
    protected $table = 'pet';
    protected $primaryKey = 'petid';
}
