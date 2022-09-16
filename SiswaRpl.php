<?php 
require("./Siswa.php");
class SiswaRpl extends Siswa{
    public $judullap;

    function __construct($nis, $nama, $tahun, $kota, $judullap) {
        parent:: __construct($nis, $nama, $tahun, $kota);
        $this->judullap = $judullap;
    }


    function CetakData() {
        echo "Nis Siswa : ".$this->nis1."<br/>";
        echo "Nama Siswa : ".$this->nama."<br/>";
        echo "Tahun Siswa : ".$this->tahun."<br/>";
        echo "Kota Siswa : ".$this->kota."<br/>";
        echo "Umur Siswa : ".$this->CekUmur()."<br/>";
        echo "judullap Siswa : ".$this->judullap."<br/>";
    }


}
?>