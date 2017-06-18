<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Privilege;
use Illuminate\Http\Request;
use Session;

class PrivilegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $privileges = Privilege::where('nama', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $privileges = Privilege::paginate($perPage);
        }

        return view('privileges.index', compact('privileges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('privileges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Privilege::create($requestData);

        Session::flash('flash_message', 'Privilege added!');

        return redirect('privileges');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $privilege = Privilege::findOrFail($id);

        return view('privileges.show', compact('privilege'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $privilege = Privilege::findOrFail($id);

        return view('privileges.edit', compact('privilege'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $privilege = Privilege::findOrFail($id);
        $privilege->update($requestData);

        Session::flash('flash_message', 'Privilege updated!');

        return redirect('privileges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Privilege::destroy($id);

        Session::flash('flash_message', 'Privilege deleted!');

        return redirect('privileges');
    }
}
