<?php

//connection to the database "pokedex"

try {                                                              
$pdo = new PDO("mysql:host=localhost;dbname=pokedex","root","",[  
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION    
]);
}
catch(PDOException $php_errormsg) {                               
    echo "Probleme mit der Datenbank<br>";
    echo $php_errormsg;                                             
    die();                                                        
}