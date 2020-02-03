<?php include("database.php");
class vote{
    
    private $_id;
    private $_nom;
    //private $_rarete;
    //private $_image;

    public function addskin($nom, $rarete, $image){
        
        global $db;

        $s = $db->prepare("INSERT INTO `skin`(`nom`, `rarete`, `image`) VALUES (:nom, :rarete, :imag)");
        $s->execute(['nom' => $nom,
                     'rarete' => $rarete,
                     'imag' => $image]);

    }

    public function vote($id_skin){

        global $db;

        $s = $db->prepare("INSERT INTO `vote`(`id_user`, `id_skin`) VALUES (:id_user, :id_skin)");
        $s->execute(['id_user' => $_SESSION['id'],
                     'id_skin' => $id_skin]);
                     

    }

}
?>
