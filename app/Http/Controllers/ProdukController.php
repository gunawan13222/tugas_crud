<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
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
        $produk = produk::with('kategori')->latest()->paginate();
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
        $kate = kategori::all();
        return view ('produk.create',compact('kate'),[
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
            'nama'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
            'stok'=>'required',
            'kategori_id'=>'required',
        ],[
            'nama.required'=>'nama harus di isi',
            'deskripsi.required'=>'deskripsi harus di isi',
            'harga.required'=>'harga harus di isi',
            'stok.required'=>'stok harus di isi',
            'kategori_id.required'=>'stok harus di isi',
        ]);


        //      $produk::create([ 
        //     'nama'=>$request->nama,
        //     'deskripsi'=>$request->deskripsi,
        //     'harga'=>$request->harga,
        //     'stok'=>$request->stok,
        //     'kategori_id'=>$request->kategori,
        // ]);

        $produk = new produk();
        $produk->nama=$request->nama;
        $produk->deskripsi=$request->deskripsi;
        $produk->harga=$request->harga;
        $produk->stok=$request->stok;
        $produk->kategori_id=$request->kategori_id;
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
        $produk = produk::with('kategori')->findOrFail($id);
        $kate = kategori::all();
        return view('produk.edit',[
            'title'=>'produk'], compact('produk','kate'));
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
        $produk->kategori_id=$request->kategori_id;
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
