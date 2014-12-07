<?php
/**
 * Created by PhpStorm.
 * User: Maqurez
 * Date: 12/6/2014
 * Time: 10:44 AM
 */

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="js/jquery-ui.min.css">
    <link rel="stylesheet" href="css/general.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="app container">
    <div class="header container">
        <div class="logo agreeme">
            AgreeMe!
        </div>
        <div class="logo for">
            Your company
        </div>
    </div>
    <div class="main container">
        <ul class="rules">
            <li class="add"><img class="add-img" src="images/more.png"></li>
            <li class="field hidden">
                <div class="select-type">
                    <img class="rule-type allow selected" src="images/allow.png" />
                    <img class="rule-type deny" src="images/deny.png" />
                    <img class="rule-type info" src="images/info.png" />
                    <img class="rule-type alert" src="images/alert.png" />
                </div>
                <input class="field-input" type="text"/>
                <button class="button button-add">Add</button>
            </li>
        </ul>
    </div>
    <div class="buttons container">
        <button class="button button-getlist" type="button" onclick="getInfo()">get Info!</button>
        <button class="button button-save" type="button">Save</button>
        <button class="button button-load" type="button">Load</button>
    </div>
    <div id="out"></div>
</div>
</body>
</html>

