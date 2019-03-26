<?php

namespace App\Http\Controllers;

use App\Transaksi;
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
        //
        $transaksi = Transaksi::all();
        return view('transaksi.dashboard',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transaksi.insert');
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
        $transaksi = new Transaksi();
        $transaksi->item = $request->get('item');
        $transaksi->qty = $request->get('count');
        $transaksi->price = $request->get('price');
        $transaksi->paid = $request->get('paid');
        $transaksi->save();
        return redirect('transaksi');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $transaksi = Transaksi::find($id);
        return view('transaksi.update',compact('transaksi'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $transaksi = Transaksi::find($id);
        $transaksi->item = $request->get('item');
        $transaksi->qty = $request->get('count');
        $transaksi->price = $request->get('price');
        $transaksi->paid = $request->get('paid');
        $transaksi->update();
        return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deltran = Transaksi::find($id);
        $deltran->delete();
    }
}
