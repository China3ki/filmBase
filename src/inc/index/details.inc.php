<?php

require("inc/templates/details.tpl.php");
require("inc/assets/conn.inc.php");

class Details
{
    public $conn;
    public $query;
    public $name;
    public $type;

    function __construct()
    {
        $this->name = $_GET['name'];
        $this->type = $_GET['type'];
        $this->conn = conn();
    }
    function filmQuery($content)
    {
        if ($this->type = "film") {
            switch ($content) {
                case "main":
                    $this->query = "SELECT film_id, film_name, film_desc, film_cover, film_length,film_cover_widther, COALESCE((SELECT ROUND(AVG(rate),2) FROM rate_show WHERE fk_rate_film = film_id), 'Brak ocen') AS rate, COALESCE((SELECT ROUND(COUNT(rate),2) FROM rate_show WHERE fk_rate_film = film_id), 'Brak') AS count FROM films WHERE film_id = ?";
                    break;
                case 'images':
                    $this->query = "SELECT image_path FROM images_show INNER JOIN films ON fk_image_film = film_id WHERE fk_image_film = ?";
                    break;
                case "critics":
                    $this->query = "SELECT user_name, user_surname, user_avatar, film_name AS name, film_cover AS cover, rate_comment, rate, 'Filmy' AS type FROM rate_show INNER JOIN films ON fk_rate_film=film_id INNER JOIN users ON fk_rate_user=user_id WHERE fk_user_type = 3 AND film_id = ?";
                    break;
                case "cast":
                    $this->query = "SELECT actor_name, actor_surname, character_name FROM roles INNER JOIN actors ON fk_role_actor = actor_id INNER JOIN character_show ON fk_role_character = character_id INNER JOIN films ON fk_role_film = film_id WHERE film_id = ?";
                    break;
            };
        }
        return $this->prepareQuery($content);
    }
    public function prepareQuery($content)
    {
        $stmtQuery = $this->conn->prepare($this->query);
        $stmtQuery->bind_param("s", $this->name);
        $stmtQuery->execute();
        return displayDetails($stmtQuery->get_result()->fetch_all(MYSQLI_ASSOC), $content);
    }
}
$detailsInstance = new Details();
