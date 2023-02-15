<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table ="series";
    protected $fillable = ['nombre','tipo_serie_id','club_id'];


    //relaciones

    public function tipo()
    {
        return $this->belongsTo(TipoSerie::class, 'tipo_serie_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function  resultados()
    {
        return $this->hasMany(Resultado::class, 'id');
    }



}
