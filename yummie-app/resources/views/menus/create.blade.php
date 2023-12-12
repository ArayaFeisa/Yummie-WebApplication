<!-- resources/views/menus/create.blade.php -->

@extends('layouts.create')

@section('content')
<nav class="navbar">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
</nav>
<div class="container">
    <h2>Tambah Menu</h2>
    <form action="{{ route('menus.store') }}" method="post">
        @csrf
        <label for="nama_menu">Nama Menu:</label>
        <input type="text" name="nama_menu" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi"></textarea>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" step="0.01" required>

        <label for="gambar_url">URL Gambar:</label>
        <input type="url" name="gambar_url">

        <button type="submit">Tambah Menu</button>
    </form>
</div>
@endsection