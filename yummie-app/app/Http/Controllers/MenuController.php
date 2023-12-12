<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'gambar_url' => 'nullable|url',
        ]);

        // Simpan data ke database
        Menu::create($validatedData);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
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

        // Update data ke database
        Menu::findOrFail($id)->update($validatedData);

        return redirect()->route('menus.index')->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data dari database
        Menu::findOrFail($id)->delete();

        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus.');
    }

    public function indexTasya()
    {
        $menu = Menu::all();
        return view('tasya.index', compact('menu'));
    }
}
