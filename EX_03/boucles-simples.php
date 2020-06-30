<?php
//Compteur//
function compter($maximum){
    
    while($compteur<=$maximum){
        echo "$compteur<br>";
        $compteur=$compteur + 1;
    }
}
//Rendu//
compter(10);

//Compter for//
function compter_for($maximum){
    
    for($compteur=1; $compteur<=$maximum; $compteur=$compteur + 1){
        echo "$compteur<br>";
    }
}
//Rendu//
compter_for(10);
?>
