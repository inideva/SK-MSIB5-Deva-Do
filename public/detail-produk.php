<?php
include "../koneksi/koneksi.php";

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($conn, "SELECT p.nama, p.gambar, p.harga, p.detail, k.nama_kategori, w.warna_produk, p.stok FROM produk as p join tipe_produk as tp on tp.produk_id=p.id join kategori as k on k.id=p.kategori_id join warna as w on w.id=tp.warna_id WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "template/head.php" ?>
</head>

<body>
    <?php include "template/navbar.php" ?>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-5">
                    <img src="img/uploads/<?php echo $produk['gambar']?>" alt="<?php echo $produk['nama']?>" class="w-100">
                </div>
                <div class="col-md-7">
                    <h1><?php echo $produk['nama'] ?></h1>
                    <p class="mb-3">Kategori : <?php echo $produk['nama_kategori'] ?></p>
                    <p>Detail : <br>
                    <?php echo $produk['detail'] ?> <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse cum dolores molestiae facilis, obcaecati aperiam quaerat magni deserunt tenetur non! Repellat blanditiis, pariatur alias aliquid quam aspernatur consequuntur in doloremque minus deleniti maiores iusto doloribus voluptatem nihil debitis ad nemo iste sit provident vel architecto quo explicabo. Non, facere error.
                    </p>
                    <p>Warna : <?php echo $produk['warna_produk'] ?></p>
                    <p class="text-harga mt-5"><?php echo "IDR " . number_format($produk['harga'], 0, ',', '.') ?></p>
                    <p>Stok : <?php echo $produk['stok'] ?></p>
                </div>
            </div>
        </div>

    </div>
</body>
<!-- Start Script -->
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- End Script -->

</html>