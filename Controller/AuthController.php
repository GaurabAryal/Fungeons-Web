<?php
/**
 * Created by PhpStorm.
 * User: Gaurab
 * Date: 2015-09-03
 * Time: 3:03 PM
 */
require '../vendor/autoload.php';
use Parse\ParseObject;
use Parse\ParseClient;
use Parse\ParseUser;
ParseClient::initialize('hNMiiD81kjVZGl9Jns0KcsMN4BhkcHh0QX1PlqTp', 'FUOZOmhj3BT8dhScg6nNG9zxMt9CYN8hC7HysRNM', 'rNf8FChzcg4lOUFZVFROGA8a59NXWWQjmKT1ku9L');


try {
    $user = ParseUser::logIn($_POST["id"], $_POST["pass"]);
    return true;
} catch (ParseException $error) {return false;
    // The login failed. Check error to see why.
}
?>