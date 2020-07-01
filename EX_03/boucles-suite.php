<?php
//Compteur dizaine, centaine//
function compter_dizaine($maximum)
{
    while ($compteur<=$maximum){
        $compteur = $compteur + 1;

        echo "<p>Compteur : $compteur</p>";

    if (!($compteur%100))
    {
        echo 'Ceci est une centaine';
    }
    elseif (!($compteur%10))
    {
        echo 'Ceci est une dizaine';
    }
    }
    return;
}
//Rendu//
compter_dizaine(100);
?>
