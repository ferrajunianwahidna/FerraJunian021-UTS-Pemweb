<?php 

  class ramalan {
    public $zodiak,
         $tanggal,
         $Karir,
         $Kesehatan,
         $jodoh;



    public function __construct( $zodiak, $tanggal, $Karir, $Kesehatan, $jodoh ) {
      $this->zodiak = $zodiak;
      $this->tanggal = $tanggal;
      $this->Karir = $Karir;
      $this->Kesehatan = $Kesehatan;
      $this->jodoh = $jodoh;    }

    public function __toString() {
      return "Nama zodiak : " . $this->zodiak . ",<br> Tanggal, bulan, dan tahun : "  . $this->tanggal . ", <br> Ramalan karir : " . $this->Karir . ",<br> Ramalan Kesehatan : " . $this->Kesehatan . ", <br> Ramalan Jodoh : ". $this->jodoh;
    }


  }


  $zodiak1 = new ramalan("Gemini", "11 Juni 2000", "karir anda gemilang di bulan ini,tetap pertahankan", "Kesehatan anda agak memburuk", "Walaupun sedang patah hati tetap semangat, badai akan segera berlalu <br>");
  $zodiak2 = new ramalan("Scorpio", "20 Juli 2000", "Karir anda mungkin akan cenderung stagnan", "Kesehatan anda bagus, banyak minu air putih", "Hubungan anda mungkin akan dilanda ujian namun kedepannya akan lebih baik lagi <br> ");
  $zodiak3 = new ramalan("Taurus", "18 Agustus 2000", "Karir akan menanjak, pertahankan", "Kesehatan sepertinya sudah stabil daripada bulan lalu, tingkatkan imun", "Hubungan asmara mungkin akan bisa berlanjut yang penting adalah yakin kepada diri dan pasangan anda <br>");
  $zodiak4 = new ramalan("Leo", "2 September 2001", "karir sepertinya akan mengalami penurunan dikarenakan anda kurang konsentrasi, fokuslah pada tujuan anda", "Kesehatan sudah bagus jangan terlalu memikirkan sesuatu di luar konstrol anda", "Hubungan asmara akan sama seperti sebelumya maka lebih baik waspada dan berhati hati dalam menjalin hubungan");
  

  echo $zodiak1;
  echo "<br>";
  echo $zodiak2;
  echo "<br>";
  echo $zodiak3;
  echo "<br>";
  echo $zodiak4;