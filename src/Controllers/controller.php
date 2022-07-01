<?php
//tous les traitments
require "Models/Client.php";
require "Models/model.php";

if(isset($_GET['id'])){
    $request = "SELECT * FROM client where $id=$_GET[id]";
} else {
    $request = "SELECT * from client";
}

$res = $bd->query($request);
$clientTable = [];
while($row = $res->fetch(PDO::FETCH_ASSOC)){
    $client = new Client($row['id'], $row['nom']);
}
require 'listClient';