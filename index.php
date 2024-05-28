<?php

include 'app.php';

$data_barang = select("SELECT * FROM barang");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kel-3 Pemasaran Techno</title>
</head>

<body>

    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Kel-3 Pemasaran Techno</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Barang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <h1>Pemasaran Kel-3 Techno</h1>
        <h6>Data Perlengkapan PC & Elektronik</h6>

        <table class="table mt-5" style="width: 100%;">

            <th>kontak :</th>
            <td>Farrel Tiuraka V.</td>
            <td>Ananda Asa Firstha Affandi</td>
            <td>Dhevi Puspitasari</td>

        </table>

        <a href="tambahbarang.php" button type="button" class="btn btn-primary mt-3">Tambah Produk</a>

        <table class="table table-bordered table-striped mt-2">
            <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        nama
                    </th>
                    <th>
                        qty(kg/lt)
                    </th>
                    <th>
                        merk
                    </th>
                    <th>
                        harga
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_barang as $barang) : ?>
                    <tr>
                        <td><?= $barang['id_barang'] ?></td>
                        <td><?= $barang['nama'] ?></td>
                        <td><?= $barang['qty'] ?></td>
                        <td><?= $barang['merk'] ?></td>
                        <td>Rp. <?= number_format($barang['harga'], 0, ',', '.') ?></td>
                        <td width="15%">
                            <a button href="ubahbarang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success">ubah</a>
                            <a button href="hapusbarang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('YAKIN DATA DIHAPUS?')">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>