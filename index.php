<?php
try
{
    $bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=entrainement;charset=utf8','root','');
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





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>

<body>
    <div class="containeur">
        <div class="box1"></div>
        <div class="box2">
            <img src="./img/images.jfif" alt="image" height="250px" width="380px" />
        </div>
        <div class="box3">
            <img src="img/initial.jfif" />
        </div>
        <div class="box4">
            <a href="index.php?page=1">accueil</a>
        </div>
        <div class="box5"></div>
        <div class="box6">
            <a href="index.php?page=2">a propos</a>
        </div>
        <div class="box7">
            <a href="index.php?page=3">connexion</a>
        </div>

        <?php
            if(isset($_GET['page'])){
                $page=$_GET['page'];
                if($page==1){
                    include('accueil.php');
                }
                elseif($page==2){
                    include('a_propos.php');
                }
                elseif($page==3){
                    include('connexion.php');
                }
            }
            else{
                include('accueil.php');
            }
        ?>

        <div class="box5"></div>
    </div>
</body>

</html>