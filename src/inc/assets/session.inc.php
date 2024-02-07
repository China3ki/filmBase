<?php

function startSession($id, $name, $surname, $nickname, $email, $avatar, $background)
{
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
    $_SESSION['nickname'] = $nickname;
    $_SESSION['email'] = $email;
    $_SESSION['avatar'] = $avatar;
    $_SESSION['background'] = $background;
}

function continueSession()
{
    session_start();
}

function destroySession()
{
    session_start();
    session_unset();
    session_destroy();
    header("location: ../../index.php");
}
if (isset($_GET['logout'])) destroySession();
