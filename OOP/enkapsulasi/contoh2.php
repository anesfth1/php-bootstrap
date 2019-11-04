<?php
class Manusia
{
    public $umur , $tgl_lahir;
    protected $jenis_kelamin;
    private $status;

    public function makan()
    {
        return "Manusia Juga Butuh Makan<br>";
    }
    public function minum()
    {
        return "Manusia Juga Butuh Minum<br>";
    }
    public function ambil_status($status_saat_ini)
    {
        return $this->status =  $status_saat_ini;
    }
    public function status_gua()
    {
        return "Barbar Namun Kadang Ambyar";
    }
}
class Pria extends Manusia
{
    public function jk($jk)
    {
        return $this->jenis_kelamin = $jk;
    }
    public function datadiri()
    {
        $datadiri = "<br> Aku Seorang " . $this->jenis_kelamin;
        $datadiri .= "<br> Yang Lahir Pada " . $this->tgl_lahir;
        $datadiri .= "<br> Sampai Saat Ini Masih " . $this->status_gua();
        $datadiri .= "<br> Karena Saya Masih " . $this->umur;
        $datadiri .= "<br> Belum Pantas Untuk Menikah <br>";
        return $datadiri;
    }
}
$saya = new Pria();
$saya->tgl_lahir = "3 Aug 1998";
$saya->jk("Laki-laki");
$saya->ambil_status("lajang");
$saya->umur = "21 Tahun";

echo $saya->datadiri();
echo $saya->makan();
echo $saya->minum();