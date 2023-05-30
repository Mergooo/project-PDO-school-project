<?php
//echo __DIR__ . "<br>";

$pokedex = 0;
if ($pokedex == 1){




include "./../inc/functions/pokemons.php";
include "./../inc/functions/connection.php";

// this file contains the sql queries for creating the table and the database 

$sql = "CREATE DATABASE IF NOT EXISTS pokedex";

$sql = "CREATE TABLE IF NOT EXISTS pokedex (
     pokemon_table_id INTEGER  (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    index_nr INTEGER(11) ,
     pokemon VARCHAR(100),
     type1   VARCHAR (100),
     type2   VARCHAR (100),
     total   INTEGER (11),
     hp      INTEGER (11),
     attack  INTEGER (11),
     defense    INTEGER (11),
     sp_attack  INTEGER (11),
     sp_defense INTEGER (11),
     speed      INTEGER (11),
     generation INTEGER (11),
     legendary VARCHAR  (100)




)";

$stmt = $pdo->query($sql);


//var_dump($pokemons[90]);


// $pokemons comes from the file pokemons.php where the pokemons from the csv file Pokemon2.csv are read

foreach ($pokemons AS $pokemon){

 $sql = "INSERT INTO pokedex (index_nr, pokemon, type1, type2, total, hp, attack, defense, sp_attack, sp_defense, speed, generation, legendary )
            VALUES ('$pokemon[index]',  
            '$pokemon[name]', 
            '$pokemon[type1]', 
            '$pokemon[type2]', 
            '$pokemon[total]', 
            '$pokemon[hp]',
            '$pokemon[attack]',
            '$pokemon[defense]',
            '$pokemon[spattack]',
            '$pokemon[spdefense]',
            '$pokemon[speed]',
            '$pokemon[generation]',
            '$pokemon[legendary]'
            )";


$stmt = $pdo->query($sql);

};

}

?>