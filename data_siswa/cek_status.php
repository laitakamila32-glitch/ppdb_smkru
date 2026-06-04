<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cek Status Pendaftaran</title>
    <link rel="stylesheet" href="../css/cek_status.css">
</head>
<body>

    <div class="container">
        <h2>Cek Status Pendaftaran</h2>
        <p>Masukkan nomor pendaftaran Anda</p>

        <form method="post">
            <input type="text" name="no_pendaftaran"
            placeholder="Contoh: PPDB001" required>

            <button type="submit" name="cek">
                Cek Status
            </button>
        </form>

        <?php
        if(isset($_POST['cek'])){

            $no = $_POST['no_pendaftaran'];

            $data = mysqli_query($conn,
            "SELECT * FROM data_pendaftaran
            WHERE no_pendaftaran='$no'");

            if(mysqli_num_rows($data)>0){

                $item = mysqli_fetch_assoc($data);
        ?>

        <div class="hasil">

            <h3>Hasil Pendaftaran</h3>

            <p><b>No Pendaftaran :</b>
            <?= $item['no_pendaftaran']; ?></p>

            <p><b>Nama :</b>
            <?= $item['nama_lengkap']; ?></p>

            <p><b>Jurusan :</b>
            <?= $item['jurusan_pilihan']; ?></p>

            <p>
                <b>Status :</b>

                <span class="status <?= strtolower($item['status']); ?>">
                    <?= $item['status']; ?>
                </span>
            </p>

        </div>

        <?php
            }else{
                echo "<p>Data tidak ditemukan!</p>";
            }
        }
        ?>

    </div>
</body>
</html>