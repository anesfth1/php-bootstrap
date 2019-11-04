<?php
 
 class Bandara 
 {
    
     private $no_transaksi = "B7AA45";
     protected $tempat_kursi = "B1-2";
     
     public function brp_no()
     {
         //proses logika di hitung disini.
         return $this->no_transaksi;
     }
 }
  class Pesawat extends Bandara
  {
      
    public  $jam_penerbangan = "21:00 - 05:00";

      public function tempat()
      {
          return $this->tempat_kursi;
      }
      public function terbang()
      {
          return "Lepas Landas";
      }
      public function brp_no()
      {
          return $this->no_garasi;
      }
  }

  $bandara = new Bandara();
  $pesawat = new Pesawat();
  echo "No Transaksi : " . $bandara->brp_no();
  echo "<br> Tempat Kursi : " . $pesawat->tempat();
  echo "<br> Jam Terbang : $pesawat->jam_penerbangan";
  echo "<br> Pesawat : " . $pesawat->terbang();