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
            <img src="images/logo-large.png"/>
        </div>
        <div class="logo for">
        </div>
    </div>
    <div class="main container">
        <input type="text" class="title-input" placeholder="Title..."/>
        <ul class="rules">
            <li class="editor">
                <div class="button-more"><img src="images/more.png"/></div>
                <div class="editor-inner" style="display: none;">
                    <div class="select-type">
                        <img class="rule-type allow selected" src="images/allow.png" />
                        <img class="rule-type deny" src="images/deny.png" />
                        <img class="rule-type info" src="images/info.png" />
                        <img class="rule-type alert" src="images/alert.png" />
                    </div>
                    <input class="editor-input" type="text" maxlength="200"/>
                    <button class="button button-add">Add</button>
                </div>
            </li>
        </ul>
    </div>
    <div class="buttons container">
        <input id="list-id" type="text" placeholder="List id" />
        <button class="button button-load" type="button">Load</button>
        <button class="button button-save" type="button">Save</button>
        <button class="button button-view" type="button">Preview</button>
    </div>
    <form method="post" action="testconnection.php">
        <input id="request" name="request" type="text" hidden="hidden"/>
    </form>
</div>
</body>
</html>

