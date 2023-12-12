<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DaftarMenu;

class DaftarMenuController extends Controller
{
    //
    public function index()
    {
        $menu = DaftarMenu::all();
        return view('daftarMenu.tasya', compact('menu'));
    }
}
