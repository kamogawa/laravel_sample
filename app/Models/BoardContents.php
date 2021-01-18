<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardContents extends Model
{
    protected $table = 'board_contents';
    protected $fillable = [
        'id',
        'title',
        'reg_user_id',
        'reg_user_name',
        'view_count',
        'updated_at',
        'created_at'
    ];
    protected $hidden = [];
}