<?php

require_once 'mahasiswa.php';
require_once 'beasiswa.php';
require_once 'kelas.php';

$mhs1 = new Mahasiswa(1, "Amanda", "72180220", "MAN", "amanda@ciputra.ac.id", "amanda.jpg", 3.5, "Gold");


$mhs2 = new MhsBeasiswa();
$mhs2->setId(2);
$mhs2->setNama("Tulus");
$mhs2->setNim("72180221");
$mhs2->setJurusan("IMT");
$mhs2->setEmail("tulus@ciputra.ac.id");
$mhs2->setGambar("tulus.jpg");
$mhs2->setIpk(3.8);
$mhs2->setJenisBeasiswa("Ruby");

$kelas1 = new Kelas("605", $mhs1);
$kelas2 = new Kelas("606", $mhs2);

$kelas1->tampilkanKelas();
$kelas2->tampilkanKelas();