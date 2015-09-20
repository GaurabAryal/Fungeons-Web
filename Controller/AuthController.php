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

$_POST["function"]();

function login(){
    try {
        $user = ParseUser::logIn($_POST["id"], $_POST["pass"]);
        return true;
    } catch (ParseException $error) {return false;
        // The login failed. Check error to see why.
    }
}
function signup() {
    $username = $_POST["id"];
    $user = new ParseUser();
    $user->set("username", $username);
    $user->set("password", $_POST["pass"]);
    $user->set("email", $username."@example.com");
    try {
        $user->signUp();
        // Hooray! Let them use the app now.
    } catch (ParseException $ex) {
        // Show the error message somewhere and let the user try again.
        echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
    }
}
?>