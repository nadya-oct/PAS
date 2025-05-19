<?php
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM tb_dataakun WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_assoc($result);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idUp = $_POST['id'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenisKelamin'];
    $jurusan = $_POST['jurusan'];
    $sebagai = $_POST['sebagai'];

    $query = "UPDATE tb_dataakun SET 
    nama='$nama', 
    nis='$nis', 
    kelas='$kelas',
    jenis_kelamin='$jenis_kelamin', 
    jurusan='$jurusan',
    sebagai='$sebagai' 
    WHERE id='$idUp'";

    if (mysqli_query($connect, $query)) {
        echo "Data berhasil diperbarui";
        header(("Location: ./lihatdata.php"));
        exit;
    } else {
        echo "Gagal memperbarui data: ". mysqli_error($connect);
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
        <a href="index.html">Tambah Data</a>
        <a href="lihatdata.php">Lihat Data</a>
      </nav>
    </header>
    <h3>Tambah Data Siswa/Guru</h3>
    <main class="content">
      <form action="" method="POST">
            <input  name="id" value="<?php echo $data['id']?>" type="hidden" placeholder="Masukkan ID" />
        
        <div class="form-group">
          <label>
            Nama
            <br />
            <input name="nama" value="<?php echo $data['nama']?>" type="text" placeholder="Masukkan Nama" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            NIS/NISN
            <br />
            <input name="nis" value="<?php echo $data['nis']?>" type="text" placeholder="Masukkan NIS/NISN" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Kelas
            <br />
            <input name="kelas" value="<?php echo $data['kelas']?>" type="text" placeholder="Masukkan Kelas" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Jenis Kelamin
            <br />
            <select name="jenisKelamin">
              <option value="" selected disabled>Pilih</option>
              <option value="laki=laki"  <?php  if($data['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
              <option  value="perempuan" <?php  if($data['jenis_kelamin'] == 'perempuan') echo 'selected'; ?>>Perempuan</option>
            </select>
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Jurusan
            <br />
            <input name="jurusan" value="<?php echo $data['jurusan']?>" type="text" placeholder="Masukkan Jurusan" />
          </label>
        </div>

        <br />

        <div class="form-group">
          <label>
            Sebagai
            <br />
            <select name="sebagai">
              <option value="pilih" selected disabled>Pilih</option>
              <option value="guru" <?php  if($data['sebagai'] == 'guru') echo 'selected'; ?>>Guru</option>
              <option value="siswa" <?php  if($data['sebagai'] == 'siswa') echo 'selected'; ?>>Siswa</option>
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
