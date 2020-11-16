<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Produk</title>
</head>
<body>
<h1>READ DATA</h1>

<table border="1">
    <thead>
        <th>Nama Produk</th>
        <th>Deskripsi Produk</th>
    </thead>
    <tbody>
        <?php foreach($data as $key => $keluar) { ?>
        <tr>
            <td><?php echo $keluar['nama_produk'];  ?></td>
            <td><?php echo $keluar['deskripsi_produk'];  ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>