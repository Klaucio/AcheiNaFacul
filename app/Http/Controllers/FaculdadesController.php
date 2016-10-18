<?php

namespace App\Http\Controllers;

use App\Models\faculdade;
use Illuminate\Http\Request;

class FaculdadesController extends Controller
{
    /**
     * @var Role
     */
    protected $faculdades;

    public function __construct(faculdade $faculdades)
    {
        $this->faculdades = $faculdades;
    }

    /**
     * Show a list of roles
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $faculdades = $this->faculdades->get();

        return view('admin.faculdades.index', compact('faculdades'));
    }

    /**
     * Show a page of user creation
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.faculdades.create');
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
        $this->faculdades->create($request->only('designacao','abreviatura'));

        return redirect()->route('faculdades.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_created'));
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
        $faculdade = $this->faculdades->findOrFail($id);

        return view('admin.faculdades.edit', compact('faculdade'));
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
        $this->faculdades->findOrFail($id)->update($request->only('designacao','abreviatura'));

        return redirect()->route('faculdades.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_updated'));
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
        $this->faculdades->findOrFail($id)->delete();

        return redirect()->route('faculdades.index')->withMessage(trans('quickadmin::admin.roles-controller-successfully_deleted'));
    }
}

