<?php
function clock(){
    for ($heures = 0; $heures < 24; $heures++){
        for ($minutes = 0; $minutes < 60; $minutes = $minutes + 1){
            echo (($heures > 9) ? ("$heures") : ("0$heures")) . " : " . (($minutes > 9) ? ("$minutes") : ("0$minutes"));
            echo '<br>';
        }
        echo '<br>';
    }
}
clock();
?>