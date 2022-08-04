<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brewerie extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name', 'description', 'url'];
}
