<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kereta;
use Session;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //create a variable and store all the blog post in it from the database
        $posts = Kereta::all();
        //return a view and pass in the above variable
        return view('posts.indexMahasiswa')->withPosts($posts);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createMahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
            'kode' =>'required',
            'nama' =>'required',
            'jumlah_gerbong' =>'required',
            'kapasitas_gerbong' =>'required'
            ));

        //store in database
        $post = new Kereta;

        $post->kode = $request->kode;
        $post->nama = $request->nama;
        $post->jumlah_gerbong = $request->jumlah_gerbong;
        $post->kapasitas_gerbong = $request->kapasitas_gerbong;

        $post->save();

        //bisa pake put juga tapi permanent
        Session::flash('success','Data Mahasiswa Berhasil Tersimpan!');

        return redirect()->route('Kereta.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Kereta::find($kode); //disimpan di dalm variable post
        return view('posts.showMahasiswa')->with('post',$post); //di halaman post.show akan ditampilkan isi variable tersebut
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //find the post in the database and save it as variable
    //     $post = PostMahasiswa::find($id);
    //     //return the view and pass the var that is previously xreated
    //     return view('posts.editMahasiswa')->withPost($post);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //validate the data
    //     $this->validate($request,array(
    //         'nim' =>'required',
    //         'nama' =>'required',
    //         'jurusan' =>'required',
    //         'angkatan' =>'required',
    //         'password' =>'required'
    //         ));


    //     //save the data to the database
    //     $post = PostMahasiswa::find($id);

    //     $post->nim = $request->input('nim');
    //     $post->nama = $request->input('nama');
    //     $post->jurusan = $request->input('jurusan');
    //     $post->angkatan = $request->input('angkatan');
    //     $post->password = $request->input('password');

    //     $post->save();

    //     //set flash data with sukses messages
    //     Session::flash('success', 'This post was successfully saved.');
    //     //redirext with flash data to posts.show
    //     return redirect()->route('mahasiswa.show',$post->id);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $post = PostMahasiswa::find($id);
    //     //$posts = PostMahasiswa::all();

    //     //$post->delete();

    //     if ($post != null) {
    //     $post->delete();
    //     return redirect()->route('mahasiswa.index')->with(['message'=> 'Successfully deleted!!']);
    // }

    // return redirect()->route('mahasiswa.index')->with(['message'=> 'Wrong ID!!']);

        //Session::flash('success','The post was successfully deleted');
        
       // return view('posts.indexMahasiswa')->withPosts($posts);
}


