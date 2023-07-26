<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidequest extends Model
{
    use HasFactory;
    protected $table = 'sidequests';
    protected $fillable = ['content', 'id_list'];
}
