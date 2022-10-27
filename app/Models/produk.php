<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $fillable =['nama','deskripsi','harga','stok','nama_kategori'];
    public $timestamps = true;


     public function kategori()
    {
        return $this->hasOne(kategori::class);
    }
    use HasFactory;
}
