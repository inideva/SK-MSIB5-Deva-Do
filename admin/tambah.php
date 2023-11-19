<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-4">
        <div class="card col-sm-8">
            <div class="card-header bg-primary text-white">
                TAMBAH PRODUK
            </div>
            <div class="card-body">
                <form action="proses_tambah.php" id="form-tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="detail">Detail</label>
                        <input type="text" class="form-control" id="detail" name="detail" placeholder="Masukan Detail" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan Harga" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori" required>
                            <option value="" disabled selected hidden>Pilih Kategori</option>
                            <option value="1">Sofa</option>
                            <option value="2">Kursi</option>
                            <option value="3">Meja</option>
                            <option value="4">1 Set</option>
                        </select>
                    </div>
                    <div class="form-group d-flex mb-3">
                        <label for="exampleInputFile" id="warna" class="me-3">Available Warna :</label>
                        <div class="form-check me-3">
                            <input class="form-check-input" name="warna[]" value="1" type="checkbox">
                            <label class="form-check-label">Hitam</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" name="warna[]" value="2" type="checkbox">
                            <label class="form-check-label">Putih</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" name="warna[]" value="3" type="checkbox">
                            <label class="form-check-label">Abu</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" name="warna[]" value="4" type="checkbox">
                            <label class="form-check-label">Coklat</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" name="warna[]" value="5" type="checkbox">
                            <label class="form-check-label">Merah</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" name="warna[]" value="6" type="checkbox">
                            <label class="form-check-label">Kuning</label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label" for="stok">Stok</label>
                        <select name="stok" id="stok" class="form-control">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Kosong">Kosong</option>
                        </select>
                    </div>
                    <!-- <input type="submit" name="Submit" value="simpan" class="btn btn-primary"> -->
                    <button type="button" name="tutup" class="btn btn-secondary me-2" onclick="history.back();">Tutup</button>
                    <button type="submit" id="simpanBtn" name="Submit" class="btn btn-primary" value="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script type="text/javascript" src="../admin/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>