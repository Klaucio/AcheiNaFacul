<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * @var Role
     */
    protected $categorias;

    public function __construct(categoria $categoria)
    {
        $this->categorias = $categoria;
    }

    /**
     * Show a list of roles
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categorias = $this->categorias->get();

        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show a page of user creation
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categorias.create');
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
        $this->categorias->create($request->only('designacao'));

        return redirect()->route('categorias.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'));
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
        $categoria = $this->categorias->findOrFail($id);

        return view('admin.categorias.edit')->with(compact('categoria'));
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
        $this->categorias->findOrFail($id)->update($request->only('designacao'));

        return redirect()->route('categorias.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_updated'));
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
        $this->categorias->findOrFail($id)->delete();

        return redirect()->route('categorias.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_deleted'));
    }

}

