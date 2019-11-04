<?php
class Aritmatika{
    public $bil1,$bil2;
    public function pertambahan($a=null, $b=null)
    {
        $this->bil1 = $bil2;
        return "Soal Pertambahan! <br>Hitunglah nilai berikut ini . . .<br> $a + $b<br>";
    }
    public function proses($tambah)
    {
        $a = 20;
        $b = 10;
        $tambah = $a+$b;
        $this->tambah = $tambah;
        return "Jawab! <br> $a + $b = $tambah";
    }
    public function penguranggan($a=null, $b=null)
    {
        $this->bil1 = $bil2;
        return "<br><br>Soal Penguranggan! <br>Hitunglah nilai berikut ini . . .<br> $a - $b<br>";
    }
    public function proses2($kurang)
    {
        $a = 20;
        $b = 10;
        $kurang = $a-$b;
        $this->kurang = $kurang;
        return "Jawab! <br> $a - $b = $kurang";
    }
    public function perkalian($a=null, $b=null)
    {
        $this->bil1 = $bil2;
        return "<br><br>Soal Perkalian! <br>Hitunglah nilai berikut ini . . .<br> $a x $b<br>";
    }
    public function proses3($kali)
    {
        $a = 20;
        $b = 10;
        $kali = $a*$b;
        $this->kali = $kali;
        return "Jawab! <br> $a x $b = $kali";
    }
    public function pembagian($a=null, $b=null)
    {
        $this->bil1 = $bil2;
        return "<br><br>Soal Pembagian! <br>Hitunglah nilai berikut ini . . .<br> $a : $b<br>";
    }
    public function proses4($bagi)
    {
        $a = 20;
        $b = 10;
        $bagi = $a/$b;
        $this->bagi = $bagi;
        return "Jawab! <br> $a : $b = $bagi";
    }
}
$bilangan = new Aritmatika();
echo $bilangan->pertambahan(20,10);
echo $bilangan->proses($tambah);
$bilangan2 = new Aritmatika();
echo $bilangan->penguranggan(20,10);
echo $bilangan->proses2($kurang);
$bilangan3 = new Aritmatika();
echo $bilangan->perkalian(20,10);
echo $bilangan->proses3($kali);
$bilangan4 = new Aritmatika();
echo $bilangan->pembagian(20,10);
echo $bilangan->proses4($kali);

?>