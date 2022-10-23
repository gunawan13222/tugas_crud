<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $fillable =['judul'];
    public $timestamps = true;
    use HasFactory;
}
