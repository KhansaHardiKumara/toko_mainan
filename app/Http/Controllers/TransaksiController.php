<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Kasir;
use App\Models\Produk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::with('produk', 'kasir')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $kasir = Kasir::all();
        return view('transaksi.create', compact('produk', 'kasir'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kasir_id' => 'required|exists:kasirs,id',
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $produk = Produk::find($request->produk_id);

        if ($request->jumlah > $produk->stok) {
            return back()->withErrors(['jumlah' => 'Jumlah melebihi stok produk.']);
        }

        $produk->decrement('stok', $request->jumlah);

        Transaksi::create([
            'kasir_id' => $request->kasir_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $produk->harga * $request->jumlah,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dibuat.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
