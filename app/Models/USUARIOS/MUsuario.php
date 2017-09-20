<?php

namespace App\Models\USUARIOS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class MUsuario extends Model
{

    protected $table = 'usuarios';

    protected $primarykey = 'USUA_USUARIO';
    /**
     * RELACION UNO A UNO
    **/
    public function tipousuario(){
    	return $this->hasOne('App\Models\TIPOUSUARIO\MTipoUsuario', 'TUSU_TUSUARIO', 'USUA_TIPO_USUARIO');
    }
}