<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afirmador extends Model
{
  protected $table = "afirmadores";

  protected $fillable = ['nombreAfirmador', 'id_enlace'];

  public function enlaces(){
    return $this->belongsTo('App\Enlace');
  }

  public function nuevos_creyentes(){
    return $this->hasMany('App\Nuevo_creyente');
  }
}
