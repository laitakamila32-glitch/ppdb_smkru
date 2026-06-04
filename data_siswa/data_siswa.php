<?php
    include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
    <link rel="stylesheet" href="../css/data_siswa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <h2>
            <i class="fa-solid fa-users"></i>
            Data Siswa<br>
            <span>SMK Riyadhul Ulum</span>
        </h2>
        <div class="sidebar-menu">
            <a href="data_siswa.php" class="active"><i class="fa-solid fa-user-graduate"></i>Data Siswa</a>
            <a href="../admin/verifikasi.php"><i class="fa-solid fa-user-check"></i>Verifikasi Data</a>
            <a href="../admin/dashboard.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
    </div>

    <div class="main">

        <div class="header">
            <h1>Dashboard Admin</h1>
            <p>Selamat datang di sistem data Pendaftar</p>
        </div>
        <div class="table-box">
            <table>
                <tr>
                    <th>No</th>
                    <th>No Pendaftaran</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Asal Sekolah</th>
                    <th>Jurusan</th>
                    <th>No Telepon</th>
                    <th>Status</th>
                </tr>

                <?php
                $no = 1;
                $data = mysqli_query($conn, "SELECT * FROM data_pendaftaran WHERE status='Diterima'");

                while($item = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $item['no_pendaftaran']; ?></td>
                    <td><?= $item['nama_lengkap']; ?></td>
                    <td><?= $item['jenis_kelamin']; ?></td>
                    <td><?= $item['asal_sekolah']; ?></td>
                    <td><?= $item['jurusan_pilihan']; ?></td>
                    <td><?= $item['no_telepon']; ?></td>
                    <td>
                        <span class="status <?= strtolower($item['status']); ?>">
                            <?= $item['status']; ?>
                        </span>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>