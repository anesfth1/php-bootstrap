<?php
class Lingkaran
{
    public $jari , $phi = 3.14;

    public function __construct($jari)
    {
        $this->jari = $jari;
  
    }
    public function keliling()
    {
        $keliling = 2 * (3.14 * $this->jari);
        return $keliling;
    }
    public function luas()
    {
        $luas = 3.14 * $this->jari * $this->jari;
        return $luas;
    }
}
if(isset($_POST['Simpan']))
{
    $jari = $_POST['jari'];
}
$lingkaran = new Lingkaran($jari);
echo "Jari-jari Lingkaran : $lingkaran->jari <br>";
echo "Luas lingkaran      : " . $lingkaran->luas()."<br>";
echo "Keliling lingkaran  : " . $lingkaran->keliling() . "<br>";
echo "<br>";
?>