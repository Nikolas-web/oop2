<?php

// Abstract Class adalah sebuah class yang tidak bisa di-instansiasi dan berperan sebagai ‘kerangka dasar’ bagi class turunannya. 

abstract class Mobil
{
    
// Protected mirip seperti private, yakni tidak bisa diakses di luar class. Perbedaannya hanya ketika class itu di turunkan, dimana data member dan member function yang di-set sebagai protected masih bisa diakses oleh class turunan. 
    protected $merk;
    protected $tipe;
    protected $kecepatan = 0;

    public function nyalakan() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        echo "Menyalakan {$this->merk} {$this->tipe} \n"; // Fungsi echo untuk menampilkan teks ke layar.
    }

    public function matikan() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        echo "Mematikan {$this->merk} {$this->tipe} \n"; // Fungsi echo untuk menampilkan teks ke layar.
    }

    public function kecepatanUp() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        if ($this->kecepatan < 5) { // fungsi if untuk Pernyataan yang dijalankan jika kondisi bernilai benar / true
            $this->kecepatan++; // untuk method hampir sama dengan menuliskan nama variabelnya untuk menampung objek kemudian gunakan tanda (->)
            echo "Berhasil menambah kecepatan {$this->merk} {$this->tipe} \n"; // Fungsi echo untuk menampilkan teks ke layar.
        }
    }

    public function kecepatanDown() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        if ($this->kecepatan != 0) {  // fungsi if untuk Pernyataan yang dijalankan jika kondisi bernilai benar / true
            $this->kecepatan--; // untuk method hampir sama dengan menuliskan nama variabelnya untuk menampung objek kemudian gunakan tanda (->)
            echo "Berhasil mengurangi kecepatan {$this->merk} {$this->tipe} \n"; // Fungsi echo untuk menampilkan teks ke layar.
        }
    }

    abstract public function BahanBakar(); // abstract method, isi dari method tersebut akan dibuat dalam class turunan. Abstract method harus berada di dalam abstract class.

    public function getMerk() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        return $this->merk . "\n"; // mengembalikan nilai yang tersimpan dalam sebuah variabel kepada kode yang akan memanggil function tersebut.
    }

    public function getTipe() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        return $this->tipe. "\n"; // mengembalikan nilai yang tersimpan dalam sebuah variabel kepada kode yang akan memanggil function tersebut.
    }

    public function getkecepatan() { // cara membuat method sama seperti property, method juga diawali dengan akses modifier yang di set sebagai public 
        return "Kecepatan sekarang : {$this->kecepatan} \n"; // mengembalikan nilai yang tersimpan dalam sebuah variabel kepada kode yang akan memanggil function tersebut.
    }
}