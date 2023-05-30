
<?php

if(isset($index_start)){
    $pokemons = [];

    $file = fopen("inc/Pokemon2.csv", "r");
    $row = fgetcsv($file); //Wegen der Überschriftenzeile wird die erste Zeile nur gelesen aber nicht ins Array geschrieben.
    //print_r($file);
    while($row = fgetcsv($file)){
        $pokemons[] =[
            "index" => $row[0],
            "name"  => $row[1],
            "type1" => $row[2],
            "type2" => $row[3],
            "total" => $row[4],
            "hp"    => $row[5],
            "attack"=> $row[6],
            "defense"=>$row[7],
            "spattack"=>$row[8],
            "spdefense"=>$row[9],
            "speed"=> $row[10],
            "generation"=> $row[11],
            "legendary" => $row[12]
         ];
    
    }
    
    
    //print_r($pokemons);
   
    

}else{


$pokemons = [];

$file = fopen("./../inc/Pokemon2.csv", "r");
$row = fgetcsv($file); //Wegen der Überschriftenzeile wird die erste Zeile nur gelesen aber nicht ins Array geschrieben.
//print_r($file);
while($row = fgetcsv($file)){
    $pokemons[] =[
        "index" => $row[0],
        "name"  => $row[1],
        "type1" => $row[2],
        "type2" => $row[3],
        "total" => $row[4],
        "hp"    => $row[5],
        "attack"=> $row[6],
        "defense"=>$row[7],
        "spattack"=>$row[8],
        "spdefense"=>$row[9],
        "speed"=> $row[10],
        "generation"=> $row[11],
        "legendary" => $row[12]
     ];

}
}

//print_r($pokemons);
?>
