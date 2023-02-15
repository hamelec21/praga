<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    //relaciones

    public function fixture()
    {
        return $this->hasMany(Fixture::class, 'id');
    }

    public function  resultados()
    {
        return $this->hasMany(Resultado::class, 'id');
    }



}
