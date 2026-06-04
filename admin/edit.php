<?php
    include "../koneksi.php";
    $id = $_GET['id'];

    $data = mysqli_query($conn, "SELECT * FROM data_pendaftaran WHERE id = '$id'");
    $item = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="../css/pendaftaran.css">
</head>
<body>
    <form method="post">
        <div class="judul">
            <h1>Edit Form Pendaftaran</h1>
        </div>
        <div class="form-group">
            <label>No.Pendaftaran</label>
            <input type="text" name="no_pendaftaran" value="<?php echo $item['no_pendaftaran']; ?>" readonly>
        </div>

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="<?php echo $item['nama_lengkap']; ?>" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki" <?php if($item['jenis_kelamin']=="Laki-laki") echo "selected"; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if($item['jenis_kelamin']=="Perempuan") echo "selected"; ?>>Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" value="<?php echo $item['asal_sekolah']; ?>" required>
        </div>

        <div class="form-group">
            <label>Jurusan Pilihan</label>
            <select name="jurusan_pilihan" required>
                <option value="Teknik Sepeda Motor"<?php if($item['jurusan_pilihan']=="Teknik Sepeda Motor") echo "selected"; ?>>Teknik Sepeda Motor</option>
                <option value="Tata Busana"<?php if($item['jurusan_pilihan']=="Tata Busana") echo "selected"; ?>>Tata Busana</option>
                <option value="Rekayasa Perangkat Lunak"<?php if($item['jurusan_pilihan']=="Rekayasa Perangkat Lunak") echo "selected"; ?>>Rekayasa Perangkat Lunak</option>
            </select>
        </div>

        <div class="form-group">
            <label>No.Telepon</label>
            <input type="text" name="no_telepon" value="<?php echo $item['no_telepon']; ?>" required>
        </div>

        <button type="submit" name="edit">Edit</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['edit'])) {
        mysqli_query($conn, "UPDATE data_pendaftaran SET
        no_pendaftaran='$_POST[no_pendaftaran]',
        nama_lengkap='$_POST[nama_lengkap]',
        jenis_kelamin='$_POST[jenis_kelamin]',
        asal_sekolah='$_POST[asal_sekolah]',
        jurusan_pilihan='$_POST[jurusan_pilihan]',
        no_telepon='$_POST[no_telepon]'
        WHERE id='$id'
    ");
       header("Location: dashboard.php");
        exit;
    }
?>