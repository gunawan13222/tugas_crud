<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{

    public $fillable =['nama','keterangan'];
    public $timestamps = true;

    public function produk()
{
    return $this->belongsTo(produk::class, 'foreign_key');
}
    use HasFactory;
}
