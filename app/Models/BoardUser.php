<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardUser extends Model
{
    protected $table = 'board_users';
    protected $fillable = ['id', 'email', 'password', 'name'];
    protected $hidden = ['password'];
}
