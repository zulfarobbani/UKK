<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fashot extends Model
{
    use HasFactory;
    protected $table = 'fashot';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
