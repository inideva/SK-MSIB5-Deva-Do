<?php
include "../koneksi/koneksi.php";
$queryProduk = mysqli_query($conn, "SELECT id, nama, gambar, harga, detail FROM produk Limit 6");
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

    <!-- Banner -->
    <div class="container-fluid warna1 banner">
        <div class="container">
            <div class="row p-4">
                <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                    <img class="img-fluid" src="img/assets/banner.png" alt="">
                </div>
                <div class="col-lg-6 mb-5 d-flex align-items-center">
                    <div class="text-align-left align-self-center">
                        <h1 class="h1 text-success"><b>Lospace</b></h1>
                        <h3 class="h2">Produk Interior terbaik</h3>
                        <p>
                            Lospace is Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam pariatur dolorum soluta commodi eos explicabo debitis, possimus est ratione officiis nihil, expedita, impedit nam aperiam sapiente officia. Quia, quam quaerat!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Product  -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <div class="container col-lg-6 mb-0">
                <h3>
                    Produk
                </h3>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-image image-1 d-flex justify-content-center align-items-center">
                        <h5 class="text-white">
                            <a class="no-decoration" href="produk.php">Sofa</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-image image-2 d-flex justify-content-center align-items-center">
                        <h5 class="text-white">
                            <a class="no-decoration" href="produk.php">Set</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-image image-3 d-flex justify-content-center align-items-center">
                        <a class="no-decoration" href="produk.php">Kursi Minimalis</a>
                    </div>
                </div>
            </div>

            <div class="container col-lg-8" style="margin-bottom: 5rem;">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora vero tempore, aliquid est repellendus debitis esse consequuntur atque distinctio rerum?
                </p>
            </div>

            <!-- Card Product -->
            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="image-box">
                        <img src="img/uploads/ <?php echo $data['gambar'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nama'] ?></h5>
                            <p class="card-text text-truncate"><?php echo $data['detail'] ?></p>
                            <p class="card-text text-harga"><?php echo "IDR " . number_format($data['harga'], 0, ',', '.') ?></p>
                            <a href="detail-produk.php.?nama=<?php echo $data['nama']?>" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="btn btn-warning fs-5 mt-5" href="produk.php">Lihat Lainnya</a>
            <!-- End Card Product -->

        </div>
    </div>
    <!-- End Product  -->
</body>

<!-- Start Script -->
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- End Script -->

</html>