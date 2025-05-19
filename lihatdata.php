<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Penilaian Akhir Semester</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background-color: #f0f0f0;
      color: #333;
    }

    header {
      background-color: rgb(29, 207, 219);
      padding: 20px;
      text-align: center;
      color: black;
    }

    header h1 {
      margin-bottom: 10px;
    }

    nav a {
      margin: 0 15px;
      color: black;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .content {
      flex: 1; 
    }

    h2 {
      margin: 30px auto 10px auto;
      text-align: center;
    }

    .data-table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: center;
    }

    .data-table th {
      background-color: rgb(29, 207, 219);
      color: black;
    }

    .data-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .data-table tr:hover {
      background-color: #f1f1f1;
    }

    .data-table a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
    }

    .data-table a:hover {
      text-decoration: underline;
      color: #0056b3;
    }

  </style>
  
</head>
<body>
  <header>
    <h1>Website Data Sekolah</h1>
    <nav>
      <a href="index.php">Tambah Data</a>
      <a href="lihatdata.php">lihat Data</a>
    </nav>
  </header>

  <div class="content">

    <table class="data-table">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIS/NISN</th>
        <th>KELAS</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>Sebagai</th>
        <th>Aksi</th>
      </tr>
      <?php
            include './connect.php';

            $query = "SELECT * from tb_dataakun";
            $result = mysqli_query($connect, $query);

            $no = 1;

             while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>

          <td><?= $no++;?></td>
          <td><?= $row['nama'];?></td>
          <td><?= $row['nis'];?></td>
          <td><?= $row['kelas'];?></td>
          <td><?= $row['jenis_kelamin'];?></td>
          <td><?= $row['jurusan'];?></td>
          <td><?= $row['sebagai'];?></td>
          <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
            <a href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
          </td>
      </tr>
                <?php 
             }
             ?>
    </table>
  </div>

  <footer>
    <p>&copy; 2025 Sistem Data Siswa</p>
  </footer>
</body>
</html>
