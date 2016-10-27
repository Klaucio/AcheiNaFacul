<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('/', 'HomeController');
Route::resource('perdidos', 'PerdidosController');
Route::resource('achados', 'AchadosController');
Route::resource('utentes', 'UtentesController');
Route::resource('/teste', 'testeController');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('departamentos/{id} ',function ($id){
    return 'teste '.$id;
//            $faculdade = \App\Models\faculdade::findOrFail($id);
//            return view('admin.departamentos.addDep', compact('faculdade'));
});
Route::get('departamentos/{id}/createWithId', ['as' => 'newDept', function ($id) {
    //
    $faculdade = \App\Models\faculdade::findOrFail($id);
    return view('admin.departamentos.createWithId', compact('faculdade'));
}]);
Route::get('cursos/{id}/createWithId', ['as' => 'newCourse', function ($id) {
    //
    $departamento = \App\Models\departamento::findOrFail($id);
    return view('admin.cursos.createWithId', compact('departamento'));
}]);
Route::get('users/{id}/createWithId', ['as' => 'newUser', function ($id) {
    //
    $utente = $id;//\App\Models\utente::findOrFail($id)
//    dd($utente);
    return view('auth.register', compact('utente'));
}]);
