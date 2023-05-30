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
*/


use App\Exports\UsersExport;
use App\Exports\ComentariosExport;
use App\Exports\InscripcioneExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/carrito', 'ShopController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home.view');
Route::get('/aviso-de-privacidad', 'HomeController@aviso')->name('aviso');
Route::get('/blog/{slug}', 'HomeController@blog')->name('blog.view');
Route::get('/blog/entrada/{slug}', 'HomeController@interior_blog')->name('blog.interior');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/cursos', 'HomeController@cursos')->name('cursos');
Route::get('/cursos/{slug}', 'HomeController@cursos')->name('cursos.interior');
Route::get('/contacto', 'HomeController@contacto')->name('contacto');
Route::get('/thank-you', 'HomeController@thankyou')->name('thankyou');
Route::post('/contacto', 'HomeController@sendComentario')->name('contacto');
Route::post('/inscripcion', 'HomeController@sendInscripcion')->name('inscripciones');
Route::post('/boletines', 'HomeController@sendBoletin')->name('boletin');
Route::post('/ciudades', 'HomeController@ciudades')->name('ciudades');

Route::get('users/export/', 'HomeController@export');

Route::get('/download/App/Models/{model}',function($model){
    switch ($model){
      case 'Comentario':
      return Excel::download(new ComentariosExport, 'comentarios.xlsx');
      break;

      case 'Inscripcione':
        return Excel::download(new InscripcioneExport, 'inscripciones.xlsx');
        break;
    }
  });



Route::group(['prefix' => 'admTemplate'], function () {
  Voyager::routes();
});
