<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html>
<head>
      <title>Halaman Admin</title>
      <style>
        .loader {
            width: 20px;
            position: absolute;
            top:140px;
            left: 340px;
            z-index: -1;
            display: none;
        }
        @media print {
             .logout, .tambah, .from-cari, .aksi {
                display: none;
             }
        }
      </style>
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/script.js"></script>

</head>
<body>

<a href="logout.php" class="logout">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
<br></br>

<form action="" method="post" class="from-cari">

      <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
      <button type="submit" name="cari" id="tombol-cari">Cari!</button>

      <img src="img/loader.gif" class="loader">

</form>

<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Nrp</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td class="aksi">
        <a href="ubah.php?id=<?= $row['Id']; ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row['Id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?> " width="50px"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr> 
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>

</body>
</html>