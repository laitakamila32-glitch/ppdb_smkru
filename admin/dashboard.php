<?php
    include "../koneksi.php";

    $total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pendaftaran"));

    $diterima = mysqli_num_rows(mysqli_query($conn,
    "SELECT * FROM data_pendaftaran WHERE status='Diterima'"));

    $ditolak = mysqli_num_rows(mysqli_query($conn,
    "SELECT * FROM data_pendaftaran WHERE status='Ditolak'"));

    $menunggu = mysqli_num_rows(mysqli_query($conn,
    "SELECT * FROM data_pendaftaran WHERE status='Menunggu'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/dashboard.css">
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
            <a href="dashboard.php" class="active"><i class="fa-solid fa-house"></i> Dashboard</a>
            <a href="verifikasi.php"><i class="fa-solid fa-user-check"></i>Verifikasi Data</a>
            <a href="../data_siswa/data_siswa.php"><i class="fa-solid fa-users"></i>Data Siswa</a>
            <a href="tambah.php"><i class="fa-solid fa-user-plus"></i>Tambah Pendaftar</a>
            <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
    </div>

    <div class="main">

        <div class="header">
            <h1>Dashboard Admin</h1>
            <p>Selamat datang di sistem data Pendaftar</p>
        </div>
        
        <div class="container-card">
            <div class="card">
                <div class="card-top">
                    <div class="icon purple">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div class="card-info">
                        <p>Total Pendaftar</p>
                        <h2><?= $total; ?></h2>
                        <span>Calon Siswa</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-top">
                    <div class="icon green">
                        <i class="fa-solid fa-user-check"></i>
                    </div>

                    <div class="card-info">
                        <p>Diterima</p>
                        <h2><?= $diterima; ?></h2>
                        <span>Siswa Diterima</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-top">
                    <div class="icon red">
                        <i class="fa-solid fa-user-xmark"></i>
                    </div>

                    <div class="card-info">
                        <p>Ditolak</p>
                        <h2><?= $ditolak; ?></h2>
                        <span>Siswa Ditolak</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-top">
                    <div class="icon orange">
                        <i class="fa-solid fa-clock"></i>
                    </div>

                    <div class="card-info">
                        <p>Menunggu</p>
                        <h2><?= $menunggu; ?></h2>
                        <span>Belum Diverifikasi</span>
                    </div>
                </div>
            </div>

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
                            <a href="edit.php?id=<?= $item['id']; ?>" class="btn edit">Edit</a>
                            <a href="hapus.php?id=<?= $item['id']; ?>" class="btn hapus">Hapus</a>
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