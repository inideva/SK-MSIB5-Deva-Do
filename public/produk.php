<?php
include "../koneksi/koneksi.php";
$queryProduk = mysqli_query($conn, "SELECT id, nama, gambar, harga, detail FROM produk ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include "template/head.php" ?>
</head>

<body>
    <!-- Header -->
    <?php include "template/navbar.php" ?>
    <!-- End Header -->
    <!-- Product  -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="container col-lg-6 mb-0">
                <h3 class="text-center">
                    Produk
                </h3>
            </div>

            <!-- Card Product -->
            <div class="row mt-5">
            <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <div class="image-box">
                        <img src="img/uploads/<?php echo $produk['gambar'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b><?php echo $data['nama'] ?></b></h5>
                            <p class="card-text text-truncate"><?php echo $data['detail'] ?></p>
                            <p class="card-text text-harga"><?php echo "IDR " . number_format($data['harga'], 0, ',', '.') ?></p>
                            <a href="detail-produk.php.?nama=<?php echo $data['nama']?>" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- End Card Product -->
            </div>
        </div>
        <!-- End Product  -->
</body>

<!-- Start Script -->
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- End Script -->

</html>