<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSerie extends Model
{
    use HasFactory;
    protected $fillable = ['tipo'];


    //relaciones

    public function serie()
    {
        return $this->hasMany(Serie::class, 'id');
    }

    public function  resultados()
    {
        return $this->hasMany(Resultado::class, 'id');
    }


}
