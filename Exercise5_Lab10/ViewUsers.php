
<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "azdeenjeljalane", "Xu9naiha", "azdeenjeljalane");
    if ($mysqli->connect_error){
        printf("Connection failed %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT user_id from Users";
    $result = $mysqli->query($query);

    echo "<table style='border: 1px solid black, width: 100%'>";
    echo "<tr>";
    echo "<td style='border: 1px solid black'>" . "USERS:" . "</td>";
    echo "</tr>";
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td style='border: 1px solid black'>" . $row["user_id"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    $mysqli->close();
?>