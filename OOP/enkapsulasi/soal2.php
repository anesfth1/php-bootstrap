<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Keluarga</title>
    <h2 align="center">ANGGOTA KELUARGA</h2>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>  
      <legend</legend>
      <pre>
<?php
if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];    

class Keluarga
{
    public $nama , $nik , $alamat , $umur;

    public function __construct($nama,$nik,$alamat,$umur)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }
    public function datadiri()
    {
       foreach ($this->nama as $key => $value) {
           echo "Nama   : " . $this->nama[$key].
                ", Nik    : " . $this->nik[$key].
                ", Alamat : " . $this->alamat[$key].
                ", Umur   : " . $this->umur[$key] . "<br>";
                
       }
    }
}
$sanak = new Keluarga ($nama , $nik , $alamat , $umur);
// var_dump($sanak->datadiri());
echo $sanak->datadiri() . "<br>";
}   
?>
</pre>  
      </fieldset>
      </form>
</body>
</html> 