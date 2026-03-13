<?php

include "Mahasiswa.php";

// objek 1
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
$mahasiswaTI->tampilkanData();

echo "<br><br>";

// objek 2
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A11.2000.00002', 'Aldi', 'Sistem Informasi');
$mahasiswaSI->tampilkanData();

echo "<br><br>";

// objek 3
$mahasiswaDKV = new Mahasiswa();
$mahasiswaDKV->setData('A11.2000.00003', 'Evan', 'Desain Komunikasi Visual');
$mahasiswaDKV->tampilkanData();

?>