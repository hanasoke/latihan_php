<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP 2</title>
</head>
<body>
  <h1>Berlatih Looping</h1>
  <?php 
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";

    echo "<h3>Looping Pertama</h3>";
    $x = 2;
    while ($x <= 20) {
      echo "<p>$x - I Love PHP</p>";
      $x+=2;
    }

    echo "<h3>Looping Kedua</h3>";
    $x = 20;
    while ($x >= 2) {
      echo "<p>$x - I Love PHP</p>";
      $x-=2;
    }

    echo "<h3>Soal No 2 Looping Array Module</h3>";
    /* 
      Soal No 2
      Looping Array Module
      Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
      Tampung ke dalam array baru bernama $rest 
    */

    $numbers = [18, 45, 29, 61, 47, 34];
    $jumlah = count($numbers);
    echo "array numbers : " . $jumlah ;
    echo '<br>';
    print_r($numbers);
    // Lakukan Looping di sini
    foreach($numbers as $rest)
    {
      echo "<br>";      

      echo($rest == 45) ? "Sisa  Bagi" : "Tidak ada hasil bagi";

      echo "Array sisa baginya  adalah : " . $rest;
      echo "<br>";
    }

    echo "<h3> Soal No 3 Looping Asociative Array </h3>";

    $modul_gaming = [
      [
        "id" => 001, 
        "name" => "Keyboard Logitek", 
        "price" => 60000, 
        "description" => "Keyboard yang mantap untuk kantoran", 
        "source" => "logitek.jpeg"
      ],
      [
        "id" => 002, 
        "name" => "Keyboard MSI", 
        "price" => 30000, 
        "description" => "Keyboard gaming MSI mekanik", 
        "source" => "msi.jpeg"
      ],
      [
        "id" => 003, 
        "name" => "Mouse Genius", 
        "price" => 50000, 
        "description" => "Mouse Genius biar lebih pinter", 
        "source" => "msi.jpeg"
      ],
      [
        "id" => 004, 
        "name" => "Mouse Jerry", 
        "price" => 30000, 
        "description" => "Mouse yang disukai kucing", 
        "source" => "jerry.jpeg"
      ]
    ];

    print_r($modul_gaming);

    echo "<h3> Soal No 4 Asterix </h3>";

    $star = 5;
    for ($i = $star; $i > 0; $i--) { 
      for ($j = $star; $j >= $i ; $j--) { 
        echo "*";
      }
      echo "<br>";
    }

    echo "<h3>Soal No 1 Greetings</h3>";
    function greetings($name) {
      echo "Halo ".$name.", Selamat Datang di Sanbercode!";
    }

    greetings("bagas");
    echo "<br>";
    greetings("wahyu");
    echo "<br>";
    greetings("abdul");
    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";

    function reverse($nama) {
      $balik = strlen($nama);
      $baskom = " ";
      for ($i = ($balik - 1); $i >= 0; $i--) { 
        $baskom .= $nama[$i];
      }
      return $baskom;
    }

    reverse("abduh");
    echo "<br>";
    reverse("Sanbercode");
    echo "<br>";
    reverse("We Are Sanbers Developers");

    /*
    Soal 4
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
    berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
    Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
    sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
    */

    function tentukan_nilai($number){

      $value="";
      
      if ($number > 85 && $number <= 100 ) {
        $value .= "Sangat Baik";
      } else if($number >= 70 && $number <= 85) {
        $value .= "Baik";
      } else if($number >= 60 && $number < 70) {
        $value .= "Cukup";
      } else {
        $value .= "Kurang";
      };
    };

    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang

  ?>

</body>
</html>