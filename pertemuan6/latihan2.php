<?php
$siswa = [
    [
        "nis" => "07654378",
        "nama" => "siti nur aisyah",
        "email" => "siti24256@gmail.com",
        "jurusan" => "rekayasa perangkat lunak",
        "gambar" => "foto1.jpeg"
    ],
    [
        "nis" => "06754394",
        "nama" => "zuraa",
        "email" => "zura0@gmail.com",
        "jurusan" => "desain komunikasi visual",
        "gambar" => "foto2.jpg"
    ]
]
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Siswa</title>
<head>

<body>
    <h1>Daftar Siswa</h1>

    <?php foreach ($siswa as $s): ?>
        <ul>
            <li>
                <img src="img/<?= $s["gambar"]; ?>" width="200px"> 
            </li>
            <li>Nama : <?= $s["nama"]; ?></li>
            <li>NIS : <?= $s["nis"]; ?></li>
            <li>Jurusan : <?= $s["jurusan"]; ?></li>
            <li>Email : <?= $s["email"]; ?></li>
        </ul>
      <?php endforeach; ?>
    </body>

    </html>