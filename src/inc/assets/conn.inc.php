<?php

function conn()
{
    try {
        return new mysqli("localhost", "root", "", "filmbase");
    } catch (mysqli_sql_exception $error) {
        return $error->getMessage();
    }
}
