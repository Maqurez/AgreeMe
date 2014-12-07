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

//echo $_POST['request'];
$agreement = $_POST;
//echo $_POST['json'];

$agreements->insert($agreement);

//$users = $db->users;

//$cursor =  $agreements->find();
//foreach ($cursor as $document) {
//    echo json_encode($document, JSON_UNESCAPED_UNICODE) . "\n";
//}
