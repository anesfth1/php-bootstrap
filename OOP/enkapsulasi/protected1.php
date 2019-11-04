<?php
//buat class Laptop
class Laptop{
    //buat protected property 
    protected $pemilik;
    //buat protected method
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}
//buat object dari class laptop (Instantsiasi)
$laptop_anto = new Laptop();
//set protected property akan menghasilkan error
$laptop_anto->pemilik;
// Fatal Error : Cannot access protected property laptop::$pem

echo $laptop_anto->pemilik;

echo $laptop_anto->hidupkan_laptop();