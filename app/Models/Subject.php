<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = 'subject';
    
    protected $fillable = [
        'sub_name',
        'sub_details',
        'sub_status',
        'user_id',
    ];
}
