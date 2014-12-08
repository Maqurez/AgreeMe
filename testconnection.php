<?php
/**
 * Created by PhpStorm.
 * User: Maqurez
 * Date: 12/7/2014
 * Time: 8:08 PM
 */

$m = new MongoClient("");
$db = $m->selectDB("agreeme");
$agreements = $db->selectCollection("agreements");

if (!empty($_POST)) {
    $agreement = $_POST;
    $agreements->insert($agreement);
}
if (!empty($_GET)) {
    $agreement = $_GET['id'];
    $crit = array("_id" => new MongoId($agreement));
    echo json_encode($agreements->findOne($crit), JSON_UNESCAPED_UNICODE);
}

//echo $_POST['request'];

//echo $_POST['json'];



//$users = $db->users;

//$cursor =  $agreements->find();
//foreach ($cursor as $document) {
//    echo json_encode($document, JSON_UNESCAPED_UNICODE) . "\n";
//}
