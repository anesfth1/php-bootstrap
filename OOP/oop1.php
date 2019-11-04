<?php
class Kucing {
  public $warna = 'Kuning';
  public $jumlah_kaki = '4';

  public function makan($var , $var2)
  {
    return "Kucing Makan" . $var ."dan" . $var2;
  }
}
$kucing_asli = new Kucing;
echo $kucing_asli->warna;
echo "<br>" . $kucing_asli->jumlah_kaki;
echo "<br>" . $kucing_asli->makan("Tikus" . "Gajah");
?>
