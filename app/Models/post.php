<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    //

    use HasFactory;
    protected $fillable = ['name', 'content', 'created_at', 'updated_at'];
}
