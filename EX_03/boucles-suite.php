<?php
//Compteur dizaine, centaine//
function compter_dizaine($maximum)
{
    while ($compteur<=$maximum){
        echo (($compteur=$compteur+1) ? ("<p>Compteur : $compteur</p>") : null); 

        echo ((!($compteur%100)) ? ('Ceci est une centaine') : null). "" . ((!($compteur%10)) ? ('Ceci est une dizaine') : null);
    }
    return;
}
//Rendu//
compter_dizaine(100);
?>
