<?php

function startSession($id, $name, $surname, $nickname, $email)
{
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
    $_SESSION['nickname'] = $nickname;
    $_SESSION['email'] = $email;
}

function continueSession()
{
    session_start();
}

function destroySession()
{
    session_destroy();
}
