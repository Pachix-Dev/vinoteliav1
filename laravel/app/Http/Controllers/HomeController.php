<?php

namespace App\Http\Controllers;

// Modelos
use App\Models\Comentario;
use App\Models\Banner;
use App\Models\Ciudad;
use App\Models\Estado;
use App\Models\Curso;
use App\Models\Boletine;
use App\Models\Entradas;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;


// request
// use App\Http\Requests\ComentarioRequest;
use App\Http\Requests\InscripcionRequest;
use App\Mail\MensajeMail;
use App\Mail\BoletinMail;
use App\Models\Entrada;
use App\Models\Inscripcione;
use App\Models\Testimonio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;



class HomeController extends Controller
{


public $cursos = null;
public $aviso;

 public function __construct()
 {
     $this->cursos = Curso::all();
     $this->aviso = setting('site.privacidad');

 }

  public function index()
  {
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
    return view('home.index' , $parametros);
  }

  public function aviso()
  {
    $testimonios = Testimonio::where(['activo' => '1'])->take(4)->get();
    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'testimonios' => $testimonios,
      'cursos' => $this->cursos,
      'aviso' => $this->aviso
    ];
    // regresamos la vista compilada
    return view('aviso.index' , $parametros);
  }

  public function thankyou(){
    $testimonios = Testimonio::where(['activo' => '1'])->take(4)->get();
    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'testimonios' => $testimonios,
      'cursos' => $this->cursos,
      'thankyou' => true
    ];
    // regresamos la vista compilada
    return view('thankyou.index' , $parametros);

  }

  public function contacto()
  {
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
    return view('contacto.index' , $parametros);
  }

  public function export(){
    return Excel::download(new UsersExport, 'users.xlsx');
  }

  // cursos
  public function cursos(Request $request){
    $curso = Curso::where(['slug' => $request->slug])->first();
    if($curso){
        $testimonios = Testimonio::where(['activo' => '1' , 'id_curso' => $curso->id])->take(4)->get();
        if($testimonios->count() == 0){
            $testimonios = Testimonio::where(['activo' => '1'])->get();
        }
        // parametros enviados a la vista del curso
        $parametros = [
            'curso' => $curso,
            'cursos' => $this->cursos,
            'testimonios' => $testimonios
        ];
        // nombre de la vista que viene de la base de datos
        return view('cursos.interior' , $parametros);

    }else{
        // todos los cursos
        $testimonios = Testimonio::where(['activo' => '1'])->take(4)->get();
        $parametros = [
            'titulo' => 'Charlas de maridaje online - Vinotelia - Escuela de vino y cata',
            'cursos' => Curso::where('activo' , '1')->get(),
            'testimonios' => $testimonios,
            'description' => 'Aprende con expertos sobre maridaje de manera fácil, sencilla y sin costo. ¡Únete!',
            'keywords' => 'maridaje, tipos de maridaje, maridaje de vinos blancos suaves, maridaje de vinos blancos dulces, maridaje vinos tintos ligeros, maridaje vinos de tintos tánicos, maridaje de vinos tintos, maridaje de vinos blancos, maridaje de vinos rosados, maridaje comida mexicana, ejemplos de maridaje, ejemplos de maridaje de vinos.'
        ];
        return view('cursos.index' , $parametros);

    }
    return redirect('home');

  }

  function ciudades(Request $request){
    $id = $request->input('id');
    $ciudades = Ciudad::where('provincia' , $id)->get();
    return view('home.secciones.ciudad', compact('ciudades'))->render();
  }

  public function interior_blog(Request $request){
    $testimonios = Testimonio::where(['activo' => '1'])->take(4)->get();
    $entrada = Entrada::where(['activo' => '1' , 'slug' => $request->slug])->first();

    $parametros = [
        'testimonios' => $testimonios,
        'cursos' => $this->cursos,
        'entrada' => $entrada
    ];

    return view('blog.interior.index', $parametros);


  }

  public function blog(Request $request){
    $testimonios = Testimonio::where(['activo' => '1'])->take(4)->get();
    $entradas =  Entrada::where(['activo' => '1'])->get();

    // hardcoding blog
    $parametros = [
        'testimonios' => $testimonios,
        'cursos' => $this->cursos,
        'entradas' => $entradas
    ];

    if(isset($request->slug)){
        if($request->slug == 'claves-para-comprar-vino-por-internet'){
            // hardcoding blog
            $parametros = [
                'testimonios' => $testimonios,
                'cursos' => $this->cursos
            ];
            return view('blog.blog1.index', $parametros);
        }
    }

    return view('blog.index', $parametros);
  }

  public function sendInscripcion(InscripcionRequest $request){

    // validar primero que el curso exista
    $curso = Curso::where('id' , $request->idCurso)->first();

    if(!$curso){
        return response(['error'=>'Error al enviar tu mensaje']);
    }

    $inscripcion = new Inscripcione;
    $inscripcion->curso = $curso->nombre;
    $inscripcion->nombre = $request->input('txtNombre');
    $inscripcion->edad = $request->input('txtEdad');
    $inscripcion->direccion = $request->input('txtDireccion');
    $inscripcion->como = $request->input('txtComo');
    $inscripcion->email = $request->input('txtEmail');
    $inscripcion->telefono = $request->input('txtPhone');

    if($inscripcion->save()){
      // enviamos notificacion de email utilizando la clase
      Mail::to('info.vinotelia@gmail.com')->send(new MensajeMail($inscripcion));
      // enviamos respuesta al cliente
      if(!$request->ajax()){
        return redirect()->action('HomeController@thankyou');
        }
      return response(['msg'=>'Tu comentario ha sido enviado.']);

    }
    return response(['error'=>'Error al enviar tu mensaje']);
  }


  public function sendBoletin(Request $request){

    $validator = Validator::make($request->all(), [
        'email' => 'required'
    ]);

    if ($validator->fails()) {
        return response(['error'=>'Error al enviar tu email']);
    }

    $boletin = new Boletine;
    $boletin->email = $request->email;

    if($boletin->save()){
      // enviamos notificacion de email utilizando la clase
      Mail::to('info.vinotelia@gmail.com')->send(new BoletinMail($boletin));
      // enviamos respuesta al cliente
      return response(['msg'=>'Gracias por inscribirte a nuestro boletín.']);
    }
    return response(['error'=>'Error al enviar tu email']);
  }


}
