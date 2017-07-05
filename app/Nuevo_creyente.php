<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nuevo_creyente extends Model
{
    protected $table = "nuevos_creyentes";

    protected $fillable = ['id', 'nombrePersona', 'ano', 'fechaServicio', 'descripcion', 'edad', 'dire', 'telf', 'email', 'invitacion', 'oracion', 'lider', 'id_afirmador'];

    public function afirmadores(){
      return $this->belongsTo('App\Afimador');
    }
}
