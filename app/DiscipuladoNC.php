<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscipuladoNC extends Model
{
    protected $table = "discipuladonc";

    protected $fillable = ['Cedula', 'genero','fechaIni', 'fechaFin', 'clase1', 'clase2', 'clase3', 'clase4', 'clase5', 'clase6', 'clase7', 'clase8', 'total', 'dicipulador', 'id_creyente'];

    public function nuevo_creyentes(){
    	return $this->hasOne(App\DiscipuladoNC);
    }
}




           