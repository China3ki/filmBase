<?php

require("inc/templates/index.tpl.php");
require("inc/assets/conn.inc.php");

class Main
{
    public $conn;
    public $query;

    public function __construct()
    {
        $this->conn = conn();
    }
    public function excecuteQuery($type)
    {
        switch ($type) {
            case "articlesMain":
                $this->query = "SELECT article_title, article_Image FROM articles ORDER BY article_id DESC limit 7 ";
                break;
            case "news":
                $this->query = "SELECT article_title, article_Image FROM articles ORDER BY article_id DESC LIMIT 9 OFFSET 7";
                break;
            case "films":
                $this->query = "SELECT film_id, film_name, film_cover, COALESCE((SELECT ROUND(AVG(rate),2) FROM show_rate WHERE fk_rate_film = film_id), 'Brak ocen') AS rate, COALESCE((SELECT ROUND(COUNT(rate),2) FROM show_rate WHERE fk_rate_film = film_id), 'Brak') AS count FROM films";
                break;
            case "serials":
                $this->query = "SELECT serial_id, serial_name, serial_cover, COALESCE((SELECT ROUND(AVG(rate),2) FROM show_rate WHERE fk_rate_serial = serial_id), 'Brak ocen') AS rate, COALESCE((SELECT ROUND(COUNT(rate),2) FROM show_rate WHERE fk_rate_serial = serial_id), 'Brak') AS count FROM serials";
                break;
            case "criticsRate":
                $this->query = "SELECT user_name, user_surname, user_avatar, film_name AS name, film_cover AS cover, rate_comment, rate, 'Filmy' AS type FROM show_rate INNER JOIN films ON fk_rate_film=film_id INNER JOIN users ON fk_rate_user=user_id WHERE fk_user_type = 3 
                UNION
                SELECT user_name, user_surname, user_avatar, serial_name AS name, serial_cover AS cover, rate_comment, rate, 'Serial' AS type FROM show_rate INNER JOIN  serials ON fk_rate_serial=serial_id INNER JOIN users ON fk_rate_user=user_id WHERE fk_user_type = 3";
                break;
        }

        return display($this->conn->query($this->query)->fetch_all(MYSQLI_ASSOC), $type);
    }
}
$mainInstance = new Main();
