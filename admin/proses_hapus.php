<?php
include "../koneksi/koneksi.php";

$result = mysqli_query(
    $conn,
    "DELETE FROM `produk` where `id`='$_GET[id]'"
);

header("Location:index.php");
?>
