<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{

    protected $fillable = ['club_id_1','resultado_local','resultado_visita','club_id','fechas_id','temporadas_id','serie_id','status_id','tiposerie'];
    use HasFactory;

    //relaciones

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function eq()
    {
        return $this->belongsTo(Club::class, 'club_id_1',);
    }

    public function temporada()
    {
        return $this->belongsTo(Temporada::class, 'temporadas_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'status_id');
    }

    public function tipos()
    {
        return $this->belongsTo(TipoSerie::class, 'tiposerie');
    }

    public function logo()
    {
        return $this->hasOne('App\Models\Club', 'id','club_id');
    }

    public function log()
    {
        return $this->hasOne('App\Models\Club', 'id','club_id_1');
    }

}




