<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\estado;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * @var Role
     */
    protected $estados;

    public function __construct(estado $estado)
    {
        $this->estados = $estado;
    }

    /**
     * Show a list of roles
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $estados = $this->estados->get();

        return view('admin.estados.index', compact('estados'));
    }

    /**
     * Show a page of user creation
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.estados.create');
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
        $this->estados->create($request->only('designacao'));

        return redirect()->route('estados.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'));
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
        $estado = $this->estados->findOrFail($id);

        return view('admin.estados.edit')->with(compact('estado'));
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
        $this->estados->findOrFail($id)->update($request->only('designacao'));

        return redirect()->route('estados.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_updated'));
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
        $this->estados->findOrFail($id)->delete();

        return redirect()->route('estados.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_deleted'));
    }

}

