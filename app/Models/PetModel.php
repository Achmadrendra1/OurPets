<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetModel extends Model
{
    use HasFactory;
    protected $table = 'user_pet';
    protected $primaryKey = 'petid';

    public function User()
    {
        //1 Data untuk 1 User
        return $this->belongsTo(User::class);
    }
}
