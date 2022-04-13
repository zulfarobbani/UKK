<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $query = Pesan::leftJoin('kamar', 'pesan.kamar_id', '=', 'kamar.id')->leftJoin('users', 'pesan.user_id', '=', 'users.id')->get();
        
        return view('tamu.reservasi',['pesan'=>$query]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pesan = Kamar::all();
        return view('tamu.pesan', ['kamar'=>$pesan]);

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
        $checkin = $request->checkin;
        $pertama = strtotime($checkin);
        $checkout = $request->checkout;
        $kedua = strtotime($checkout);
        $jarak = $kedua - $pertama;
        $hari = $jarak /60 /60 /24;
        $harga = Kamar::where('id', $request->tipe_kamar)->select('harga')->get()->first()->harga;
        $jmlh_kamar = $request->jmlh_kamar;
        
        
        $total = $harga * $hari;
        $total_bayar = $total * $jmlh_kamar;
        
        $query = Pesan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'email' => $request->email,
            'no_hp'=> $request->no_hp,
            'nama_tamu' => $request->nama_tamu,
            'kamar_id' =>$request->tipe_kamar,
            'checkIn' => $checkin,
            'checkOut' => $checkout,
            'jmlh_kamar' => $jmlh_kamar,
            'total' => $total_bayar,
            'status' => 'booking',
            'ref_pesan'=> uniqid('ref'),
            'user_id'=> '1'
        ]);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
    public function cetak($id){

        $query = Pesan::where('pesan.id', $id)->leftJoin('kamar', 'pesan.kamar_id', '=', 'kamar.id')->leftJoin('users', 'pesan.user_id', '=', 'users.id')->get();
        return view('tamu.cetak', ['pesan'=> $query]);
    }
}
