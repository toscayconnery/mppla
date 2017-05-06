<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Laboratorium;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin\index-admin');
    }

    public function input_deskripsi()
    {
        $this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        return view('admin\inputdeskripsi', $this->data);
    }

    public function inputdesc(Request $request, $id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        $laboratorium->deskripsi_lab = $request->deskripsi_lab;

        $laboratorium->save();

        return redirect('inputdeskripsi')->with('message','Updated');
    }

    public function input_admin()
    {
        return view('admin\inputadmin');
    }

    public function list_admin()
    {
        return view('admin\listadmin');
    }

     public function list_pinjam()
    {
        return view('admin\listpeminjaman');
    }

    public function verif_pinjam()
    {
        return view('admin\verifpeminjaman');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
