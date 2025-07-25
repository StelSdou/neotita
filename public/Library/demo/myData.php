<?php
    function im($id){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "book";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $month = $_SESSION['month'];
        $sql = "SELECT image_path FROM $month WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($imagePath);
            $stmt->fetch();

            if (file_exists($imagePath)) {
                $imagePath = str_replace("D:/xampp/htdocs/Site_0/Books/MargeBook/", "", $imagePath);
                if ($id%2 != 0)
                    return '<img src="' . $imagePath . '"class="frontCont" alt="Η εικόνα σας">';
                else
                return '<img src="' . $imagePath . '"class="backCont" alt="Η εικόνα σας">';
            } else {
                echo "Η εικόνα δεν βρέθηκε.";
            }
        } else {
            echo "Η εικόνα δεν βρέθηκε.";
        }
        $stmt->close();
        $conn->close();
    }
?>
