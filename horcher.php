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
                $requete="SELECT * FROM Paniers";

                $Serveur="localhost:8889";
                $Utilisateur="webspi";
                $MotDePasse="123";

                $LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

                $retour=mysql_select_db("ludo",$LienBase);

                if(!$retour){
                    echo "impossible de connecter";}

                $Reponse = mysql_query($requete,$LienBase);


              ?>
	 
       
			<table class="info"><caption>Votre réservation</caption><tr class="info"><th>Nom du jeux</th><th>Creneau</th></tr>
	<?php
                $nom=$_POST["nomc"];
                $mail=$_POST["mailc"];
        while($r=mysql_fetch_array($Reponse)){
            
            if($nom==$r[1]&&$mail==$r[2]){
                    
                    echo '<tr>';
                    echo '<th>'.$r[0].'</th>';
                    echo '<th>'.$r[3].'</th></tr>';
            }
          }
        ?>
		</table>
		<br/>
            
            
            
		</div>
		</div>
		</div>
       <br/>  <br/>  
   </body>

</html>