<?php
    $colors = array("red", 10,"orawnge",44.5);
    echo $colors[0]. "<br>";
    echo $colors[1]. "<br>";
    echo $colors[2]. "<br>";
    echo $colors[3]. "<br>";

    // assigning value
    $colors[0] = "blue";
    echo $colors[0]."<br><br>";

    echo "<ol>";
    for ($i=0; $i < 4; $i++) { 
        echo "<li>$colors[$i]</li>";
    }
    echo "</ol>";
?>