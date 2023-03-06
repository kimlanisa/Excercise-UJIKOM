<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transaksi = Transaksi::all();
        // $status_pesanan = StatusPesanan::all();
        return view('transaksi.index', compact('transaksi', 'status_pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $customers = User::role('customer')->get();
        // $paket = Paket::all();
        // $pembayaran = Pembayaran::all();

        return view('transaksi.create', compact('customers', 'paket', 'pembayaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'customer_id' => 'required',
        //     'paket_id' => 'required',
        //     'pembayaran_id' => 'required',
        //     'status_pesanan_id' => 'required',
        //     'tanggal' => 'required',
        //     'berat' => 'required',
        //     'total_harga' => 'required',
        // ]);

        // Transaksi::create([
        //     'customer_id' => $request->customer_id,
        //     'paket_id' => $request->paket_id,
        //     'pembayaran_id' => $request->pembayaran_id,
        //     'status_pesanan_id' => $request->status_pesanan_id,
        //     'tanggal' => $request->tanggal,
        //     'berat' => $request->berat,
        //     'total_harga' => $request->total_harga,


            // $hitung                 = $order->kg * $order->harga;
            // if ($request->disc != NULL) {
            //     $disc                = ($hitung * $order->disc) / 100;
            //     $total               = $hitung - $disc;
            //     $order->harga_akhir  = $total;
            // } else {
            // $order->harga_akhir    = $hitung;
            // }
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Transaksi $transaksi)
    // {
        //
    // }

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
