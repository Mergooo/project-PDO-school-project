<?php
$title = "POKEDEX VIEW";
include "header.php";
?>


<!-- this file shows the an image (source https://pokewalls.wordpress.com/download-archive/) (the 1920x1080 versions of the generations 1-6)  of the pokemon as well as the pokedex nr, the name, the types 
and the total sum of the stats -->


<table>
    <tr>
    <th><a>Aussehen</a></th> 
    <th><a href="./../controller/pokemon_x_gen.php?sortnr=<?php if(!empty($sortnr)) {echo $sortnr.$genx; }; ?>">Index NUmmer</a></th>
    <th><a href="./../controller/pokemon_x_gen.php?sortname=<?php if(!empty($sortname)) {echo $sortname.$genx;}; ?>">Name</a></th>
    <th><a href="./../controller/pokemon_x_gen.php?sorttype1=<?php if(!empty($sorttype1)) {echo $sorttype1.$genx;}; ?>">Maintype</a></th>
    <th><a href="./../controller/pokemon_x_gen.php?sorttype2=<?php if(!empty($sorttype2)) {echo $sorttype2.$genx;}; ?>">Subtype</a></th>
    <th><a href="./../controller/pokemon_x_gen.php?sorttotal=<?php if(!empty($sorttotal)) {echo $sorttotal.$genx;}; ?>">Total Stats</a></th>
    </tr>
    <?php 
    // the array $pokemonx comes from "pokemon_x_gen.php"  contains the data of all pokemons of the chosed generation 
    foreach($pokemonx as $pokemon) {
    ?>
    <tr>
    <td><img class="logo" src="./../inc/pics/1920x1080/<?php echo $pokemon["index_nr"]; echo $pokemon['pokemon']; ?>1920x1080.jpg"  width="500" height="500"></td>
    <td><?php echo $pokemon['index_nr']; ?></td>
    <td><?php echo $pokemon['pokemon']; ?></td>
    <td><?php echo $pokemon['type1']; ?></td>
    <td><?php echo $pokemon['type2']; ?></td>
    <td><?php echo $pokemon['total']; ?></td>
    </tr>
    <?php } ?>
</table>

