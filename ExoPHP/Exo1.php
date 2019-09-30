<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="style.css" rel="stylesheet">
    <title>Exercices php</title>
</head>

<body>
    <?php 
        $NombreAleatoire = rand(0,100);

        if($NombreAleatoire%2 == 1)
        {
            ?> <div class="rouge"> <?php echo "paire"; ?> </div> <?php
        }else {
            
            ?> <div class="bleu"> <?php echo "impaire"; ?> </div> <?php
        }
    
    
    ?>
</body>

</html>