<div class="box8">
    <h1>CONNEXION</h1>

    <?php

    if(isset($_POST['valider'])){
      $nom=htmlspecialchars($_POST['nom']);
      $prenom=htmlspecialchars($_POST['prenom']);

      
        // $dates = date('Y-m-d H:i:s');
        $query='INSERT INTO formulaire (nom,prenom) VALUES (:nom,:prenom)';
        // $query = 'INSERT INTO users (nom, age, dates) VALUES (:nom, :age, :dates)'; // users est le nom de la table, dates ne doit pas être nommé date, car date est un mot réservé
        $requete = $bdd->prepare($query);
        $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
        $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        // $requete->bindValue(':dates', $dates, PDO::PARAM_STR);
        $requete->execute();

        header('Location: ../menu_php/index.php?page=1');
    }


if(
   (isset($_POST['nom']) && $_POST['nom'] != null) &&
   (isset($_POST['prenom']) && $_POST['prenom']!=null) 
  //  (isset($_POST['genre']) && $_POST['genre']!=null)&&
  //  (isset($_POST['genre'])&&$_POST['genre']!=null)&&
  //  (isset($_POST['phone'])&&$_POST['phone']!=null)&&
  //  (isset($_POST['e-mail'])&&$_POST['e-mail']!=null)&&
  //  (isset($_POST['rue'])&&$_POST['rue']!=null)&&
  //  (isset($_POST['pays'])&&$_POST['pays']!=null)
 ){
   

    var_dump($_POST);
  
    


}else{

?>
    <div class="titre">
        <h2>FORMULAIRE</h2>
    </div>
    <div class="containeur">
        <form method="post" action="#">
            <label for="nom">nom :</label>
            <input type="text" name="nom" id="nom" />
            <br />
            </br>
            <label for="prenom">prenom :</label>
            <input type="text" name="prenom" id="prenom" />

            <!-- <br />
            </br>
            genre:
            <input type="radio" name="genre" value="feminin" id="feminin" />
            <label for="feminin">feminin</label>
            <input type="radio" name="genre" value="masculin" id="masculin" />
            <label for="masculin">masculin</label>
            <br />
            </br>
            <label>
                Veuillez saisir votre date de naissance :
                <input type="date" name="bday">
            </label>
            </br>
            </br>

            <label for="e-mail">e-mail :</label>
            <input type="e-mail" name="e-mail" id="e-mail" />
            </br>
            </br>
            <label for="phone">Enter votre numero:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" size="21">
            </br>
            </br>
            <label for="rue">rue :</label>
            <input type="number" name="rue" id="rue" />
            </br>
            </br>
            <label for="pays">Dans quel pays habitez-vous ?</label>
            <select name="pays" id="pays">
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="royaume-uni">Royaume-Uni</option> -->
            </br><input type="submit" name="valider" value="valider" />
        </form>

    </div>

    <?php


}

?>



    <?php







?>


</div>