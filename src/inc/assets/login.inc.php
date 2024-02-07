<?php
require("conn.inc.php");
require("session.inc.php");
function checkAccountExist($email)
{
    $conn = conn();
    $stmtEmail = $conn->prepare("SELECT user_email FROM users WHERE user_email = ?");
    $stmtEmail->bind_param("s", $email);
    $stmtEmail->execute();
    $stmtEmail->store_result();
    $num = $stmtEmail->num_rows();
    $stmtEmail->close();
    $conn->close();
    if ($num > 0) {
        echo "true";
        return true;
    } else {
        echo "false";
        return false;
    }
}
if (isset($_POST['email']) && !isset($_POST['check'])) checkAccountExist($_POST['email']);

function login($email, $password, $check = "false")
{
    $conn = conn();
    $hashPassword = hash("sha256", $password);
    $stmt = $conn->prepare("SELECT user_id, user_name, user_surname, user_nick, user_email, user_avatar, user_background  FROM users WHERE user_email = ? AND user_password = ? ");
    $stmt->bind_param("ss", $email, $hashPassword);

    $stmt->execute();

    $stmt;
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $num = $result->num_rows;

    $stmt->close();
    $conn->close();
    if ($check === "true" && $num > 0) {
        echo "true";
        return;
    }
    if ($num > 0) {
        echo "chuj";
        startSession($data[0]['user_id'], $data[0]['user_name'], $data[0]['user_surname'], $data[0]['user_nick'], $data[0]['user_email'], $data[0]['user_avatar'], $data[0]['user_background']);
        header("location: ../../index.php?{$data[0]['user_name']}");
    } else echo "false";
}
if (isset($_POST['passwordLogin'])) login($_POST['emailLogin'], $_POST['passwordLogin'], $_POST['check']);
