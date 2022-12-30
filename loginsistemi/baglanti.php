<?php

try {
    $db= new PDO("mysql:host=localhost;dbname=loginsistemi", 'root','');
} catch (Exception $e) {
    $e->getMessage();
}






?>