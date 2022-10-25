<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menambahkan halaman utama 
        $produk = produk::all();
        return view('produk.index', compact('produk'),[
            'title'=>'produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // menampilkan from produk
        return view ('produk.create',[
            'title'=>'produk']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menyimpan di table produks
        $validated =$request->validate([
            'judul'=>'required'
        ]);
        $produk = new produk();
        $produk->judul=$request->judul;
        $produk->save();
        return redirect()->route('produk.index',[
            'title'=>'produk'])->with('success', 'Data berhasil di buat!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan produk 
        $produk = produk::findOrFail($id);
        return view('produk.show',[
            'title'=>'produk'], compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::findOrFail($id);
        return view('produk.edit',[
            'title'=>'produk'], compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated =$request->validate([
            'judul'=>'required'
        ]);
        $produk = produk::findOrFail($id);
        $produk->judul=$request->judul;
        $produk->save();
        return redirect()->route('produk.index',[
            'title'=>'produk'])->with('success', 'Data berhasil edit !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index',[
            'title'=>'produk'])->with('danger', 'Data berhasil di hapus !');
    }
}
