<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use App\Models\faculdade;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * @var Role
     */
    protected $departamentos;

    public function __construct(departamento $departamentos)
    {
        $this->departamentos = $departamentos;
    }

    /**
     * Show a list of roles
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $departamentos = $this->departamentos->get();

        return view('admin.departamentos.index', compact('departamentos'));
    }

    /**
     * Show a page of user creation
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $faculdades=faculdade::pluck('designacao','id');
        return view('admin.faculdades.create',compact('faculdades'));
    }

    public function createWithId($id)
    {
        $faculdade = faculdade::findOrFail($id);

        return view('admin.departamentos.createWithId', compact('faculdade'));
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
        $this->departamentos->create($request->only('faculdade_id','designacao','abreviatura'));

        return redirect()->route('departamentos.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'));
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
        $departamento = $this->departamentos->findOrFail($id);
        $faculdades=faculdade::pluck('designacao','id');

        return view('admin.departamentos.edit')->with(compact('faculdades'))->with(compact('departamento'));
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
        $this->departamentos->findOrFail($id)->update($request->only('faculdade_id','designacao','abreviatura'));

        return redirect()->route('departamentos.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_updated'));
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
        $this->departamentos->findOrFail($id)->delete();

        return redirect()->route('departamentos.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_deleted'));
    }

}

