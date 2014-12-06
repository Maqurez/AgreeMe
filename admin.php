<?php
/**
 * Created by PhpStorm.
 * User: Maqurez
 * Date: 12/6/2014
 * Time: 10:45 AM
 */

include 'includes/header.php';

if (!empty($_POST)) {
    $params = $_POST;
    echo $params['rules'][0]['type'].'<br>';
    echo $params['rules'][0]['value'].'<br>';
    echo $params['rules'][1]['type'].'<br>';
    echo $params['rules'][1]['value'];
}

?>

<form class="form" name="agreement-form" method="post" action="admin.php">
    <label for="company-name">Company name:</label>
    <input id="company-name" type="text" name="company-name"/><br>

    <label for="target-type">Target:</label>
    <select id="target-type" name="target-type">
        <option> User </option>
        <option> Non-profit organization </option>
        <option> Commercial organization </option>
    </select>

    <ul>
        <li></li>
    </ul>

    <fieldset>
        <select class="rule-type" name="rules[][type]">
            <option value="allow">Allow</option>
            <option value="deny">Deny</option>
            <option value="info">Info</option>
            <option value="alert">Alert</option>
        </select>
        <input type="text" name="rules[][value]">
    </fieldset>
    <fieldset>
        <select class="rule-type" name="rules[][type]">
            <option value="allow">Allow</option>
            <option value="deny">Deny</option>
            <option value="info">Info</option>
            <option value="alert">Alert</option>
        </select>
        <input type="text" name="rules[][value]">
    </fieldset>
    <button class="button-add" type="button">Add rule</button>
    <button type="submit" value="Submit">Submit</button>
</form>