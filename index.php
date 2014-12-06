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
                <img src="images/allow.png">write comments
                <ul class="rules nested">
                    <li class="rule alert">
                        <img src="images/alert.png">insult others
                        <ul class="rules nested">
                            <li class="add"><img src="images/more.png"></li>
                            <li class="field"><input class="field-input" type="text"/></li>
                        </ul>
                    </li>
                    <li class="add"><img src="images/more.png"></li>
                    <li class="field"><input class="field-input" type="text"/></li>
                </ul>
            </li>
            <li class="rule deny">
                <img src="images/deny.png">Something
                <ul class="rules nested">
                    <li class="rule alert">
                        <img src="images/alert.png">Other thing
                        <ul class="rules nested">
                            <li class="rule alert">
                                <img src="images/alert.png">Other other thing
                                <ul class="rules nested">
                                    <li class="add"><img src="images/more.png"></li>
                                    <li class="field"><input class="field-input" type="text"/></li>
                                </ul>
                            </li>
                            <li class="add"><img src="images/more.png"></li>
                            <li class="field"><input class="field-input" type="text"/></li>
                        </ul>
                    </li>
                    <li class="add"><img src="images/more.png"></li>
                    <li class="field"><input class="field-input" type="text"/></li>
                </ul>
            </li>
            <li class="rule info">
                <img src="images/info.png">Information
                <ul class="rules nested">
                    <li class="add"><img src="images/more.png"></li>
                    <li class="field"><input class="field-input" type="text"/></li>
                </ul>
            </li>
            <li class="add"><img src="images/more.png"></li>
            <li class="field"><input class="field-input" type="text"/></li>
        </ul>
    </div>
</div>
</body>
</html>

