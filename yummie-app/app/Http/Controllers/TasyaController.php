<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class TasyaController extends Controller
{
    //
    public function index()
    {
        $menu = Menu::all();
        return view('daftarMenu.tasya', compact('menu'));
    }
}
