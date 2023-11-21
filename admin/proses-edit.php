<?php
include "../koneksi/koneksi.php";

$id = $_GET["id"];

if(isset($_FILES)){
    $target_dir = "../public/img/uploaded/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = true;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $imageName = $_FILES["image"]["name"];
    $isImageExist = ",image='$imageName'";
}

$nama = $_POST["nama"];
$gambar = $_FILES["image"]['name'];
$detail = $_POST["detail"];
$harga = $_POST["harga"]; 
$kategori = $_POST["kategori"];
$warna = $_POST["warna"];
$stok = $_POST["stok"];

$result = mysqli_query($conn, "UPDATE produk` SET nama='$nama',harga='$harga',detail='$detail',katerori='$kategori'". $isImageExist ." WHERE id='$id';");

if ($result) {

    $deleteResult = mysqli_query($conn, "DELETE FROM cloth_sizes WHERE cloth_id='$id';");
    foreach ($sizes as $element) {
        echo "INSERT INTO `cloth_sizes` (`cloth_id`,`size_id`) VALUES ('$id','$element')";
        
        mysqli_query($conn, "INSERT INTO `cloth_sizes` (`cloth_id`,`size_id`) VALUES ('$id','$element')");
    }
} else {
    echo "Error: " . mysqli_error($conn);
    exit();
}

header("Location:index.php");
?>