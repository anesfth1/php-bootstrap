<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gaji Karyawan</title>
    <h2 align="center">GAJI KARYAWAN</h2>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
      <legend</legend>
      <pre>
<?php
if(isset($_POST['Simpan'])){
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $kerja = $_POST['jumlah'];    

class Gaji
{
    public $nama , $nip , $alamat , $kerja;

    public function __construct($nama,$nip,$alamat,$kerja)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
        $this->kerja = $kerja;
    }
    public function datadiri()
    {
        $data = "Nama Karyawan     : $this->nama <br>";
        $data .= "NIP               : $this->nip <br>";
        $data .= "Alamat            : $this->alamat <br>";
        $data .= "Jumlah Hari Kerja : $this->kerja <br>";
        return $data;
    }
    public function gajikotor()
    {
        $gajikotor = $this->kerja * 75000;
        return $gajikotor;
    }
    public function gajibersih()
    {
        $gajibersih = ($this->kerja * 75000) - ($this->kerja * 75000) * 0.025;
        // var_dump($this->gajikotor() * $this->0.025);
        return $gajibersih;
    }
}
$karyawan = new Gaji ($nama , $nip , $alamat , $kerja);
// var_dump($karyawan->datadiri());
echo $karyawan->datadiri() . "<br>";
echo "Gaji Kotor : " . $karyawan->gajikotor() . "<br>";
echo "Gaji Bersih : " . $karyawan->gajibersih();
}   
?>
</pre>  
      </fieldset>
      </form>
</body>
</html> 