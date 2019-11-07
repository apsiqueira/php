<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola/sejabemvindo', function () {
    echo 'ola seja bem vindo';
});



//rotas de acesso recebendo dois parametros sendo o segundo opcional
Route::get('/ola/{nome}/{sobrenome?}', function ($nome,$sobremone=null) {
    echo 'ola seja bem vindo '.$nome.' '.$sobremone;
});


//rotas de acesso recebendo dois parametros sendo o segundo opcional e com expressão regular
Route::get('/rotacomregras/{nome}/{n}', function ($nome,$n) {
    for ($i=0; $i < $n ; $i++) { 

        echo'ola bem vindo {$nome} <br>';
    }
})->where ('nome','[A-Za-z]+')
->where('n','[0-9]+');


*/

use Illuminate\Http\Request;


        Route::get('/', function () {
            echo 'tela inicial produto';
            return view('produto');
        })->name('home.Produto');

Route::resource('usuarios', 'ControleUsuario');