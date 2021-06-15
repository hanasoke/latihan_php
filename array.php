<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>
  <h1>Berlatih Array</h1>

  <?php 
    echo "<h3>Soal 1</h3>";

    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");

    echo "<pre>";
    print_r($kids);
    echo "</pre>";
    echo "<pre>";
    print_r($adults);
    echo "</pre>";

    echo "<h3>Soal 2</h3>";
    echo "Cast Stranger Things: ";
    echo "<br>";
    $kids_amount = count($kids);
    echo "Total Kids : $kids_amount"; //Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
      echo "<li> $kids[0] </li>";
      echo "<li> $kids[1] </li>";
      echo "<li> $kids[2] </li>";
      echo "<li> $kids[3] </li>";
      echo "<li> $kids[4] </li>";
      echo "<li> $kids[5] </li>";
    echo "</ol>";

    echo "<br>";

    $adults_amount = count($adults);
    echo "Total Adults : $adults_amount"; //Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
      echo "<li> $adults[0] </li>";
      echo "<li> $adults[1] </li>";
      echo "<li> $adults[2] </li>";
      echo "<li> $adults[3] </li>";
      echo "<li> $adults[4] </li>";
    echo "</ol>";

    echo "<br>";

    $people = [
      ["Name"=>"Will Byers", "Age" => 12, "Aliases" => "Will the Wise", "Status" => "Alive"],
      ["Name"=>"Mike Wheeler", "Age" => 12, "Aliases" => "Dungeon Master", "Status" => "Alive"],
      ["Name"=>"Jim Hopper", "Age" => 43, "Aliases" => "Chief Hopper", "Status" => "Deceased"],
      ["Name"=>"Eleven", "Age" => 12, "Aliases" => "EL", "Status" => "Alive"]
    ];

    echo "<pre>";
    print_r($people);
    echo "</pre>";


  ?>
</body>
</html>