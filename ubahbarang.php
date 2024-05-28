<?php

include 'header.php';

//mengambil id barang dari link
$id_barang = (int)$_GET['id_barang'];

$barang = select("SELECT * FROM barang  WHERE id_barang = $id_barang")[0];

//validasi berhasil ubah
if (isset($_POST['ubah'])) {
    if (ubah_barang($_POST) > 0) {
        echo "<script>
        alert('berhasil');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('gagal');
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<div class="container mt-3">
    <h2>Ubah Barang</h2>
    <hr>

    <form action="" method="post">

        <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama']; ?>" required>
        </div>



        <div class="mb-3">
            <label for="qty" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="qty" name="qty" value="<?= $barang['qty']; ?>" required>
        </div>



        <div class="mb-3">
            <label for="merk" class="form-label">Merk Barang</label>
            <input type="text" class="form-control" id="merk" name="merk" value="<?= $barang['merk']; ?>" required>
        </div>


        <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>" required>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary">ubah</button>

    </form>
</div>

<?php

include 'footer.php';

?>