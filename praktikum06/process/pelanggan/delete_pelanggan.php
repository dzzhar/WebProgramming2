<?php
include '../../database/dbkoneksi.php';

$id = $_GET['iddel'];
$sql = "DELETE FROM pelanggan WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header ("refresh:1; ../../pages/pelanggan/list_pelanggan.php");
?>