<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekdayloop extends Model
{
    use HasFactory;

    protected $table = 'weekdayloop';

    protected $fillable = ['name'];
}
