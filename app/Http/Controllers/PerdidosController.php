<?php

namespace App\Http\Controllers;

use App\Models\artigo;
use Illuminate\Support\Facades\Auth;
use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class PerdidosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create']]);
    }
    public function index()
    {
        //

        $perdidos=DB::table('artigos')->where('tipo','=','Perdido')->get();


        return view('Perdido.index')->with('perdidos',$perdidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=categoria::pluck('designacao','id');
        $artigo=new artigo();
        return View('Perdido.create',['categorias' => $categorias ],['artigo' => $artigo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
//            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'titulo' => 'required|max:255|min:3',
            'designacao' => 'required|min:3',
            'data' => 'required',
            'local' => 'required',
        ]);
        $artigo= new artigo(array (
            "titulo" => $request->get("titulo"),
            "designacao"=> $request->get("designacao"),
            "descricao"=> $request->get("descricao"),
            "data"=> $request->get("data"),
            "categoria_id"=>1,//>$request->get("categoria_id"),
            "local"=> $request->get("local"),
            "descricao_local"=> $request->get("descricao_local"),
            "tipo"=>$request->get("tipo"),
            "user_id" =>Auth::user()->id,
            "foto"=>$request->file("foto")->getClientOriginalName()
        ));

        $request->file("foto")->move( base_path() . '/public/img' , $request->file("foto")->getClientOriginalName());

        $artigo->save();
        return back()
            ->with('success','Perdido Reportado com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artigo=artigo::find($id);
//        dd($artigo);
        return view('Perdido.show',compact('artigo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artigo=artigo::find($id);
        $categorias=categoria::pluck('designacao','id');
        return View('Perdido.create',['categorias' => $categorias ],['artigo' => $artigo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
