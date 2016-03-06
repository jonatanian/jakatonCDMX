<?php

class MapatonController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$rutas = Cetram::all()->lists('NAME','id');
		//echo '<script type="text/javascript">alert("' . $rutas . '")</script>';
		return View::make('mapaton.hello', array('rutas'=>$rutas));
	}

	public function busqueda()
	{
		$dato = Input::all();
		$ruta = Cetram::where('id',$dato['origen'])->first();
		$distancia = $ruta['distancia'];
		$tiempo = $ruta['tiempo'];
		$velocidad = $distancia/($tiempo/60);
		$rutas = Cetram::all()->lists('NAME','id');
		//echo '<script type="text/javascript">alert("' . $rutas . '")</script>';
		//Session::flash('msg','Nueva sección creada correctamente.');
		return View::make('mapaton.result', array('rutas'=>$rutas, 'ruta'=>$ruta, 'velocidad'=>$velocidad));
	}

}
