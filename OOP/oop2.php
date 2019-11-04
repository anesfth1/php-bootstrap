<?php
class orang{ 
    public $warna_rambut = "Hitam";
    public $tinggi_badan = 170 . " cm";
    public $nilai = 36.22;
    public $manusia = true;

    public function sekolah($hadi)
    {
        return "XI - " . $hadi;
    }
}
$Anes = new orang;
echo $Anes->warna_rambut;
echo "<br>" . $Anes->tinggi_badan;
echo "<br>" . $Anes->sekolah("Informatika");
echo "<br>" . $Anes->nilai;
echo "<br>" . $Anes->manusia;
