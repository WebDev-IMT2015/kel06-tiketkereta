<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;

class PembelianController extends Controller
{
     public function index()
    {
    	$beli = Pembelian::all();
    	return view('home')->with('home', $beli);
    }
    public function edit($id)
    {
        $beli = Pembelian::all();
        $beli_edit = Pembelian::find($id);
        return view('home')->with('home', $beli)->with('beli_edit', $beli_edit);
    }
    public function store(Request $request)
    {
    	$name = $request->input('name');
    	$alamat = $request->input('alamat');
    	$nomor_hp = $request->input('nomor_hp');
    	$nomor_ktp = $request->input('nomor_ktp');
    	$beli = new Pembelian;
    	$beli->name = $name;
    	$beli->alamat = $alamat;
    	$beli->nomor_hp = $nomor_hp;
    	$beli->nomor_ktp = $nomor_ktp;
    	$beli->save();

    	$beli = Pembelian::all();
    	return view('home')->with('home', $beli);
    }

    public function destroy(Request $request, Pembelian $beli)
	{
   	  $beli->delete();

   	  return redirect('home');
	}
    public function update(Request $request)
    {
        $id_beli = $request->input('id');
        $beli = Pembelian::find($id_beli);
        $beli->name = $request->input('name');
        $beli->alamat = $request->input('alamat');
        $beli->nomor_hp = $request->input('nomor_hp');
        $beli->nomor_ktp = $request->input('nomor_ktp');
        $beli->save();

        return redirect('beli');
    }
}
