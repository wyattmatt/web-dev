<?php

class Mahasiswa
{
    protected $id, $nama, $nim, $jurusan, $email, $gambar;

    public function __construct(?int $id = null, ?string $nama = null, ?string $nim = null, ?string $jurusan = null, ?string $email = null, ?string $gambar = null)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->email = $email;
        $this->gambar = $gambar;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNama($nama)
    {
        if (!is_string($nama)) {
            throw new InvalidArgumentException("Nama harus string!");
        } else {
            $this->nama = $nama;
        }
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setGambar($gambar)
    {
        $this->gambar = $gambar;
    }

    public function getGambar()
    {
        return $this->gambar;
    }

    public function tampilkanData()
    {
        echo "NO.       : " . $this->id . "<br>";
        echo "Nama      : " . $this->nama . "<br>";
        echo "NIM       : " . $this->nim . "<br>";
        echo "Jurusan   : " . $this->jurusan . "<br>";
        echo "Email     : " . $this->email . "<br>";
        echo "Foto      : " . $this->gambar . "<br>";
    }
}
