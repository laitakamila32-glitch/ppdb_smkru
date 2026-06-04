<?php
    include "../koneksi.php";
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM data_pendaftaran WHERE id='$id'");
    
    header("location: dashboard.php");
?>