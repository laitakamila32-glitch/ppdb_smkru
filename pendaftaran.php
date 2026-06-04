<?php
    include "koneksi.php";

    $query = mysqli_query($conn, "SELECT MAX(id) as id_terakhir FROM data_pendaftaran");
    $data = mysqli_fetch_assoc($query);

    $urutan = $data['id_terakhir'] + 1;

    $no_pendaftaran = "PPDB" . str_pad($urutan, 3, "0", STR_PAD_LEFT);

    if(isset($_POST['daftar'])){

        mysqli_query($conn, "INSERT INTO data_pendaftaran
        (no_pendaftaran, nama_lengkap, jenis_kelamin, asal_sekolah, jurusan_pilihan, no_telepon, status)
        VALUES
        (
            '$_POST[no_pendaftaran]',
            '$_POST[nama_lengkap]',
            '$_POST[jenis_kelamin]',
            '$_POST[asal_sekolah]',
            '$_POST[jurusan_pilihan]',
            '$_POST[no_telepon]',
            'Menunggu'
        )");

        echo "<script>
            alert('Pendaftaran Berhasil');
            window.location='pendaftaran.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form daftar</title>
    <link rel="stylesheet" href="../css/pendaftaran.css">
</head>
<body>
    <form method="post">
        <div class="judul">
            <h1>Form Pendaftaran PPDB</h1>
            <p>Lengkapi data diri calon peserta didik</p>
        </div>
        <div class="form-group">
            <label>No.Pendaftaran</label>
            <input type="text" name="no_pendaftaran" value="<?php echo $no_pendaftaran; ?>" readonly>
        </div>

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="">--Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" required>
        </div>

        <div class="form-group">
            <label>Jurusan Pilihan</label>
            <select name="jurusan_pilihan" required>
                <option value="Teknik sepeda motor">Teknik Sepeda Motor</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            </select>
        </div>

        <div class="form-group">
            <label>No.Telepon</label>
            <input type="text" name="no_telepon" required>
        </div>

        <button type="submit" name="daftar">Daftar Sekarang</button>
    </form>
</body>
</html>