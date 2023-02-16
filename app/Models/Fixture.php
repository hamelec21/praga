<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;
    protected $fillable = ['fecha','juega','club_id','club_id_1','temporadas_id','fechas_id','status_id'];


   // protected $fillable = ['fecha','juega','nombre_club_1','nombre_club_2','temporadas_id','fechas_id','status_id'];


    //relaciones
    public function temporadas()
    {
        return $this->belongsTo(Temporada::class, 'temporadas_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'status_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id',);
    }

    public function eq()
    {
        return $this->belongsTo(Club::class, 'club_id_1',);
    }

    public function temporada()
    {
        return $this->belongsTo(Temporada::class, 'temporadas_id',);
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


