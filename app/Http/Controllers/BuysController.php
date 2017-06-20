<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Buy;
use App\Train;
use Illuminate\Http\Request;
use Session;
use DB;

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

    public function history(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $buys = DB::table('buys')
            ->join('trains', 'trains.id_kereta', '=', 'buys.id_kereta')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('buys.*', 'trains.*')
            ->where('buys.id', 'LIKE', "%$keyword%")
            ->paginate(25);
        } else {
             $buys = DB::table('buys')
            ->join('trains', 'trains.id_kereta', '=', 'buys.id_kereta')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('buys.*', 'trains.*')
            ->paginate(25);
        }
       
        return view('buys.history', compact('buys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $trains = Train::all(['id_kereta', 'kode_kereta', 'nama_kereta', 'jumlah_gerbong', 'kapasitas_per_gerbong', 'tujuanawal', 'tujuanakhir', 'jamberangkat', 'jamtiba']);
        return view('buys.create', compact('trains'));
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
        
         if(Buy::create($requestData))
        {
            $trains = Train::findOrFail($request->input('id_kereta'));
            $trains->kapasitas_per_gerbong = $trains->kapasitas_per_gerbong - 1;
            $trains->update();
        }

        Session::flash('flash_message', 'Buys added!');

        return redirect('buys');
        Buy::create($requestData);

        // Session::flash('flash_message', 'Buy added!');

        // return redirect('buys');
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

     public function print(Request $request)
    {


        $buy = Buy::all();
        return view('buys.print')->with('buys', $buy);
        
    }

}
