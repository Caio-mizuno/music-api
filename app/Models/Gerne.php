<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerne extends Model
{
    use HasFactory;

    protected $table = 'public.genres';
    protected $fillable = ['name'];

}
