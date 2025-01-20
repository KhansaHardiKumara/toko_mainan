<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasir = Kasir::all();
        return view('kasir.index', compact('kasir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:kasir',
            'password' => 'required|min:6',
        ]);

        Kasir::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kasir $kasir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kasir $kasir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kasir $kasir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kasir $kasir)
    {
        //
    }
}
