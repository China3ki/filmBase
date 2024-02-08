 <?php
    require("../assets/conn.inc.php");
    require("../assets/session.inc.php");
    function ValidAddToList($type)
    {
        continueSession();
        $conn = conn();
        $query = 0;

        switch ($type) {
            case "like":
                $query = "SELECT id_like FROM show_like WHERE fk_like_film = ? AND fk_like_user = ? ";
                break;
            default:
                echo "Coś poszło nie tak!";
                return;
        }

        $stmtValidAddToList = $conn->prepare($query);
        $stmtValidAddToList->bind_param("ii", $_POST['name'], $_SESSION['id']);
        $stmtValidAddToList->execute();

        $result = $stmtValidAddToList->get_result();
        $num = $result->num_rows;
        if ($num > 0) {
            return removeFromlist($type);
        } else {
            return addToList($type);
        }
    }
    function addToList($type) // Add like or want to watch from db
    {

        $conn = conn();
        $query = 0;
        switch ($type) {
            case "like":
                $query = "INSERT INTO show_like (fk_like_film, fk_like_user) VALUES (?,?)";
                break;
        }


        $stmtAddToList = $conn->prepare($query);
        $stmtAddToList->bind_param("ii", $_POST['name'], $_SESSION['id']);

        $stmtAddToList->execute();
        echo "Dodano do ulubionych!";
        return;
    }

    if (isset($_POST['type'])) ValidAddToList($_POST['type']);

    function removeFromlist($type) // Remove like or want to watch from db
    {
        $conn = conn();
        $query = 0;
        switch ($type) {
            case "like":
                $query = "DELETE FROM show_like WHERE fk_like_film = ? AND fk_like_user = ?";
                break;
        }
        $stmtAddToList = $conn->prepare($query);
        $stmtAddToList->bind_param("ii", $_POST['name'], $_SESSION['id']);
        $stmtAddToList->execute();
        echo "Usunięto z ulubionych";
        return;
    }
