<?php

// require once adalah fungsi untuk menyertakan sebuah file PHP kedalam file PHP lainnya dan memastikan file yang disertakan tersebut hanya dieksekusi sekali saja meskipun disertakan beberapa kali dalam beberapa baris program.
require_once "Bmw.php"; 
require_once "Toyota.php";
require_once "Mitsubishi.php";

// dan ini cara memanggil fungsi constructor diawali dengan nama variabel dan diakhiri nama object 
$Bmw = new Bmw('F30'); 
$Bmw2 = new Bmw('X3');
$Toyota = new Toyota('Innova'); 
$Mitsubishi = new Mitsubishi('Pajero'); 

// Fungsi echo untuk menampilkan teks ke layar dan dilanjutkan nama variabel untuk menampilkan data tsb
echo "Daftar Mobil :";
echo "<br>";
echo $Bmw->getMerk();
echo "<br>";
echo $Toyota->getMerk();
echo "<br>";
echo $Mitsubishi->getMerk();
echo "<br>";

echo "<hr>";

// Fungsi echo untuk menampilkan teks ke layar dan dilanjutkan nama variabel untuk menampilkan data tsb
echo $Bmw->getMerk();
echo $Bmw->getTipe();
echo "<br>";
echo $Bmw->nyalakan();
echo "<br>";
echo $Bmw->getKecepatan();
echo "<br>";
$Bmw->kecepatanUp(); 
echo "<br>";
$Bmw->kecepatanUp(); 
echo "<br>";
$Bmw->kecepatanUp(); 
echo "<br>";
$Bmw->kecepatanUp(); 
echo "<br>";
$Bmw->kecepatanUp(); 
echo "<br>";
$Bmw->kecepatanUp(); 
echo $Bmw->getKecepatan();
echo "<br>";
echo $Bmw->kecepatanDown();
echo "<br>";
echo $Bmw->getKecepatan();
echo "<br>";
echo $Bmw->BahanBakar();
echo "<br>";
echo $Bmw->oli();
echo "<br>";
echo $Bmw->matikan();
echo "<br>";
echo $Bmw->setTahunPembuatan(2021);
echo $Bmw->getTahunPembuatan();

echo "<hr>";

// Fungsi echo untuk menampilkan teks ke layar dan dilanjutkan nama variabel untuk menampilkan data tsb
echo $Toyota->getMerk();
echo $Toyota->getTipe();
echo "<br>";
echo $Toyota->nyalakan();
echo "<br>";
echo $Toyota->getKecepatan();
echo "<br>";
$Toyota->kecepatanUp(); 
echo "<br>";
$Toyota->kecepatanUp(); 
echo "<br>";
$Toyota->kecepatanUp(); 
echo "<br>";
$Toyota->kecepatanUp(); 
echo "<br>";
$Toyota->kecepatanUp(); 
echo "<br>";
$Toyota->kecepatanUp(); 
echo $Toyota->getKecepatan();
echo "<br>";
echo $Toyota->kecepatanDown();
echo "<br>";
echo $Toyota->getKecepatan();
echo "<br>";
echo $Toyota->BahanBakar();
echo "<br>";
echo $Toyota->oli();
echo "<br>";
echo $Toyota->matikan();
echo "<br>";
echo $Toyota->setTahunPembuatan(2022);
echo $Toyota->getTahunPembuatan();

echo "<hr>";

// Fungsi echo untuk menampilkan teks ke layar dan dilanjutkan nama variabel untuk menampilkan data tsb
echo $Mitsubishi->getMerk();
echo $Mitsubishi->getTipe();
echo "<br>";
echo $Mitsubishi->nyalakan();
echo "<br>";
echo $Mitsubishi->getKecepatan();
echo "<br>";
$Mitsubishi->kecepatanUp(); 
echo "<br>";
$Mitsubishi->kecepatanUp(); 
echo "<br>";
$Mitsubishi->kecepatanUp(); 
echo "<br>";
$Mitsubishi->kecepatanUp(); 
echo "<br>";
$Mitsubishi->kecepatanUp(); 
echo "<br>";
$Mitsubishi->kecepatanUp(); 
echo $Mitsubishi->getKecepatan();
echo "<br>";
echo $Mitsubishi->kecepatanDown();
echo "<br>";
echo $Mitsubishi->getKecepatan();
echo "<br>";
echo $Mitsubishi->BahanBakar();
echo "<br>";
echo $Mitsubishi->oli();
echo "<br>";
echo $Mitsubishi->matikan();
echo "<br>";
echo $Mitsubishi->setTahunPembuatan(2020);
echo $Mitsubishi->getTahunPembuatan();



