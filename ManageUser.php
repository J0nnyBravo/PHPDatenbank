<?php
    require_once './DbConnection.php';

    class ManageUser
    {
        public function displayAllUsers()
        {
            $db = new DbConnection();
            $conn = $db->connectToDB();

            $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
            //Der Fehler ist kein Fehler ist von der IDE wenn PHP storm verwendet wird

            $stmt->execute();

            echo "<table border='2'>";
            while ($row = $stmt->fetch()) {
                echo $row['id'], ' - ' ,$row['firstname'], ' - ', $row['lastname'], '</br>';

                echo "<tr>
                        <td>$row[id]</td><td>$row[firstname]</td><td>$row[lastname]</td>
                      </tr>";

            }
            echo "</table>";
        }

    }