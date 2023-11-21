<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Data Produk
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary text-light mb-3" href="tambah.php"> Tambah Produk </a>
                        <form action="" method="post">
                            <table id="table-admin" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <!-- <th>Gambar</th> -->
                                        <th>Detail</th>
                                        <th>Harga</th>
                                        <th>Kategori</th>
                                        <th>Warna</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../koneksi/koneksi.php";
                                    $query = mysqli_query($conn, "SELECT p.id, p.nama, p.gambar, p.harga, p.detail, k.nama_kategori, w.warna_produk, p.stok FROM produk as p join tipe_produk as tp on tp.produk_id=p.id join kategori as k on k.id=p.kategori_id join warna as w on w.id=tp.warna_id ORDER BY p.id ASC;");
                                    $no = 0;
                                    while ($produk = mysqli_fetch_array($query)) {
                                        $no++;
                                        $url_gambar = "../public/img/uploads/$produk[gambar]";
                                    ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $produk['nama'] ?></td>
                                            <!-- <td><img src="$url_gambar" width="100"></td> -->
                                            <td><?php echo $produk['detail'] ?></td>
                                            <td><?php echo "IDR " . number_format($produk['harga'], 0, ',', '.') ?></td>
                                            <td><?php echo $produk['nama_kategori'] ?></td>
                                            <td><?php echo $produk['warna_produk'] ?></td>
                                            <td><?php echo $produk['stok'] ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $produk['id'] ?>" class="btn btn-warning btn-sm mb-1">Ubah</a>
                                                <a href="proses_hapus.php?id=<?php echo $produk['id']?>" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#table-admin').DataTable()
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>