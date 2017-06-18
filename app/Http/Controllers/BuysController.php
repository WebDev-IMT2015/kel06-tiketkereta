<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Buy;
use Illuminate\Http\Request;
use Session;

class BuysController extends Controller
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
            $buys = Buy::where('nama', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $buys = Buy::paginate($perPage);
        }

        return view('buys.index', compact('buys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('buys.create');
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
        
        Buy::create($requestData);

        Session::flash('flash_message', 'Buy added!');

        return redirect('buys');
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
        $buy = Buy::findOrFail($id);

        return view('buys.show', compact('buy'));
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
        $buy = Buy::findOrFail($id);

        return view('buys.edit', compact('buy'));
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
        
        $buy = Buy::findOrFail($id);
        $buy->update($requestData);

        Session::flash('flash_message', 'Buy updated!');

        return redirect('buys');
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
        Buy::destroy($id);

        Session::flash('flash_message', 'Buy deleted!');

        return redirect('buys');
    }
}
