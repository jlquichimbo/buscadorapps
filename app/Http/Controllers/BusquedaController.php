<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use DB;
use Illuminate\Support\Facades\Auth;


class BusquedaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//        $keywords = DB::table('keywords')->lists('id', 'nombre');
//        $keywords['-1'] = 'Seleccionar';
//        return view('index', ['keywords' => $keywords]);
        
            return view('usuario.busquedas');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Validate the request...

        $busqueda = new \App\Busqueda;

        $busqueda->busqueda = $request->q;
        $busqueda->user_id = $request->user_id;
        $busqueda->keyword_id = $request->keyword_id;
        $busqueda->num_resultados = $request->num_results;

        $busqueda->save();
        return $busqueda->id;
    }
    /**
     * Store a newly bookmark created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBookmark(Request $request) {
        // Validate the request...

        $resultado = new \App\Resultados;

        $resultado->busqueda_id = $request->busqueda_id;
        $resultado->result_id = $request->result_id;
        $resultado->favorito = 1;

        $resultado->save();
        return $resultado->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id) {
        //
        
        $busquedas = DB::table('busquedas')
                ->join('keywords', 'busquedas.keyword_id', '=', 'keywords.id')
                ->select('keyword_id', 'busqueda', 'num_resultados', 'busquedas.created_at', 'keywords.nombre as keyword_name')
                ->where('user_id', '=', $user_id)
                ->get();
        return view('usuario.busquedas', ['busquedas'=>$busquedas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
