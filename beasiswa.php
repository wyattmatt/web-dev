<?php

require_once 'mahasiswa.php';

class MhsBeasiswa extends Mahasiswa
{
    protected $ipk, $jenisBeasiswa;

    public function __construct(?int $id = null, ?string $nama = null, ?string $nim = null, ?string $jurusan = null, ?string $email = null, ?string $gambar = null, ?float $ipk = null, ?string $jenisBeasiswa = null)
    {
        parent::__construct($id, $nama, $nim, $jurusan, $email, $gambar);
        $this->ipk = $ipk;
        $this->jenisBeasiswa = $jenisBeasiswa;
    }

    public function setIpk($ipk)
    {
        $this->ipk = $ipk;
    }

    public function getIpk()
    {
        return $this->ipk;
    }

    public function setJenisBeasiswa($jenisBeasiswa)
    {
        $this->jenisBeasiswa = $jenisBeasiswa;
    }

    public function getJenisBeasiswa()
    {
        return $this->jenisBeasiswa;
    }

    public function tampilkanData()
    {
        parent::tampilkanData();
        echo "IPK         : " . $this->ipk . "<br>";
        echo "Jenis Beasiswa: " . $this->jenisBeasiswa . "<br>";
    }
}
