<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'date',
        'day',
        'n',
        'subgroup',
        'lesson',
        'type',
        'location',
        'teacher'   
    ];

    // public function userRole()
    // {
    //     return $this->hasOne(UserRole::class, 'id', 'user_role_id');
    // }

}
