<?php
require("conn.inc.php");

function searchEngine($data)
{
    $conn = conn();
    $param = "%{$data}%";

    $stmtFilms = $conn->prepare("SELECT film_name AS name, film_cover AS cover, COALESCE(CONCAT(a1.actor_name, ' ', a1.actor_surname), NULL) AS actor1,
    COALESCE(CONCAT(a2.actor_name, ' ', a2.actor_surname), NULL) AS actor2, 'Film' as type FROM films LEFT JOIN
    roles r1 ON films.film_id = r1.fk_role_film LEFT JOIN
    actors a1 ON r1.fk_role_actor = a1.actor_id LEFT JOIN
    roles r2 ON films.film_id = r2.fk_role_film AND r1.fk_role_actor != r2.fk_role_actor LEFT JOIN
    actors a2 ON r2.fk_role_actor = a2.actor_id LIKE 'film?' GROUP BY film_name 
    UNION ALL
    SELECT serial_name AS name, serial_cover AS cover, COALESCE(CONCAT(a1.actor_name, ' ', a1.actor_surname), NULL) AS actor1,
    COALESCE(CONCAT(a2.actor_name, ' ', a2.actor_surname), NULL) AS actor2, 'Serial' as type FROM serials LEFT JOIN
    roles r1 ON serials.serial_id = r1.fk_role_serial LEFT JOIN
    actors a1 ON r1.fk_role_actor = a1.actor_id LEFT JOIN
    roles r2 ON serials.serial_id = r2.fk_role_serial AND r1.fk_role_actor != r2.fk_role_actor LEFT JOIN
    actors a2 ON r2.fk_role_actor = a2.actor_id LIKE 'serial?' GROUP BY serial_name 
    UNION ALL
      SELECT CONCAT(actor_name, ' ', actor_surname), actor_image, NULL, NULL, 'Aktor' as type FROM actors LIKE 'actor?'
    UNION ALL
      SELECT character_name, character_image, NULL, NULL, 'Postać' as type FROM character_show LIKE 'character?'");

    $stmtFilms->bind_param("film?", $param);
    $stmtFilms->bind_param("serial?", $param);
    $stmtFilms->bind_param("actor?", $param);
    $stmtFilms->bind_param("character?", $param);
    $stmtFilms->execute();
    $dataFilms = $stmtFilms->get_result()->fetch_all(MYSQLI_ASSOC);
    var_dump($dataFilms);
}



searchEngine($_POST['data']);
