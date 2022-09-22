<?php

// require once adalah fungsi untuk menyertakan sebuah file PHP kedalam file PHP lainnya dan memastikan file yang disertakan tersebut hanya dieksekusi sekali saja meskipun disertakan beberapa kali dalam beberapa baris program.
require_once "Mobil.php";
require_once "Mekanik.php";

// class adalah sebuah blueprint atau template dalam konsep OOP
// cara membuat class dengan menuliskan keyword class kemudian diikuti dengan nama class
// adn objek adalah instensi dari class

// Konsep inheritance, inheritance adalah pewarisan atau penurunan. Dengan inheritance bisa menurunkan isi dari sebuah class ke class lain. Isi class yang dimaksud adalah property dan method, untuk menurunkan sebuah class dengan class lain dengan menggunakan keyword ekstends.
// untuk implements digunakan untuk mewarisi intterface

class Mitsubishi extends Mobil implements Mekanik
{
    public function __construct($tipe) // constructor merupakan sebuah method khusus atau magic method fungsi method ini untuk mempersimpel program 
    {
        $this->merk = get_class($this);
        $this->tipe = $tipe; // untuk method hampir sama dengan menuliskan nama variabelnya untuk menampung objek kemudian gunakan tanda (->)
    }

    public function BahanBakar() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        return "Solar \n"; // mengembalikan nilai yang tersimpan dalam sebuah variabel kepada kode yang akan memanggil function tersebut.
    }

    // setter adalah adalah member function atau method yang dipakai untuk memberikan nilai ke dalam sebuah data member
    public function setTahunPembuatan($tahunpembuatan) {
        $this->TahunPembuatan = $tahunpembuatan;
    }

    // Getter adalah member function yang dipakai untuk menampilkan nilai data member.
    public function getTahunPembuatan() {
        return "Tahun Pembuatan {$this->TahunPembuatan}";
    }

    public function oli() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        return "CF-4 \n"; // mengembalikan nilai yang tersimpan dalam sebuah variabel kepada kode yang akan memanggil function tersebut.
    }
}