<?php

include 'app.php';

$id_barang = (int)$_GET['id_barang'];


if (hapus_barang($id_barang) > 0) {
    echo "<script>
        alert('terhapus');
        document.location.href = 'index.php';
        </script>";
} else {
    echo "<script>
        alert('gagal');
        document.location.href = 'index.php';
        </script>";
}
