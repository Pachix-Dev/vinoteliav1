<?php

namespace App\Http\Controllers;

// Modelos
use App\Models\Banner;
use App\Models\Estado;
use App\Models\Curso;
use App\Models\Boletine;
use App\Models\Testimonio;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public $cursos = null;

    public function __construct(){
            $this->cursos = Curso::all();
            $this->aviso = setting('site.privacidad');
    }

    public function index(Request $request){
        // carrito de compras
    $testimonios = Testimonio::where(['activo' => '1'])->take(4)->get();
    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'testimonios' => $testimonios,
      'cursos' => $this->cursos

    ];
    // regresamos la vista compilada
    return view('carrito.index' , $parametros);

    }

    // ajax para agregar carrito
    public function addProduct(Request $request){

    }
}
