<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

  


Route::get('/', function (Request $request) {
    
        if(Auth::guest()){
        return view('auth.login');
    }
        if(Auth::user()){
        $role=Role::all();
        foreach($role as $rol){
            if($rol->name==Auth::user()->rol){
                $name_rol=$rol->name;
            }
        }
        if ($name_rol=="admin2") {
            return redirect('/user');
        } 
        if($name_rol=="cliente2"|| $name_rol=="cliente_master2")
       
        return view('user_cliente.index')->with('success','Bienvenido Usuario'.Auth::user()->name);
        }
    });


 
   
    Route::group(['middleware' => ['role:admin2','permission:vistas_admin2']], function () {
    Route::resource('noticia', 'App\Http\Controllers\NoticiaController');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('alicuota', 'App\Http\Controllers\AlicuotaController');
    Route::resource('reserva', 'App\Http\Controllers\EventoController');
       });
        
    Route::group(['middleware' => ['role:cliente2||cliente_master2']], function () {
        
    Route::get('/index', function () { return view('user_cliente.index');});
    Route::get('/normas', function () {return view('user_cliente.normas');});
    Route::resource('noticia_cliente', 'App\Http\Controllers\Noticia_userController');
    Route::resource('alicuota_cliente', 'App\Http\Controllers\Alicuota_userController');
    Route::resource('user_cliente', 'App\Http\Controllers\User_clienteController');
    Route::resource('eventos', 'App\Http\Controllers\EventosController');
    Route::resource('canchas', 'App\Http\Controllers\CanchasController');
    Route::resource('albercas', 'App\Http\Controllers\AlbercasController');
    Route::resource('picinas', 'App\Http\Controllers\PicinasController');
    Route::resource('campos', 'App\Http\Controllers\CamposController');
           });
    