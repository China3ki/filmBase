<?php

require("inc/templates/index.tpl.php");
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
    }
    function detailsQuery($content)
    {
        switch ($content) {
            case "main":
                $this->query = "SELECT film_id, film_name, film_desc, film_cover, film_length,film_cover_widther, COALESCE((SELECT ROUND(AVG(rate),2) FROM rate_show WHERE fk_rate_film = film_id), 'Brak ocen') AS rate, COALESCE((SELECT ROUND(COUNT(rate),2) FROM rate_show WHERE fk_rate_film = film_id), 'Brak') AS count FROM films WHERE film_id = {$this->type}";
        }
    }
}
