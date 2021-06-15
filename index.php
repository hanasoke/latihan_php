<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP</title>
</head>
<body>
  <h1>Berlatih String PHP</h1>
  <?php 
    echo "<h3>Soal No 1</h3>";
    $first_sentence = "Hello PHP!";
    $second_sentence = "I'm ready for the challenges";
    $karakter = strlen($first_sentence);
    echo 'Panjang String: ' . $karakter;
    echo '<br>';
    $kata = str_word_count($first_sentence);
    echo 'Panjang Kata: ' . $kata;
    echo '<br>';

    $karakter2 = strlen($second_sentence);
    echo 'Panjang String: ' . $karakter2;
    echo '<br>';
    $kata2 = str_word_count($second_sentence);
    echo 'Panjang Kata: ' . $kata2;
    echo '<br>';

    echo "<h3>Soal No 2</h3>";
    $string2 = "I love PHP";
    echo "<label>String : </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>";
    echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
    echo "Kata ketiga: " . substr($string2, 6, 7) . "<br>";

    echo "<br><br>";

    echo "<h3>Soal No 3</h3>";
    $string3 = "PHP is old but sexy";
    echo str_replace("sexy","awesome", $string3);




  ?>
</body>
</html>