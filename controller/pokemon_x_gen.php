<?php

include "./../inc/functions/connection.php";




//here the variable "genx" from the "index"-file is read
if (isset($_GET['genx'])) {
    $genx = $_GET['genx'];
}

// the following lines (15 -- 136) are dealing with the sort- values 
// which this file receives from "pokemon_gen_view.php" will be opened 
if (isset($_GET['sortnr'])) {

    $sortnr = $_GET['sortnr'];
    if ($sortnr > 20) {
        $genx = $sortnr - 20;
        $sortnr  = 2;
    }
    if ($sortnr > 10 && $sortnr < 20) {
        $genx = $sortnr - 10;
        $sortnr  = 1;
    }
    if ($sortnr == 1) {
        $order = " ORDER BY index_nr DESC";
        $sortnr = 2;
    } else {
        $order = " ORDER BY index_nr ASC";
        $sortnr = 1;
    }
} else {
    $sortnr = 1;
    $order = " ORDER BY index_nr ASC";
}


if (isset($_GET['sortname'])) {
    $sortname = $_GET['sortname'];

    if ($sortname > 20) {
        $genx = $sortname - 20;
        $sortname  = 2;
    }

    if ($sortname > 10 && $sortname < 20) {
        $genx = $sortname - 10;
        $sortname  = 1;
    }

    if ($sortname == 1) {
        $order = " ORDER BY pokemon ASC";
        $sortname = 2;
    } else {
        $order = " ORDER BY pokemon DESC";
        $sortname = 1;
    }
} else {
    $sortname = 1;
}


if (isset($_GET['sorttype1'])) {
    $sorttype1 = $_GET['sorttype1'];

    if ($sorttype1 > 20) {
        $genx = $sorttype1 - 20;
        $sorttype1  = 2;
    }

    if ($sorttype1 > 10 && $sorttype1 < 20) {
        $genx = $sorttype1 - 10;
        $sorttype1  = 1;
    }

    if ($sorttype1 == 1) {
        $order = " ORDER BY type1 ASC";
        $sorttype1 = 2;
    } else {
        $order = " ORDER BY type1 DESC";
        $sorttype1 = 1;
    }
} else {
    $sorttype1 = 1;
}


if (isset($_GET['sorttype2'])) {
    $sorttype2 = $_GET['sorttype2'];

    if ($sorttype2 > 20) {
        $genx = $sorttype2 - 20;
        $sorttype2  = 2;
    }

    if ($sorttype2 > 10 && $sorttype2 < 20) {
        $genx = $sorttype2 - 10;
        $sorttype2  = 1;
    }

    if ($sorttype2 == 1) {
        $order = " ORDER BY type2 ASC";
        $sorttype2 = 2;
    } else {
        $order = " ORDER BY type2 DESC";
        $sorttype2 = 1;
    }
} else {
    $sorttype2 = 1;
}


if (isset($_GET['sorttotal'])) {
    $sorttotal = $_GET['sorttotal'];

    if ($sorttotal > 20) {
        $genx = $sorttotal - 20;
        $sorttotal  = 2;
    }

    if ($sorttotal > 10 && $sorttotal < 20) {
        $genx = $sorttotal - 10;
        $sorttotal  = 1;
    }

    if ($sorttotal == 1) {
        $order = " ORDER BY total ASC";
        $sorttotal = 2;
    } else {
        $order = " ORDER BY total DESC";
        $sorttotal = 1;
    }
} else {
    $sorttotal = 1;
}


// the "genx" value which is read at the start of this page
// also the order value which is determined in the previos lines
// are put in the following sql query
$table = "pokedex";
$sql = "SELECT * FROM $table WHERE generation = $genx" . "$order";
if ($stmt = $pdo->query($sql)) {
    $pokemonx = $stmt->fetchAll(PDO::FETCH_ASSOC);
};




include "./../views/pokemon_gen_view.php";
