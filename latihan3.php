
<?php

class Pengguna {

    public $nama;
    public $email;

    // Constructor
    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

// Class Mahasiswa mewarisi class Pengguna
class Mahasiswa extends Pengguna {

    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);

        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa() {
        $this->tampilkanData();

        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }
}

// Membuat objek mahasiswa
$mhs1 = new Mahasiswa(
    "Andi",
    "andi@email.com",
    "2301001",
    "Sistem Informasi"
);

// Menampilkan data mahasiswa
$mhs1->tampilkanDataMahasiswa();

?>
