<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\curso;
use App\Models\local_trabalho;
use App\Models\utente;
use Illuminate\Http\Request;
use Redirect;

class UtentesController extends Controller
{
    /**
     * @var Role
     */
    protected $utentes;

    public function __construct(utente $utentes)
    {
        $this->utentes = $utentes;
    }

    /**
     * Show a list of roles
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $utentes = $this->utentes->get();

        return view('admin.utentes.index', compact('utentes'));
    }

    /**
     * Show a page of user creation
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cursos=curso::pluck('designacao','id');
        return view('admin.utentes.createUte')->with(compact('cursos'));
    }

    /**
     * Insert new role into the system
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->utentes->id=$request->input('id');
        $this->utentes->tipo=$request->input('tipo');
        $this->utentes->nome=$request->input('nome');
        $this->utentes->telefone=$request->input('telefone');


        if ($request->input('tipo').equalToIgnoringCase('Funcionário') and $request->has('designacao')
                and $request->has('descricao')){
//            dd($request->input('designacao'));
            $local_Trabalho=new local_trabalho();
            //$fk_local recebe o novo local de trabalho com a chave primaria
            $fk_local=$local_Trabalho->create($request->only('designacao','descricao'));

            $fk_local->utente()->save($this->utentes);
            $utente=$request->input('id');//variavel usada para mandar para a view de novo utilizador

            return redirect()->route('newUser', compact('utente'))->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'))->with (compact('utente'));

        }elseif ($request->input('tipo').equalToIgnoringCase('Estudante') and $request->has('curso_id') and $request->has('regime') and $request->has('sala') and $request->input('id')>2000){

            $this->utentes->regime=$request->input('regime');
            $this->utentes->sala=$request->input('sala');
            $this->utentes->curso_id=$request->input('curso_id');
            $this->utentes->save();
            $utente=$request->input('id');
//            echo $utente;
            return redirect()->route('newUser',compact('utente'))->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'));

        }

        return redirect()->back();
    }

//    public function isStudent($request){
//        if($request->has('curso_id') and $request->has('regime') and $request->has('sala') and $request->input('id')>2000){
//            return true;
//        }
//        return false;
//    }

    /**
     * Show a role edit page
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $utente = $this->utentes->findOrFail($id);

        return view('admin.utentes.edit', compact('utente'));
    }

    /**
     * Update our role information
     *
     * @param Request $request
     * @param         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->utentes->findOrFail($id)->update($request->all());

        return redirect()->route('utentes.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_updated'));
    }

    /**
     * Destroy specific role
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->utentes->findOrFail($id)->delete();

        return redirect()->route('utentes.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_deleted'));
    }
}

