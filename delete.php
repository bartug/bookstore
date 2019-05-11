<?php 

if ($_GET) 
{

include("database.php");

if ($baglanti->query("DELETE FROM bookstore WHERE id =".(int)$_GET['id'])) 
{
    header("location:books.php"); 
}
}

?>