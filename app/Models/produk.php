<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $fillable =['nama','deskripsi','harga','stok','kategori_id'];
    public $timestamps = true;


     public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
    use HasFactory;
}
