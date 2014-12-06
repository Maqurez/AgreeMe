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
    <link rel="stylesheet" href="css/general.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="app container">
    <div class="header container">
        <div class="logo-agreeme">

        </div>
        <div class="logo-for">

        </div>
    </div>
    <div class="main container">
        <ul class="rules">
            <li class="rule allow">
                <img class="rule-image" src="images/allow.png">
                <span class="rule-text">write comments</span>
                <ul class="rules nested">
                    <li class="rule alert">
                        <img class="rule-image" src="images/alert.png">
                        <span class="rule-text">insult others</span>
                        <ul class="rules nested">
                            <li class="add"><img class="add-img" src="images/more.png"></li>
                            <li class="field">
                                <div class="select-type">
                                    <img class="rule-type allow selected" src="images/allow.png" />
                                    <img class="rule-type deny" src="images/deny.png" />
                                    <img class="rule-type info" src="images/info.png" />
                                    <img class="rule-type alert" src="images/alert.png" />
                                </div>
                                <input class="field-input" type="text"/>
                                <button class="button-add">Add</button>
                            </li>
                        </ul>
                    </li>
                    <li class="add"><img class="add-img" src="images/more.png"></li>
                    <li class="field">
                        <div class="select-type">
                            <img class="rule-type allow selected" src="images/allow.png" />
                            <img class="rule-type deny" src="images/deny.png" />
                            <img class="rule-type info" src="images/info.png" />
                            <img class="rule-type alert" src="images/alert.png" />
                        </div>
                        <input class="field-input" type="text"/>
                        <button class="button-add">Add</button>
                    </li>
                </ul>
            </li>
            <li class="add"><img class="add-img" src="images/more.png"></li>
            <li class="field">
                <div class="select-type">
                    <img class="rule-type allow selected" src="images/allow.png" />
                    <img class="rule-type deny" src="images/deny.png" />
                    <img class="rule-type info" src="images/info.png" />
                    <img class="rule-type alert" src="images/alert.png" />
                </div>
                <input class="field-input" type="text"/>
                <button class="button-add">Add</button>
            </li>
        </ul>
    </div>
</div>
</body>
</html>

