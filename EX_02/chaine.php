<?php
$str1="“La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.”";

//Nombre de caractères//
function caractere($str1){
    $len=strlen($str1);
    echo '<p>La chaine str1 contient '.$len.' caractères</p>';
}
//Rendu//
caractere($str1);

//Nombre de mots//
function mots($str1){
    $len2=str_word_count($str1);
    echo '<p>La chaine str1 contient '.$len2.' mots</p>';
}
//Rendu//
mots($str1);

//Minuscule//
function minuscule($str1){
    $len3=strtolower($str1);
    echo '<p>'.$len3.'</p>';
}
//Rendu//
minuscule($str1);

//Majuscule//
function majuscule($str1){
    $len4=strtoupper($str1);
    echo '<p>'.$len4.'</p>';
}
//Rendu//
majuscule($str1);

//Mélangé//
function melange($str1){
    $len5=str_shuffle($str1);
    echo '<p>'.$len5.'</p>';
}
//Rendu//
melange($str1);

//la en LA//
function LA($str1){
    $len6=str_ireplace("La", "LA", $str1);
    echo '<p>'.$len6.'</p>';
}
//Rendu//
LA($str1);

//Supprimer//
function supprimer($str1){
    $len7=str_replace("est un avantage sérieux et utile.", "", $str1);
    echo '<p>'.$len7.'</p>';
}
//Rendu//
supprimer($str1);
?>