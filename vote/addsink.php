<?php require("include/vote.php");

if(!empty($_POST)){
    $s = new vote();
    $valid = true;
    if(isset($_POST['Valider'])){
        
        $nom = $_POST['Nom'];
        $rarete = $_POST['Rarete'];
        $image = $_POST['Image'];

        if(empty($nom)){
            $valid = false;
            echo "Il y a pas de nom de skin.";
        }else{

            $verifnom = $db->prepare("SELECT `nom` FROM `skin` WHERE `nom` = :nom");
            $verifnom->execute(['nom' => $nom]);           
            $verifnom = $verifnom->fetch();
            
            if ($verifnom['nom'] <> ""){
                $valid = false;
                echo "Ce nom de skin est déjà enregistre";
            }

        }
        if(empty($rarete)){
            $valid = false;
            echo "il n'y a pas de rarete de skin.";
        }
        if(empty($image)){
            $valid = false;
            echo "il n'y a pas de lien image de skin.";
        }

        if($valid){

            $s->addskin($nom, $rarete, $image);

        }

    }
}

?>