<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = [
        'username',
        'fullName',
        'birthdate',
        'phone',
        'address',
        'email',
        'password'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}