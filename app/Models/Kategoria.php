<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;

    protected $fillable = [
        'katnev'
    ];

    public function tevekenyseg(){
        return $this->hasMany(Tevekenyseg::class,'kat_id');
    }

}
