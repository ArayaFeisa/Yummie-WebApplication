<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.daftarmenu', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'gambar_url' => 'nullable|url',
        ]);
        Menu::create($validatedData);

        return redirect()->route('menus.daftarmenu')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'gambar_url' => 'nullable|url',
        ]);
        Menu::findOrFail($id)->update($validatedData);

        return redirect()->route('menus.daftarmenu')->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();

        return redirect()->route('menus.daftarmenu')->with('success', 'Menu berhasil dihapus.');
    }

    public function indexTasya()
    {
        $menu = Menu::all();
        return view('tasya.index', compact('menu'));
    }
}
