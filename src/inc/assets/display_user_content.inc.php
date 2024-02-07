<?php
require("session.inc.php");
require("inc/templates/account_panel/_logged.tpl.php");
function getUserPanel()
{
    continueSession();
    $logged = isset($_SESSION['id']);
    if ($logged) {
        return displayUserPanel();
    } else {
        return require("inc/templates/account_panel/_unlogged.tpl.php");
    }
}
