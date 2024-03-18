<?php
$mahasiswa = [
[
    "Nama" => "Alexa Olivia Alexandra", 
    "NRP" => "233040117", 
    "Email" => "AlexaOlivJo@unpas.sc.id",
    "Jurusan" => "Kedokteran",
    "Gambar" => "foto 1.jpg"
],
[
    "Nama" => "Aurora Lovania Anderson", 
    "NRP" => "233040127", 
    "Email" => "Roralovania04@unpas.sc.id",
    "Jurusan" => "Hukum",
    "Gambar" => "foto 2.jpg"
],
[
    "Nama" => "Bianca Dealova Christabel Smith", 
    "NRP" => "233040137", 
    "Email" => "Bysmith07@unpas.sc.id",
    "Jurusan" => "Kriminologi",
    "Gambar" => "foto 3.jpg"
],
[
    "Nama" => "Beby Arselila Queenza Xavier", 
    "NRP" => "233040147", 
    "Email" => "queenxavier13@unpas.sc.id",
    "Jurusan" => "Teknik Nuklir",
    "Gambar" => "foto 4.jpg"
],
[
    "Nama" => "Camella Veronica Evania Peterson", 
    "NRP" => "233040157", 
    "Email" => "mellaEvan@unpas.sc.id",
    "Jurusan" => "Arsitektur",
    "Gambar" => "foto 5.jpg"
],
[
    "Nama" => "Chelsea Emilia Amstrong", 
    "NRP" => "233040122", 
    "Email" => "ChelseaAms@unpas.sc.id",
    "Jurusan" => "Psikologi",
    "Gambar" => "foto 6.jpg"
],
[
    "Nama" => "Elisabeth Stephanie Putri William", 
    "NRP" => "233040130", 
    "Email" => "putrielisa119@unpas.sc.id",
    "Jurusan" => "Statistika",
    "Gambar" => "foto 7.jpg"
],
[
    "Nama" => "Gabriella Samantha Irene Josephan", 
    "NRP" => "233040144", 
    "Email" => "irene123456@unpas.sc.id",
    "Jurusan" => "Ilmu Komputer",
    "Gambar" => "foto 8.jpg"
],
[
    "Nama" => "Isabella Quella Ertha Steward", 
    "NRP" => "233040133", 
    "Email" => "belleertha@unpas.sc.id",
    "Jurusan" => "Teknik Informatika",
    "Gambar" => "foto 9.jpg"
],
[
    "Nama" => "Jecy Visolla Adhisla Lesham", 
    "NRP" => "233040111", 
    "Email" => "visollaADH@unpas.sc.id",
    "Jurusan" => "Hubungan Internasional",
    "Gambar" => "pic.jpg"
],
            ];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Mahasiswa </title>
    <style>
        img {
            width : 100px;
            height: 100px;
            border: 2px solid;
        }
    </style>
 </head>
 <body>

    <h1> Daftar Mahasiswa </h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li> <img src = "img/<?= $mhs["Gambar"]; ?>"></li>
        <li>Nama : <?= $mhs["Nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
 </body>
 </html>