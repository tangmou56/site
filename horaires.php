<html>
   <head>
     <title>Ludothèque</title>
     <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
   </head>



   <body>
		<div class="title">
   		<br/>
		<h1 class="inlinenom">Ludothèque de l'université</h1>
        <h1 class="inlinetile">Horaires</h1>
		</div>
		<div class="lien">
   		<hr/>

				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="ludotheque.html">acceuil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="info.php">infomation</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="horaires.php">horaires</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="chercher.html">chercher</a></h2>
		<hr/>
		</div>

		<div class="picho">
		<div class="textimg">
		<img class="tex" src="horaires.jpg" height="250" width="400" />
		</div>
		<div class="textho">
		<div class="textposition">
    <table class="info"><caption>Horaires</caption><tr class="info"><th>Nombre</th><th>Name</th></tr>
                <?php
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

                  $sql = "SELECT * FROM person";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<tr>';
                      echo '<th>'.$row["id_person"].'</th>';
                      echo '<th>'.$row["name"].'</th>';

                    }
                  } else {
                    echo "0 results";
                  }

                  $conn->close();

              ?>
		</table>
		<br/>
            <h3>Réaliser votre réservation :</h3>
      <form class="center"  method="post" action="reserver.php">



		        Votre nom : <input name="nom"><br/><br/>
                <br/><br/>
		        <input type="submit" value="Réserver" name = "valider" />
		 </form>





		</div>
		</div>
		</div>
       <br/>  <br/>
   </body>

</html>
