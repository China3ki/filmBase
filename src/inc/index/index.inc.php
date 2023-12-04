<?php

class requestData
{
    public $conn;
    public $search;
    public $query;

    public function __constructor(string $search)
    {
        $this->conn = new mysqli("localhost", "root", "", "filmbase");
        if ($this->conn->connect_errno) {
            echo "ab";
        }

        $this->search = $search;

        return $this->prepareQuery();
    }
    public function prepareQuery()
    {
        switch ($this->search) {
            case "films":
                $this->query = "SELECT film_name, film_cover FROM films";
                break;
            case "serials":
                $this->query = "SELECT serial_name, serial_cover FROM serials";
                break;
            case "articles--main":
                $this->query = "SELECT article_title, article_Image FROM `articles`ORDER BY article_id DESC limit 7";
        }
        return $this->excecuteQuery();
    }
    public function excecuteQuery()
    {
        $result = $this->conn->query($this->query);
        $this->conn->close();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

$requestDataInstance = new requestData();
