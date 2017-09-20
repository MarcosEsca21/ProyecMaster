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
use App\Http\Controllers\INICIO\TusuarioController;

class TusuarioManagerController extends Controller
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

    

    public function manager(){
        
        $inicio = new InicioController();
        $view   = $inicio->manager();
        
        return view('INICIO.manager')
            ->with('hola','bienvenido')
            ->with('view',$view);
    }

}
