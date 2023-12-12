<?php

<<<<<<< Updated upstream
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
namespace App;

>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
<<<<<<< Updated upstream
    use HasFactory;
    protected $fillable = [
        'nama_menu',
        'deskripsi',
        'harga',
        'gambar_url',
    ];
}
=======
    protected $table = 'menu';
    protected $primaryKey = 'menu_id';
    protected $fillable = ['nama', 'harga', 'deskripsi', 'gambar'];
}
>>>>>>> Stashed changes
