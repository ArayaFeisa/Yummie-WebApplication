<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarMenu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $primaryKey = 'menu_id';
    protected $fillable = ['nama_menu', 'deskripsi', 'harga', 'gambar_url'];
}
