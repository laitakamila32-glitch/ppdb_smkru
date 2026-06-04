<?php
    include "../koneksi.php";

    $id = $_GET['id'];

    mysqli_query($conn,
    "UPDATE data_pendaftaran
    SET status='Ditolak'
    WHERE id='$id'");

    header("Location: verifikasi.php");
    exit;
?>