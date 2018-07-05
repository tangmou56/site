<p><?php
    $nom=$_POST["nom"];

    $servername = "118.126.111.171";
    $port=3306;
    $username = "root";
    $password = "1";
    $dbname = "test";
    $socket="mysqli.default_socket";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname,$port,$socket);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO `person` VALUES(DEFAULT, '".$nom."');";
    $result = $conn->query($sql);




    ?></p>
<font size="50" color="red">It's done</font>
