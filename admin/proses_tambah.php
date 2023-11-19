<?php
include "../koneksi/koneksi.php";

$target_dir = "../public/img/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


$nama = $_POST["nama"];
$gambar = $_FILES["image"]['name'];
$detail = $_POST["detail"];
$harga = $_POST["harga"];
$kategori = $_POST["kategori"];
$warna = $_POST["warna"];
$stok = $_POST["stok"];

$result = mysqli_query($conn, "INSERT INTO `produk` (`nama`, `gambar`, `harga`, `detail`, `kategori_id`, `stok`) VALUES ('$nama', '$gambar', '$harga', '$detail','$kategori', '$stok');");
if ($result) {
    $insertedId = mysqli_insert_id($conn);
    foreach ($warna as $w) {
        echo "INSERT INTO `tipe_produk` (`produk_id`,`warna_id` ) VALUES ('$insertedId','$w')";
        mysqli_query($conn, "INSERT INTO `tipe_produk` (`produk_id`,`warna_id`) VALUES ('$insertedId','$w')");
    }   
} else {
    echo "Error: " . mysqli_error($conn);
    exit();
}

header("Location:index.php");
