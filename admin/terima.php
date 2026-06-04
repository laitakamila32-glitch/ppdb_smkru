<?php
    include "../koneksi.php";

    $id = $_GET['id'];

    $data = mysqli_query($conn,
    "SELECT * FROM data_pendaftaran WHERE id='$id'");

    $siswa = mysqli_fetch_assoc($data);

    $insert = mysqli_query($conn,"
        INSERT INTO data_siswa
        (no_pendaftaran,nama_lengkap,jenis_kelamin,asal_sekolah,jurusan_pilihan,no_telepon,status)
        VALUES
        (
        '$siswa[no_pendaftaran]',
        '$siswa[nama_lengkap]',
        '$siswa[jenis_kelamin]',
        '$siswa[asal_sekolah]',
        '$siswa[jurusan_pilihan]',
        '$siswa[no_telepon]',
        'Diterima'
        )");

        if(!$insert){
            die(mysqli_error($conn));
        }

    mysqli_query($conn,
    "UPDATE data_pendaftaran SET status='Diterima'
    WHERE id='$id'");

    header("Location: verifikasi.php");
    exit;
?>