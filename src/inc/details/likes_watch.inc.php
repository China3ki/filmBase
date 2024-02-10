 <?php

    class LikesAndWatch
    {
        public $conn;
        public $contentId;
        public $contentType;
        public $query;

        function __construct($conn, $contentId, $contentType)
        {
            $this->conn = $conn;
            $this->contentId = $contentId;
            $this->contentType = $contentType;
        }

        function ValidAddToList($operationType, $check)
        {
            if (!isset($_SESSION['id']))
                return false;
            switch ($operationType) {
                case "like":
                    $this->query = "SELECT id_like FROM show_like WHERE fk_like_film = ? AND fk_like_user = ?";
                    break;
                case "watch":
                    $this->query = "SELECT id_watch FROM show_watch WHERE fk_watch_film = ? AND fk_watch_user = ?";
                    break;
                default:
                    echo "Coś poszło nie tak. Spróbuj ponownie póżniej!";
                    return;
            };
            $stmtValidAddToList = $this->conn->prepare($this->query);
            $stmtValidAddToList->bind_param("ii", $this->contentId, $_SESSION['id']);
            $stmtValidAddToList->execute();

            $result = $stmtValidAddToList->get_result();
            $num = $result->num_rows;
            if ($num > 0 && $check === false) {
                return $this->removeFromlist($operationType);
            } else if ($num > 0 && $check === true) {
                return true;
            } else if ($num < 0 && $check === true) {
                return false;
            } else if ($num === 0 && $check === false) {
                return $this->addToList($operationType);
            }
        }

        public function addToList($operationType)
        {

            switch ($operationType) {
                case "like":
                    $this->query = "INSERT INTO show_like (fk_like_film, fk_like_user) VALUES (?,?)";
                    break;
                case "watch":
                    $this->query = "INSERT INTO show_watch (fk_watch_film, fk_watch_user) VALUES (?,?)";
                    break;
                default:
                    echo "Coś poszło nie tak. Spróbuj ponownie póżniej!";
                    return false;
            }

            $stmtAddToList = $this->conn->prepare($this->query);
            $stmtAddToList->bind_param("ii", $this->contentId, $_SESSION['id']);
            $stmtAddToList->execute();
            $stmtAddToList->close();
            if ($operationType === "like") echo "Dodano do ulubionych!";
            else echo "Dodano do obejrzenia!";
        }
        public function removeFromList($operationType)
        {

            switch ($operationType) {
                case "like":
                    $this->query = "DELETE FROM show_like WHERE fk_like_film = ? AND fk_like_user = ?";
                    break;
                case "watch":
                    $this->query = "DELETE FROM show_watch WHERE fk_watch_film = ? AND fk_watch_user = ?";
                    break;
                default:
                    echo "Coś poszło nie tak. Spróbuj ponownie póżniej!";
                    return;
            }
            $stmtRemoveFromList = $this->conn->prepare($this->query);
            $stmtRemoveFromList->bind_param("ii", $this->contentId, $_SESSION['id']);
            $stmtRemoveFromList->execute();
            $stmtRemoveFromList->close();
            if ($operationType === "like") echo "Usunięto z ulubionych";
            else echo "Usunięto z do obejrzenia";
        }
    }
