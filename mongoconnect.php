<?php
/**
 * Created by PhpStorm.
 * User: Maqurez
 * Date: 12/7/2014
 * Time: 12:12 PM
 */

$m = new MongoClient("");
$db = $m->selectDB("agreeme");
//$users = $db->users;
$agreements = $db->agreements;