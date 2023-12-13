@extends('layouts.stock');

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .menu-item-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .menu-item {
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }

        .menu-item img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Menu Pemesanan</h1>

<form action="{{ route('stock.store') }}" method="POST">
@csrf
    <div class="menu-item-container">
        <div class="menu-item">
            <img src="yummie-app/resources/views/stocks/image/Nasi-Goreng.jpg" alt="Nasi Goreng">
            <label for="nasiGoreng">Nasi Goreng</label>
            <input type="hidden" name="menu[]" value="Nasi Goreng">
            <button type="submit" name="action" value="add">Tambahkan</button>
        </div>

        <div class="menu-item">
            <img src="path/to/ayamBakar-image.jpg" alt="Ayam Bakar">
            <label for="ayamBakar">Ayam Bakar</label>
            <button type="button">Tambahkan</button>
        </div>

        <div class="menu-item">
            <img src="path/to/miegorengseafood-image.jpg" alt="Mie Goreng Seafood">
            <label for="mieGoreng">Mie Goreng Seafood</label>
            <button type="button">Tambahkan</button>
        </div>

        <div class="menu-item">
            <img src="path/to/satePadang-image.jpg" alt="Sate Padang">
            <label for="satePadang">Sate Padang</label>
            <button type="button">Tambahkan</button>
        </div>

        <div class="menu-item">
            <img src="path/to/esTeler.jpg" alt="Es Teler">
            <label for="esTeler">Es Teler</label>
            <button type="button">Tambahkan</button>
        </div>
    </div>
</form>
</body>
</html>
@endsection