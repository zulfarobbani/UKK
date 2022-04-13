<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskam extends Model
{
    use HasFactory;

    protected $table = 'faskam';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    

    public function Kamar(){

        return $this->belongsTo(Kamar::class)->get();
    }
}
