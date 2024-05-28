<?php

//panggil database, menampilkan data
function select($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//fungsi tambah barang
function create_barang($post)
{
    global $db;

    $nama  = $post['nama'];
    $qty  = $post['qty'];
    $merk  = $post['merk'];
    $harga  = $post['harga'];

    $query = "INSERT INTO barang VALUE(null, '$nama', '$qty', '$merk', '$harga')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi ubah
function ubah_barang($post)
{
    global $db;

    $id_barang = $post['id_barang'];
    $nama  = $post['nama'];
    $qty  = $post['qty'];
    $merk  = $post['merk'];
    $harga  = $post['harga'];

    $query = "UPDATE barang SET nama = '$nama', qty = '$qty', merk = '$merk', harga = '$harga' 
    WHERE id_barang = $id_barang";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi hapus
function hapus_barang($id_barang)
{

    global $db;

    $query = "DELETE FROM barang WHERE id_barang = $id_barang";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
