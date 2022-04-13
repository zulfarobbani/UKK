<?php

namespace App\Http\Controllers;

use App\Models\Faskam;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaskamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Faskam::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $faskam = Faskam::all()->leftJoin('kamar', 'faskam.kamarId', '=', 'kamar.id');
        $faskam = Kamar::all();
        
        return view('admin.faskam.fasilitas-kamar-tambah', ['faskam' => $faskam]);
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
        $query = Faskam::create([
            'kamar_id' => $request->tipekamar,
            'nama_faskam' => $request->nama_faskam
        ]);
        return redirect()->route('admin.faskam')->with('succsess', 'Data fasilitas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faskam  $faskam
     * @return \Illuminate\Http\Response
     */
    public function show(Faskam $faskam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faskam  $faskam
     * @return \Illuminate\Http\Response
     */
    public function edit(Faskam $faskam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faskam  $faskam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faskam $faskam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faskam  $faskam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faskam $faskam , $id)
    {
        //
        return $id;
    }
    public function indexadmin(){
        // $faskam = Faskam::all();
        // $faskam = Faskam::find(3);
        //  $apaaja = Faskam::first()->kamar();
        
    //    ddd($apaaja);
        $faskam = Faskam::leftJoin('kamar', 'faskam.kamar_id', '=', 'kamar.id')->get();
        

        return view('admin.faskam.fasilitas-kamar', ['faskam' => $faskam]);
    }
}
