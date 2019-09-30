<h2>Teste Formulaire</h2>



<?php

//Teste de la variable Get le chiffre
if (isset($_POST['leChiffre']) && !empty($_POST['leChiffre'])){
    echo "Ma valeur est :" . $_POST['leChiffre'];
} else {
    echo "Formulaire non saisie";

    ?>
    <form method="post" action="index.php">

        <fieldset>
            <legend>Votre Chiffre</legend>
            <!-- Zone de texte -->

            <p><label>Chiffre :</label><input type="text" name="leChiffre" /></p>

            <!-- Valider-->
            <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
        <?php

        }

        ?>