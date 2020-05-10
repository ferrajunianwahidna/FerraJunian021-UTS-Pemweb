<?php

class InfoShio {
  public $tahun,
        $shio;


    public function __construct( $tahun, $shio) {
      $this->tahun = $tahun;
      $this->shio = $shio;
    }

    public function __toString() {
      return "tahun lahir: " . $this->tahun . ". <br> nama shio : ". $this->shio;
  }
}
  $tahun1 = new InfoShio("2000", "Naga Emas");
 
  
  echo "INFORMASI";
  echo "<br>";
  echo $tahun1;
  echo "<br>";
 
  

class RamalanShio extends InfoShio{
    public $ramal,
          $karakter;
     


    public function __construct( $karakter, $ramal) {
      $this->karakter = $karakter;
      $this->ramal = $ramal;
      
    }

    public function __toString() {
      return "Karakter Shio: " . $this->karakter . "<br> Ramalan tahun ini: " . $this->ramal;
    }


  }

  $ramalan1 = new RamalanShio("<br> Karakter shio naga emas yang paling dominan adalah Percaya diri.Naga melambangkan kekuatan, keluhuran, kehormatan, keberuntungan,dan kesuksesan pada budaya tradisional Tiongkok <br> ","<br> ramalan tahun ini naga emas akan membuat progres kinerja bisnis yang bagus. Rencana bisnis kecil bisa berubah menjadi perusahaan yang menguntungkan.Hubungan pada tahun ini tida akan fokus. harus intropeksi diri lebih dalam lagi");

  echo "<br><br>";
  echo "RAMALAN SHIO ";
  echo "<br>";
  
  echo $ramalan1;