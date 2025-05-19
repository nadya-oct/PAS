<?php 
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST['nama'];
  $nis = $_POST['nis'];
  $kelas = $_POST['kelas'];
  $jenisKelamin = $_POST['jenisKelamin'];
  $jurusan = $_POST['jurusan'];
  $sebagai = $_POST['sebagai'];

  $query = "INSERT INTO tb_dataakun (nama, nis, kelas, jenis_kelamin, jurusan, sebagai) VALUES ('$nama', '$nis', '$kelas', '$jenisKelamin', '$jurusan', '$sebagai')";

 if (mysqli_query($connect, $query)) {
  echo ("Success");
  header('location: ./lihatdata.php');
 }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penilaian Akhir Semester</title>
    <link rel="stylesheet" href="style.css" />

    <style>
      header {
        background-color: rgb(29, 207, 219);
        padding: 20px;
        text-align: center;
        color: white;
      }

      header h1 {
        margin-bottom: 10px;
      }

      nav a {
        margin: 0 15px;
        color: white;
        text-decoration: none;
        font-weight: bold;
      }

      nav a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <h1>WEBISTE DATA SEKOLAH</h1>
        <a href="index.php">Tambah Data</a>
        <a href="lihatdata.php">Lihat Data</a>
      </nav>
    </header>
    <h3>Tambah Data Siswa/Guru</h3>
    <main class="content">
      <form action="" method="POST">
        <div class="form-group">
          <label>
            Nama
            <br />
            <input name="nama" type="text" placeholder="Masukkan Nama" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            NIS/NISN
            <br />
            <input name="nis" type="text" placeholder="Masukkan NIS/NISN" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Kelas
            <br />
            <input name="kelas" type="text" placeholder="Masukkan Kelas" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Jenis Kelamin
            <br />
            <select name="jenisKelamin">
              <option value="pilih">Pilih</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Jurusan
            <br />
            <input name="jurusan" type="text" placeholder="Masukkan Jurusan" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Sebagai
            <br />
            <select name="sebagai">
              <option value="pilih">Pilih</option>
              <option value="guru">Guru</option>
              <option value="siswa">Siswa</option>
            </select>
          </label>
        </div>

        <br />
        <div class="btn-wrapper">
          <button type="submit">Tambahkan Data</button>
        </div>
      </form>
    </main>
    <footer>
      <p></p>
    </footer>
  </body>
</html>
