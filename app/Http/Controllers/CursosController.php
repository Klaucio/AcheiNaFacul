<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\departamento;
use App\Models\faculdade;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * @var Role
     */
    protected $cursos;

    public function __construct(curso $curso)
    {
        $this->cursos = $curso;
    }

    /**
     * Show a list of roles
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cursos = $this->cursos->get();

        return view('admin.cursos.index', compact('cursos'));
    }

    /**
     * Show a page of user creation
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.faculdades.create');
    }

    public function createWithId($id)
    {
        $departamento = $this->departamento->findOrFail($id);

        return view('admin.cursos.createWithId', compact('departamento'));
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
        $this->cursos->create($request->only('departamento_id','designacao'));

        return redirect()->route('cursos.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'));
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
        $curso = $this->cursos->findOrFail($id);
        $departamentos=departamento::pluck('designacao','id');

        return view('admin.cursos.edit')->with(compact('curso'))->with(compact('departamentos'));
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
        $this->cursos->findOrFail($id)->update($request->only('designacao','abreviatura'));

        return redirect()->route('cursos.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_updated'));
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
        $this->cursos->findOrFail($id)->delete();

        return redirect()->route('cursos.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_deleted'));
    }

}

