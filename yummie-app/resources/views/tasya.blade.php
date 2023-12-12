<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Daftar Menu</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($menu as $item): ?>
                <tr>
                    <td><?= $item->nama ?></td>
                    <td><?= $item->harga ?></td>
                    <td><?= $item->deskripsi ?></td>
                    <td><img src="<?= asset('storage/images/' . $item->gambar) ?>" alt="<?= $item->nama ?>" width="100"></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</body>
</html>
