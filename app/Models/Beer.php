<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $fillable = ['name', 'description', 'country', 'brand', 'vol'];
}
