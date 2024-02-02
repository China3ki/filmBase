<?php
require("conn.inc.php");

function validData(array $data)
{

    $checkAllValid = 0;
    $validArray = array(validBasicData($data), validPasswords($data['password'], $data['passwordR']), validEmail($data['email']), emailExist($data['email']));
    foreach ($validArray as $element) {
        if ($element === true) $checkAllValid++;
        else header("location: ../../index.php");
    }

    if ($checkAllValid === count($validArray)) registerUser($data);
    else header("location: ../../index.php?dzialaa");
}

function validBasicData(array $infos)
{
    $notEmpty = 0;
    foreach ($infos as $info) {
        if (trim($info) !== '') $notEmpty++;
    }
    if ($notEmpty === count($infos)) return true;
    else return false;
}


function validPasswords($password, $passwordR)
{

    $passwordReg =  "/[-._!\"`'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|]+/";
    $passwordBigLetters = "/[A-Z]/";
    $conditionCheck = 0;
    if ($password === $passwordR) $conditionCheck++;
    if (strlen($password) >= 8) $conditionCheck++;
    if (preg_match($passwordReg, $password) || preg_match($passwordBigLetters, $password)) $conditionCheck++;



    if ($conditionCheck === 3) return true;
    else return false;
}

function emailExist($email)
{
    $conn = conn();
    $stmtEmail = $conn->prepare("SELECT user_email FROM users WHERE user_email = ?");
    $stmtEmail->bind_param("s", $email);
    $stmtEmail->execute();
    $stmtEmail->store_result();
    $numRows = $stmtEmail->num_rows();
    $stmtEmail->close();
    if ($numRows > 0) {
        echo "false";
        return false;
    } else {
        echo "true";
        return true;
    };
}


function validEmail($email)
{
    $emailReg = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    if (preg_match($emailReg, $email)) return true;
    else return false;
}

function registerUser($data)
{

    $conn = conn();
    $nickname = htmlspecialchars($data['nickname']);
    $name = htmlspecialchars($data['name']);
    $surname = htmlspecialchars($data['surname']);
    $email = $data['email'];
    $password = hash("sha256", $data['password']);

    $stmtRegister = $conn->prepare("INSERT INTO users (user_name, user_surname, user_nick, user_email, fk_user_type ,user_password) VALUES (?,?,?,?,1,?)");
    $stmtRegister->bind_param('sssss', $name, $surname, $nickname, $email,  $password);
    $stmtRegister->execute();
    $stmtRegister->close();
    header("location: ../../index.php?dziala");
    $conn->close();
}


if (isset($_POST['checkEmail'])) emailExist($_POST['checkEmail']);

if (isset($_POST['password'])) validData(["nickname" => $_POST['nickname'], "name" => $_POST['name'], "surname" => $_POST['surname'], "email" => $_POST['email'], "password" => $_POST['password'], "passwordR" => $_POST['passwordr']]);
