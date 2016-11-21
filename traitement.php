<?php
/**
 * Created by PhpStorm.
 * User: zacje
 * Date: 15/11/2016
 * Time: 10:50
 */
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=event;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}