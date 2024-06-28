<?php

    echo "Welcome to Game of World!!!<br>";
    $cookie_name = "category";
    $cookie_value = "Gaming Laptop";
    setCookie($cookie_name,$cookie_value,time() + 3600, "/");
    echo "Cookie is set!";

?>