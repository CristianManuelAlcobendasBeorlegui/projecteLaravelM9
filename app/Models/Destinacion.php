<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinacion extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','province', 'country', 'picture_location']; 
}
