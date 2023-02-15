<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $table = "clubes";

    protected $fillable = ['nombre','logo'];

    //relaciones
    public function serie()
    {
        return $this->hasMany(Serie::class, 'id');
    }


    public function  resultados()
    {
        return $this->hasMany(Resultado::class, 'id');
    }

    public  function fixture()
    {
        return $this->hasMany(Fixture::class, 'id');
    }





}
