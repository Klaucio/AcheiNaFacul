<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\utente;
use Illuminate\Http\Request;

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
        $this->utentes->create($request->only('id','tipo','nome','regime','sala','telefone','curso_id','local_id'));

        return redirect()->route('auth.createUser')->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'))->with(compact('utentes'));
    }

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

