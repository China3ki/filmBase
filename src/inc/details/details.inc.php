<?php

if (!isset($_POST['type'])) {
    require("inc/templates/details.tpl.php");
    require("inc/assets/conn.inc.php");
    require("inc/details/likes_watch.inc.php");
    require("inc/details/details_queries.inc.php");
} else {
    require("likes_watch.inc.php");
    require("details_queries.inc.php");
    require("../assets/conn.inc.php");
    require("../assets/session.inc.php");
}

class Details
{
    public $conn;
    public $query;
    public $contentId;
    public $contentType;
    public $likesAndWatch;
    public $detailsQueries;

    public function __construct()
    {
        $this->conn = conn();
        $this->contentId = $_GET['name'];
        $this->contentType = $_GET['type'];
        $this->likesAndWatch = new LikesAndWatch($this->conn, $this->contentId, $this->contentType);
        $this->detailsQueries = new DetailsQueries($this->conn, $this->contentId);
    }

    public function renderFilms($content)
    {
        displayDetails($this->detailsQueries->filmQuery($content), $this->likesAndWatch->ValidAddToList("like", true), $this->likesAndWatch->ValidAddToList("watch", true), $content);
    }
    public function commitLikesAndWatch($type)
    {
        continueSession();
        $this->likesAndWatch->ValidAddToList($type, false);
    }
    public function __destruct()
    {
        $this->conn->close();
    }
}
$detailsInstance = new Details();
if (isset($_POST['type'])) $detailsInstance->commitLikesAndWatch($_POST['type']);
