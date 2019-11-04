<?php
 class rpl2{
     public $siswa;
     public $laki;
     public $cewe;
     public $wakel;
     public $ketua;

     public function sekolah()
     {
         return "Smk Assalaam";
     }
     public function jurusan(){
         return "XI RPL 2<br>";
     }
 }
 $a = new rpl2;
 $a->siswa=32;
 $a->laki=22;
 $a->cewe=10;
 $a->wakel="Dady Wildan";
 $a->ketua="Refa";
 echo  $a->jurusan()." terdiri dari $a->siswa siswa,
       yang diantaranya : <br>";
 echo "Siswa Laki-laki : $a->laki<br>";
 echo "Siswa Perempuan : $a->cewe<br>";
 echo "Wali Kelas      : $a->wakel<br>";
 echo "Ketua Murid     : $a->ketua<br><br>";
?>

