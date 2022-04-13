<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Faskam;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kamar = Kamar::all();
        
      
        // $faskam = Faskam::rightJoin('kamar', 'faskam.kamar_id', '=', 'kamar.id')->get();
        $faskam = Faskam::all();

        //  ddd($kamar->first()->Faskam());

        return view('tamu.index', ['kamar' => $kamar, 'faskam'=>$faskam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kamar.kamar-tambah');
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
        
        
        $query = Kamar::create([
           'nama_kamar' => $request->tipekamar,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'gambar' => $request->file('gambar')->hashName()
        ]);
        $request->file('gambar')->store('uploaded');
        
        
        return redirect()->route('admin.kamar')->with('success', 'Tipe Kamar Baru telah ditambahkan');
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
        $query = Kamar::find($id);
        return view('admin.kamar.kamar-edit', ['kamar' => $query]);
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
        $query = Kamar::find($id);
        return view('admin.kamar.kamar-edit', ['kamar' => $query]);
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
        Kamar::where('id', $id)->update([
            'nama_kamar'=>$request->tipekamar,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);
        return redirect()->route('admin.kamar')->with('success', 'Tipe Kamar Baru telah Diupdate');
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
       $query = Kamar::where('id', $id)->delete();
         
       
        return redirect()->back()->with('success', 'Tipe Kamar telah Dihapus');
    }
    public function indexadmin(){
        $kamar = Kamar::all();
        return view('admin.kamar.kamar', ['kamar' => $kamar]);
    }
}
