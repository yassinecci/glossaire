<?php
try
{
    $bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=mabase;charset=utf8','root','');
    $bdd-> setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd-> setATTRIBUTE(PDO::ERRMODE_SILENT, PDO::ERRMODE_WARNING);
    $bdd-> setATTRIBUTE(PDO::ATTR_EMULATE_PREPARES,false);
}
catch(PDOEexception $e)
{
    echo'echec de la connexion :'.$e->getMessage();
    exit;
}
?>