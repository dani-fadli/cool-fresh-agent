<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPesanan;

class ListPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listPesanan()
    {
        $listPesanan = ListPesanan::all()->orderBy('created_at', 'desc')->get();
        return view('listPesanan',compact('listPesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detailPesanan(string $idPesanan)
    {
        $detail = ListPesanan::findOrFail($idPesanan);

        return view('detailPesanan', compact('detail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
