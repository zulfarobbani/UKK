<?php

namespace App\Http\Controllers;

use App\Models\Fashot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FashotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $query = Fashot::all();

        return view('tamu.fasilitas', ['fashot'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Form tambah  fashot
        return view('admin.fashot.fasilitas-hotel-tambah');
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
        // dd($request);
        $query = Fashot::create([
            'nama_fashot' => $request->nama_fashot,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file('gambar')->hashName()
        ]);
        $request->file('gambar')->store('uploaded.fashot');

        
        return redirect()->route('admin.fashot');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fashot  $fashot
     * @return \Illuminate\Http\Response
     */
    public function show(Fashot $fashot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fashot  $fashot
     * @return \Illuminate\Http\Response
     */
    public function edit(Fashot $fashot, $id)
    {
        //
        $query = Fashot::where('id', $id)->get();
        
        return view('admin.fashot.fasilitas-hotel-edit', ['fashot'=>$query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fashot  $fashot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fashot $fashot, $id)
    {
        //
        $query = Fashot::select('gambar')->where('id', $id)->get();
        $hapus = Storage::delete('uploaded.fashot/' . $query);

        $query2 = Fashot::where('id', $id)->update([
            'nama_fashot' => $request->nama_fashot,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file('gambar')->hashName()
        ]);
        $request->file('gambar')->store('uploaded.fashot');
        
        // ddd($query,$hapus);
        // ddd($query, $request->file('gambar')->hashName());
        return redirect()->route('admin.fashot')->with('sucsess', "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fashot  $fashot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fashot $fashot, $id)
    {
        //
        Fashot::where('id', $id)->delete();

        return redirect()->back()->with('sucsess', 'Data berhasil dihapus');
    }

    public function indexadmin(){

        $fashot = Fashot::all();

        return view('admin.fashot.fasilitas-hotel', ['fashot' => $fashot]);
    }
}
