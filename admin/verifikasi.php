<?php
    include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifikasi data</title>
    <link rel="stylesheet" href="../css/verifikasi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <h2>
            <i class="fa-solid fa-users"></i>
            Admin Panel<br>
            <span>SMK Riyadhul Ulum</span>
        </h2>
        <div class="sidebar-menu">
            <a href="verifikasi.php" class="active"><i class="fa-solid fa-user-check"></i>Verifikasi Data</a>
            <a href="dashboard.php"><i class="fa-solid fa-users"></i>dashboard.php</a>
            <a href="../data_siswa/data_siswa.php"><i class="fa-solid fa-users"></i>Data Siswa</a>
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
    </div>

    <div class="main">

        <div class="header">
            <h1>Verifikasi Data</h1>
            <p>Selamat datang di sistem data Pendaftar</p>
        </div>

        <div class="table-box">
        <table>
            <h2>Rekapan Data Pendaftar</h2>
            <tr>
                <th>id</th>
                <th>No.Pendaftar</th>
                <th>Nama Lengkap</th>
                <th>Jenis kelamin</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                <th>No.Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

        <?php
            $data = mysqli_query($conn, "SELECT * FROM data_pendaftaran");
            while($item = mysqli_fetch_array($data)) {
            ?>
                
                <tr>
                    <td><?= $item['id']; ?></td>
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
                    <td>
                        <div class="aksi">
                            <a href="terima.php?id=<?= $item['id']; ?>" class="btn terima">Diterima</a>
                            <a href="tolak.php?id=<?= $item['id']; ?>" class="btn tolak">Ditolak</a>
                        </div>
                    </td>
                </tr>
        <?php
            }
        ?>
        </table>
        </div>
    </div>
</body>
</html>