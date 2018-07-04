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

                <?php
                $requete="SELECT * FROM JeuxLudothèque";

                $Serveur="localhost";
                $Utilisateur="root";
                $MotDePasse="1";

                $LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

                $retour=mysql_select_db("test",$LienBase);

                if(!$retour){
                    echo "impossible de connecter";}

                $Reponse = mysql_query($requete,$LienBase);


              ?>


			<table class="info"><caption>Horaires</caption><tr class="info"><th>Nom du jeux</th><th>Nombre dispositif</th></tr>
	<?php
        while($r=mysql_fetch_array($Reponse)){

                    echo '<tr>';
                    echo '<th>'.$r[0].'</th>';
                    echo '<th>'.$r[2].'</th>';

          }
        ?>
		</table>
		<br/>
            <h3>Réaliser votre réservation :</h3>
            <form class="center"  method="post" action="reserver.php">

            Date de réservation : <input name="date" placeholder="1970-01-01"/> <br /> <br />
            <select name="jeux">
                <?php
                 $requete="SELECT * FROM Jeux";
                 $Reponse = mysql_query($requete,$LienBase);

                 while($r=mysql_fetch_array($Reponse)){
                    echo "<option value='".$r[0]."'>".$r[0]."</option>";
                 }
                ?>
                </select>
                <br/><br/>

		Votre nom : <input name="nom"><br/><br/>
        Votre adress-mail : <input name="mail">
                <br/><br/>
		<input type="submit" value="Réserver" name = "valider" />
		</form>


            <h3>Chercher votre réservation :</h3>
        <form class="center"  method="post" action="horcher.php">


		Votre nom : <input name="nomc"><br/><br/>
        Votre adress-mail : <input name="mailc">
                <br/><br/>
		<input type="submit" value="Chercher" name = "valider" />
		</form>


		</div>
		</div>
		</div>
       <br/>  <br/>
   </body>

</html>
