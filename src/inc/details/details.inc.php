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
                    $this->query = "SELECT film_id, film_name, film_desc, film_cover, film_length,film_cover_widther, COALESCE((SELECT ROUND(AVG(rate),2) FROM show_rate WHERE fk_rate_film = film_id), 'Brak ocen') AS rate, COALESCE((SELECT ROUND(COUNT(rate),2) FROM show_rate WHERE fk_rate_film = film_id), 'Brak') AS count FROM films WHERE film_id = ?";
                    break;
                case 'images':
                    $this->query = "SELECT image_path FROM images_show INNER JOIN films ON fk_image_film = film_id WHERE fk_image_film = ?";
                    break;
                case "critics":
                    $this->query = "SELECT user_name, user_surname, user_avatar, film_name AS name, film_cover AS cover, rate_comment, rate, 'Filmy' AS type FROM show_rate INNER JOIN films ON fk_rate_film=film_id INNER JOIN users ON fk_rate_user=user_id WHERE fk_user_type = 3 AND film_id = ?";
                    break;
                case "trailer":
                    $this->query = "SELECT film_trailer FROM films WHERE film_id = ? ";
                    break;
                case "cast":
                    $this->query = "SELECT actor_name, actor_surname, actor_image, character_name FROM roles INNER JOIN actors ON fk_role_actor = actor_id INNER JOIN character_show ON fk_role_character = character_id WHERE fk_role_film = ? LIMIT 6";
                    break;
                case "characters":
                    $this->query = "SELECT character_name, character_image FROM roles INNER JOIN actors ON fk_role_actor = actor_id INNER JOIN character_show ON fk_role_character = character_id WHERE fk_role_film = ? LIMIT 6";
                    break;
                case "critics":
                    $this->query = "SELECT user_name, user_surname, user_avatar, film_name, rate_comment, rate FROM show_rate INNER JOIN films ON fk_rate_film=film_id INNER JOIN users ON fk_rate_user=user_id WHERE fk_user_type = 3 AND fk_rate_film = ?";
                    break;
                case "users":
                    $this->query = "SELECT user_nick, rate, rate_comment, user_avatar FROM show_rate INNER JOIN films ON fk_rate_film = film_id INNER JOIN users ON fk_rate_user = user_id WHERE fk_user_type = 1 AND fk_rate_film = ?";
                    break;
                case "genres":
                    $this->query = "SELECT genre_name FROM genres_show INNER JOIN genres ON fk_genre_genre = genre_id WHERE fk_genre_film = ?";
                    break;
                case "productionCountry":
                    $this->query = "SELECT country_name FROM production INNER JOIN countries ON fk_production_country = country_id WHERE fk_production_film = ?";
                    break;
                case "premier":
                    $this->query = "SELECT date_premier, country_name FROM premiers INNER JOIN countries ON fk_premier_country = country_id WHERE fk_premier_film = ?";
                    break;
                case "studio":
                    $this->query = "SELECT studio_name FROM studio_show INNER JOIN studio ON fk_studio_studio = studio_id WHERE fk_studio_film = ?";
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
