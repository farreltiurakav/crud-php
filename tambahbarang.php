<?php

include 'header.php';

//validasi berhasil tambah
if (isset($_POST['tambah'])) {
    if (create_barang($_POST) > 0) {
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
    <h2>Tambah Barang</h2>
    <hr>

    <form action="" method="post">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>



        <div class="mb-3">
            <label for="qty" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="qty" name="qty" required>
        </div>



        <div class="mb-3">
            <label for="merk" class="form-label">Merk Barang</label>
            <input type="text" class="form-control" id="merk" name="merk" required>
        </div>


        <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>

    </form>
</div>

<?php

include 'footer.php';

?>