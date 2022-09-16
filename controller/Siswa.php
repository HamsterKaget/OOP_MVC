<?php 
require('./Form.php');
require('./Model/ModelSiswa.php');
require('./view/TampilForm.php');
    class Siswa{
        // State / Atributes
        var $nis; 
        var $nama; 
        var $tahun;
        var $kota;

        // function __construct($nis, $nama, $tahun, $kota) {
        //     $this->nis = $nis;
        //     $this->nama = $nama;
        //     $this->tahun = $tahun;
        //     $this->kota = $kota;
        // }

        public function CetakData(){
            $txt = "--------------------------------------";
            $txt = "Nis Siswa : ".$this->nis."<br/>";
            $txt = "Nama Siswa : ".$this->nama."<br/>";
            $txt = "Tahun Siswa : ".$this->tahun."<br/>";
            $txt = "Kota Siswa : ".$this->kota."<br/>";
            $txt = "Umur Siswa : ".$this->CekUmur()."<br/>";
            $txt = "--------------------------------------";
            require('./view/TampilData.php');
        }

        protected function CekUmur() {
            $Umur=date("Y") - $this->tahun;
            return $Umur;
        }

        function inputForm() {
            $formSiswa = new Form('', 'input Data');
            $formSiswa->AddField('nis', 'NIS Siswa');
            $formSiswa->AddField('nama', 'Nama Siswa');
            $formSiswa->AddField('tahun', 'Tahun Lahir Siswa');
            $formSiswa->AddField('kota', 'Kota Tinggal Siswa');
            if(isset($_POST['tombol'])) {
                $data = $formSiswa->GetData();
                $this->nis=$data[0];
                $this->nama=$data[1];
                $this->tahun=$data[2];
                $this->kota=$data[3];
                $this->CetakData();
                require('./koneksi.php');
                $modelSiswa = new ModelSiswa();
                $sql = $modelSiswa->InsertSiswa($this);
                if($db->query($sql)===TRUE){
                    echo "Data Berhasil Masuk";
                } else {
                    echo "Data Gagal Diinput".$sql."<br/>".$db->error;
                }

            } else {
                $cetak = $formSiswa->DisplayForm();
                // require('./view/TampilForm.php');
            }
        }

    }
?>