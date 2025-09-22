<?php

require_once 'mahasiswa.php';
require_once 'beasiswa.php';

class Kelas
{
    protected ?Mahasiswa $mahasiswa;
    protected ?string $ruangKelas;

    public function __construct(?string $ruangKelas = null, ?Mahasiswa $mahasiswa = null)
    {
        $this->ruangKelas = $ruangKelas;
        $this->mahasiswa = $mahasiswa;
    }

    public function setRuangKelas($ruangKelas)
    {
        $this->ruangKelas = $ruangKelas;
    }

    public function getRuangKelas()
    {
        return $this->ruangKelas;
    }

    public function setMahasiswa(Mahasiswa $mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }

    public function getMahasiswa()
    {
        return $this->mahasiswa;
    }

    public function tampilkanKelas()
    {
        echo "<hr>";
        echo "Ruang Kelas : " . $this->ruangKelas . "<br>";
        echo "Mahasiswa  : " . "<br>";
        $this->mahasiswa->tampilkanData();
    }
}
