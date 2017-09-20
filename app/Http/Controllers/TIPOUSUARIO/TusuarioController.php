<?php

namespace App\Http\Controllers\TIPOUSUARIO;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;

/**
 * MODEL
**/
use App\Models\USUARIOS\MUsuario;

class TusuarioController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function SQL(){
        
        $sql    = "select * from usuarios";
        
        return $sql;
    
    }
    public function manager(){

        $datos   = DB::select( DB::raw($this->SQL() ) );
        
        return view('INICIO.index')
            ->with('title','USUARIOS')
            ->with('query', $datos);

    }
    public function Form(){
        
        $usuario = MUsuario::where('USUA_USUARIO',1);
        
        $message = "BIENVENIDO USUARIO";
        if( is_null($usuario)){
            $message = "SIN USUARIO ACTIVO";
        }
        return view('INICIO.form')
            ->with('hola',$message);
    }

}
