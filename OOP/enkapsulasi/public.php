<?php
//buat class laptop
class Laptop{
    public $pemilik;
    //buat public method
    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}
//buat object dari class laptop (instansiasi)
$laptop_anto = new Laptop("Anto");
//set property
$laptop_anto->pemilik;//Anto
//tampilkan method
echo $laptop_anto->hidupkan_laptop();//"Hidupkan Laptop"