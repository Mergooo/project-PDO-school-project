<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inc/css/simple.css">
    <title>Index</title>
</head>
<body>
    <h1>Pokemon</h1>
    <p>Nach Generationen</p>
<?php

// $index_start declared in order to get the Pokemon2.csv read in pokemons.php
$index_start = "";
include "inc/functions/pokemons.php";
include "inc/functions/connection.php";
 


// sql query takes the generations from the table "pokedex" from my php myadmin database "pokedex"
//  saving all generations in the array $pokemon_generations_all
$table = "pokedex";
$sql = "SELECT generation FROM $table";
if ($stmt = $pdo->query($sql)) {
    $pokemon_generations_all = $stmt->fetchAll(PDO::FETCH_ASSOC);
};



//with this foreach the generations are saved in an associative array 
//where the keys are matching the number of the generations
//as my database contains the pokemons until generation 6, the array has 6 keys
$pokemon_generations=[];
foreach($pokemon_generations_all as $pokemon_generation){
   $gen = $pokemon_generation["generation"];
    if(empty($pokemon_generations[$gen])){
        $pokemon_generations[$gen]=$gen;
    }


}
?>

<table>
    <tr>

    <th><a>Generationen</a></th>


    

    </tr>
    <?php 
    // here a table with all generations (6) is created 
    //if in the database pokemons from newer generations would be added, the foreach will created the necessary rows
    // on this pokedex the user is required to click on one of the generations.
    foreach($pokemon_generations as $pokemon_generation) {
    ?>
    <tr>
        <td><a href="controller/pokemon_x_gen.php?genx=<?php echo $pokemon_generation; ?>">Pokemon der<?php echo $pokemon_generation; ?>.Generation </a></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>