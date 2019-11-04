<?php
class Siswa{
    public $nama, $alamat, $usia;
    
    public function datadiri($nama=null ,$alamat=null ,$usia=null)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->usia = $usia;
        return "Nama : $nama<br> Alamat : $alamat<br> Usia : $usia<br>";
    }
   public function hobi($hobi)
   {
       $this->hobi = $hobi;
       return "Hobi : $hobi";
   }
}
$siswa1= new Siswa();
echo $siswa1->datadiri("Ahmad", "Bandung", 10);
echo $siswa1->hobi("Memancing");
?>