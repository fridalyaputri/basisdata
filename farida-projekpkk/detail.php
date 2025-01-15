<?php
include("koneksi.php");

//jka id tidak ada
if(!isset($_GET['id'])){
   header("Location: index.php");
}

$id = $_GET["id"];
$query = mysqli_query($koneksi, "select * from produk where id=$id");

$dataProduk = mysqli_num_rows($query);
if($dataProduk == 0){
    echo "<h1>Data produk tidak di temukan</h1>";
    die();
}



$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <img src="foto/<?= $data['foto'] ?>">
    <h1><?= $data["nama"]?></h1>
    <h1><?= $data["harga"]?></h1>
    <h1><?= $data["deskripsi"]?></h1>

    <form action = "proseskeranjang.php" method = "post">
        <input type = "hidden" name = "idproduk" value = "<?=$id?>">
        <button type = "submit">Keranjang</button>
</form>
       
</body>
</html>
