<xmp>
<h2>Exo2.1</h2>
<table border="1px">
    <tr>
<?php
$Tableau = array(1,5,6,3,2);

for($i=0; $i < 5; $i++){
 ?> <td>   <?php echo "".$Tableau[$i] ; ?></td>
    <?php
}
?>
    </tr>
</table>

<h2>Exo2.2</h2>
<table border="1px">
    <tr>

<?php
$Tableau = array("Nombre1" => 12,"Nombre2" => 65);
echo "valeur1=".$Tableau["Nombre1"];
echo "valeur2=".$Tableau["Nombre2"];

foreach ($Tableau as $indice => $value){
    echo "key".$indice."value : ".$value."....";
}
</xmp>

