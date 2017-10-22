<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bd_ber;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
