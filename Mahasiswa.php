<?php
class Mahasiswa
{
    // properties
    public $nim;
    public $nama;
    public $programStudi;

    // method untuk mengisi data
    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }

    // method mengambil data
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }

    // method baru untuk menampilkan data
    function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Program Studi : " . $this->programStudi . "<br><br>";
    }
}
?>