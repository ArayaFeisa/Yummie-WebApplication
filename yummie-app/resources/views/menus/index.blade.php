<!-- resources/views/menus/index.blade.php -->

@extends('layouts.menu')

@section('content')
<div class="container">
    <h2>Daftar Menu</h2>
    @foreach ($menus as $menu)
    <div class="menu-item">
        <h3>{{ $menu->nama_menu }}</h3>
        <p>{{ $menu->deskripsi }}</p>
        <p>Harga: Rp {{ number_format($menu->harga, 2) }}</p>
        @if ($menu->gambar_url)
        <img src="{{ $menu->gambar_url }}" alt="{{ $menu->nama_menu }}" style="max-width: 100%;">
        @endif
    </div>
    @endforeach
</div>
@endsection