<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = "kamar";
    protected $primaryKey = "id";
    // protected $fillable = [
    //     'id', 'nama_kamar', 'harga', 'stock', 'dipakai', 'dipesan', 'gambar'
    // ];
    protected $guarded = ['id'];

    public function Faskam(){

        return $this->hasMany(Faskam::class, 'kamar_id', 'id')->get();
    }
}
