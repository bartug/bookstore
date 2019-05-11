<?php

@$baglanti = new mysqli('localhost', 'root', 'Sanane177159', 'bookstore'); 
    if(mysqli_connect_error()) 
    {
        echo mysqli_connect_error();
        exit; 
    }

$baglanti->set_charset("utf8"); 

?>