<!-- resources/views/menus/edit.blade.php -->

@extends('layouts.menu')

@section('content')
    <div class="container">
        <h2>Edit Menu</h2>
        <form action="{{ route('menus.update', $menu->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="nama_menu">Nama Menu:</label>
            <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi">{{ $menu->deskripsi }}</textarea>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" step="0.01" value="{{ $menu->harga }}" required>

            <label for="gambar_url">URL Gambar:</label>
            <input type="url" name="gambar_url" value="{{ $menu->gambar_url }}">

            <button type="submit">Update Menu</button>
        </form>
    </div>
@endsection
