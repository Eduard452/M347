<html>
<head></head>
<body>
Diese Seite macht eine Abfrage auf die Datenbank. <br />
Das ausgeführte Query ist: <i>select Host, User from mysql.user;</i><br /><br />
Das Resultat: <br />
<?php
        //database
        $servername = getenv('DB_HOST');
        $username   = getenv('DB_USER');
        $password   = getenv('DB_PASS');
        $dbname     = getenv('DB_NAME');

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select Host, User from mysql.user;";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
                echo("<li>" . $row["Host"] . " / " . $row["User"] . "</li>");
        }
        //var_dump($result);
?>
</body>
</html>