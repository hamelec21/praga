<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = "status";
    protected $fillable = ['status'];

    //relacion

    public function fixture()
    {
        return $this->hasMany(Fixture::class, 'id');
    }

    public function  resultados()
    {
        return $this->hasMany(Resultado::class, 'id');
    }


}
