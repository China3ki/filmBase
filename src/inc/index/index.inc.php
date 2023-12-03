<?php

class requestData
{
    public $conn;
    public $search;
    public $query;

    public function __constructor($search)
    {
        $this->conn = new mysqli("localhost", "root", "", "filmbase");
        $this->search = $search;
        $this->prepareQuery();
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
        }
        $this->excecuteQuery();
    }
    public function excecuteQuery()
    {
        $result = $this->conn->query($this->query);
        $dataToSend = array();
        foreach ($result->fetch_all() as $row) {
            array_push($dataToSend, $row);
        }
        echo json_encode($dataToSend);
    }
}

$requestDataInstance = new requestData();
$requestDataInstance->__constructor($_POST["data"]);
