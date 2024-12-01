<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "siti nur aisyah",
    "nrp" => "043040055",
    "email" => "siti nur aisyah02062007@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "foto3.jpg"
    ],
    [
        "nama" => "zuraa",
        "nrp" => "043040023",
        "email" => "zuraa@gmail.com",
        "jurusan" => "teknik kendaraan ringan",
        "gambar" => ""
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>