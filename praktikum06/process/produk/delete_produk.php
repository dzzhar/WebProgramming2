<?php
include '../../database/dbkoneksi.php';

$id = $_GET['iddel'];
$sql = "DELETE FROM produk WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header ("refresh:1; ../../pages/produk/list_produk.php");
?>  