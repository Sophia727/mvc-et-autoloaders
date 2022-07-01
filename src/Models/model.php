<?php
//tout ce qui sert a relier
try{
    $bd = new PDO("mysql:host=localhost;dbname=vente", "root", "" );
    echo "connexion success";

} catch (PDOException $e){
echo $e->getMessage();
}
?>