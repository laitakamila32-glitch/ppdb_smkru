<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMK Riyadhul Ulum</title>
    <link rel="stylesheet" href="css/sampul.css">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/logo.jpg" alt="">
            <div class="text-logo">
                <h1>SMK RIYADHUL ULUM</h1>
                <p>Berakhlak, Berilmu, Berprestasi, Siap Kerja</p>
            </div>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#statistik">Profil</a></li>
            <li><a href="#home">PPDB</a></li>
            <li><a href="#info">Informasi</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
        <div class="login">
            <a href="../data_siswa/cek_status.php" class="siswa">Cek Status</a>
            <a href="login_admin.php" class="admin">Login Admin</a>
        </div>
    </nav>

    <section id="home" class="home">

        <div class="content">
            <h2>PPDB ONLINE</h2>
            <h1>SMK RIYADHUL ULUM</h1>
            <h3>Tahun Ajaran 2026/2027</h3>
            <p>Bergabunglah dengan kami dan wujudkan masa depan 
                cerah dengan pendidikan berkualitas dan kompetensi 
                siap kerja
            </p>
            <div class="button">
                <a href="pendaftaran.php" class="daftar">Daftar Sekarang -></a>
                <a href="https://ppdb.riyul.com/brosursmk26/" class="info">Lihat Informasi</a>
            </div>
        </div>
    </section>

    <section id="statistik" class="statistik">

        <div class="container-statistik">
            <div class="card">
                <div class="card-top">
                    <span>👥</span>
                    <div class="card-text">
                        <p>Kuota Murid Baru</p>
                            <h1>300</h1>
                        <p>Murid</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-top">
                    <span>🎓</span>
                    <div class="card-text">
                        <h1>Kompetensi Unggulan</h1>
                        <p>✔ Siap Kerja</p>
                        <p>✔ Berkarakter</p>
                        <p>✔ Berprestasi</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-top">
                    <span>🏫</span>
                    <div class="card-text">
                        <p>Jenjang</p>
                        <h1>SMK</h1>
                        <p>Kelas 10</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-top">
                    <span>🏆</span>
                    <div class="card-text">
                        <p>Akreditasi</p>
                            <h1>A</h1>
                        <p>Terakreditasi</p> 
                    </div> 
                </div>              
            </div>
        </div>
    </section>

    <section id="jurusan" class="jurusan">
        <h2>Program Keahlian</h2>
        <div class="jurusan-container">
            <div class="jurusan-card">
                <span>💻</span>
                <h3>Rekayasa Perangkat Lunak</h3>
                <p>Membuat website, aplikasi, dan mempelajari pemrograman.</p>
            </div>

            <div class="jurusan-card">
                <span>🏍️</span>
                <h3>Teknik Sepeda Motor</h3>
                <p>Mempelajari perawatan, perbaikan, dan teknologi sepeda motor.</p>
            </div>

            <div class="jurusan-card">
                <span>👗</span>
                <h3>Tata Busana</h3>
                <p>Mempelajari desain, pola, dan pembuatan busana.</p>
            </div>
        </div>
    </section>

    <section id="info" class="informasi">

        <div class="info-card">
            <h3>SYARAT PENDAFTARAN</h3>

            <ul>
                <li>Fotokopi Ijazah / SKL</li>
                <li>Fotokopi Akta Kelahiran</li>
                <li>Fotokopi Kartu Keluarga</li>
                <li>Pas Foto 3x4 (4 lembar)</li>
                <li>Fotokopi Rapor Semester 1-5</li>
                <li>Surat Keterangan Sehat</li>
                <li>Berkas lainnya (jika ada)</li>
            </ul>

            <a href="#">Lihat Selengkapnya</a>
        </div>

        <div class="info-card">
            <h3>JADWAL PPDB</h3>

            <table>
                <tr>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                </tr>
                <tr>
                    <td>Pendaftaran</td>
                    <td>1 Mei - 20 Juni 2026</td>
                </tr>
                <tr>
                    <td>Verifikasi</td>
                    <td>1 Mei - 22 Juni 2026</td>
                </tr>
                <tr>
                    <td>Seleksi</td>
                    <td>23 - 25 Juni 2026</td>
                </tr>
                <tr>
                    <td>Pengumuman</td>
                    <td>30 Juni 2026</td>
                </tr>
            </table>

            <a href="#">Lihat Jadwal Lengkap</a>
        </div>

        <div class="info-card">
            <h3>ALUR PENDAFTARAN</h3>

            <ul>
                <li>Buat akun / Login</li>
                <li>Isi formulir pendaftaran</li>
                <li>Upload berkas persyaratan</li>
                <li>Verifikasi berkas</li>
                <li>Cek hasil seleksi</li>
                <li>Daftar ulang</li>
            </ul>

            <a href="#">Lihat Selengkapnya</a>
        </div>
    </section>

    <section>
        <div class="akhir">
            <div class="cta-card">
                <img src="img/siswa.jpg" alt="">

                <div class="cta-text">
                    <h3>Ayo Bergabung Bersama Kami!</h3>
                    <p>Dapatkan pendidikan terbaik di SMK IT Riyadhul Ulum.</p>

                    <a href="pendaftaran.php" class="btn-daftar">
                        Daftar Sekarang →
                    </a>
                </div>
            </div>

            <div class="login-card">
                <h3>LOGIN PENGGUNA</h3>

                <a href="data_siswa/cek_status.php" class="login-siswa">
                    Cek status →
                </a>

                <a href="login_admin.php" class="login-admin">
                    Login Admin →
                </a>
            </div>
        </div>
    </section>

    <section class="kontak" id="kontak">
        <div>
            <h4>📍 Alamat</h4>
            <p>Jl. Pendidikan No. 123</p>
        </div>

        <div>
            <h4>📞 Telepon</h4>
            <p>(021) 123456789</p>
        </div>

        <div>
            <h4>✉ Email</h4>
            <p>info@smkritiyadhululum.sch.id</p>
        </div>

        <div>
            <h4>📌 Lokasi</h4>
            <p>Lihat di Google Maps</p>
        </div>
    </section>

    <footer>
        <p>© 2026 SMK IT Riyadhul Ulum. All Rights Reserved.</p>
    </footer>
</body>
</html>