<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    Use SoftDeletes;
    protected $fillable = ['nama', 'nim', 'email', 'prodi'];
    // atau 
    // protected $guarded = ['id'];
}
