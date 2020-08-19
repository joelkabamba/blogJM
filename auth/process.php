<?php

session_start();

include_once "../class/database.php";
include_once "../class/Auth.php";

$auth = new Authentication;

function register()
{
    global $auth;
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $error = "";

        if ($username == "") {
            $error = "Username est vide <a href='register.php'>Go back</a>";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Email is not valid <a href='register.php'>Go back</a>";
        } else if (strlen($password) < 6) {
            $error = "Password est court <a href='register.php'>Go back</a>";
        } else {
            $password = password_hash($password, PASSWORD_BCRYPT);
            $data = [$name,$username, $password ,$email];
            if ($auth->register($data)) {
                header("Location: auth.php");
            } else {
                $error = "Il y a un probleme au niveau de l'enregistrement <a href='register.php'>Go back</a>";
            }
        }

        echo $error;
    }
}

register();


function login()
{
    global $auth;

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email !== "") {
            if ($auth->login([$email, $password])) {
                $result = $auth->login([$email, $password]);
                $_SESSION['blog_user'] = $result->username;
                $_SESSION['blog_id'] = $result->id;

                header("Location: ../admin");
            } else {
                echo "Un probleme est survenu <a href='login.php'> retour au login</a>";
            }
        } else {
            echo "Tous les champs sont requis <a href='login.php'>retour au login</a>";
        }
    }
}

login();

