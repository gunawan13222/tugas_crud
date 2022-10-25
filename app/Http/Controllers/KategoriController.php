<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori.index', compact('kategori'),[
            'title'=>'kategori'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategori.create',[
            'title'=>'kategori']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated =$request->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
            'stok'=>'required',
        ],[
            'nama.required'=>'nama harus di isi',
            'deskripsi.required'=>'deskripsi harus di isi',
            'harga.required'=>'harga harus di isi',
            'stok.required'=>'stok harus di isi',
        ]);
        $produk = new produk();
        $produk->nama=$request->nama;
        $produk->deskripsi=$request->deskripsi;
        $produk->harga=$request->harga;
        $produk->stok=$request->stok;
        $produk->save();
        return redirect()->route('produk.index',[
            'title'=>'produk'])->with('success', 'Data berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $id)
    {
         $produk = produk::findOrFail($id);
        return view('produk.show',[
            'title'=>'produk'], compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $id)
    {
         $produk = produk::findOrFail($id);
        return view('produk.edit',[
            'title'=>'produk'], compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori $id)
    {
         $validated =$request->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
            'stok'=>'required',
        ]);
        $produk = produk::findOrFail($id);
        $produk->nama=$request->nama;
        $produk->deskripsi=$request->deskripsi;
        $produk->harga=$request->harga;
        $produk->stok=$request->stok;
        $produk->save();
        return redirect()->route('produk.index',[
            'title'=>'produk'])->with('success', 'Data berhasil edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index',[
            'title'=>'produk'])->with('danger', 'Data berhasil di hapus !');
    }
}
