@extends('layouts.stock');

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
</head>
<body>
    <h1>Menu Pemesanan</h1>
    
    <form action="process.php" method="post">
        <label for="nasiGoreng">Nasi Goreng</label>
        <button type="button" onclick="addToCart('nasiGoreng')">Pesan</button><br>

        <label for="ayamBakar">Ayam Bakar</label>
        <button type="button" onclick="addToCart('ayamBakar')">Pesan</button><br>

        <label for="mieSeafood">Mie Goreng Seafood</label>
        <button type="button" onclick="addToCart('mieSeafood')">Pesan</button><br>

        <label for="satePadang">Sate Padang</label>
        <button type="button" onclick="addToCart('satePadang')">Pesan</button><br>

        <label for="esTeler">Es Teler</label>
        <button type="button" onclick="addToCart('esTeler')">Pesan</button><br>

        <input type="hidden" name="cart" id="cart" value="">
        <button type="submit">Submit Pesanan</button>
    </form>

    <script>
        var cart = {};

        function addToCart(menu) {
            if (cart[menu]) {
                cart[menu]++;
            } else {
                cart[menu] = 1;
            }

            updateCartInput();
        }

        function updateCartInput() {
            document.getElementById('cart').value = JSON.stringify(cart);
        }
    </script>
</body>
</html>

    
@endsection