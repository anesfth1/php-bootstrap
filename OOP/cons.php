<?php
class Siswa{
    public function __destruct()
    {
        echo "<br>Ini adalah Destructor";
    }
    public function hallo()
    {
        return "<br>Hello PHP";
    }
    public function __construct()
    {
        echo "Ini adalah Constructor";
    }

}
$hello = new Siswa();
echo $hello->hallo();




?>