<?php
session_start();
print_r($_SESSION);
echo"welcome "." ". $_SESSION['username'];
echo"<br> "."Your Password is". $_SESSION['password'];
?>