<!DOCTYPE html >
<html>

    <head>
        <title>Inscription.php</title>
       <meta charset="utf-8" />
       
    </head>
   

    <body>

        
       <?php
      require('config.php');
   if (isset($_REQUEST['nom'], $_REQUEST['prenom'],$_REQUEST['sexe'],$_REQUEST['cin'],$_REQUEST['adresse'],$_REQUEST['ville'],$_REQUEST['n°téléphone'],$_REQUEST['e-mail'], $_REQUEST['password'],$_REQUEST['code pastal'],$_REQUEST['fax'])){
 // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom);
 // récupérer le prenom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
   $prenom = stripslashes($_REQUEST['prenom']);
   $prenom = mysqli_real_escape_string($conn, $prenom);
 // récupérer le sexe d'utilisateur et supprimer les antislashes ajoutés par le formulaire
   $sexe = stripslashes($_REQUEST['sexe']);
   $sexe = mysqli_real_escape_string($conn, $sexe);
 // récupérer le cin d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $cin= stripslashes($_REQUEST['cin']);
    $cin = mysqli_real_escape_string($conn, $cin);
// récupérer l'adresse d'utilisateur et supprimer les antislashes ajoutés par le formulaire
     $adresse = stripslashes($_REQUEST['adresse']);
     $adresse = mysqli_real_escape_string($conn, $adresse);
 // récupérer la ville d'utilisateur et supprimer les antislashes ajoutés par le formulaire
     $ville = stripslashes($_REQUEST['ville']);
     $ville = mysqli_real_escape_string($conn, $ville);
 // récupérer le n°téléphone d'utilisateur et supprimer les antislashes ajoutés par le formulaire
     $n°téléphone = stripslashes($_REQUEST['n°téléphone']);
     $n°téléphone = mysqli_real_escape_string($conn, $n°téléphone
 // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
     $email = stripslashes($_REQUEST['email']);
     $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
     $password = stripslashes($_REQUEST['password']);
     $password = mysqli_real_escape_string($conn, $password);
 // récupérer la codepastal d'utilisateur et supprimer les antislashes ajoutés par le formulaire
      $codepastal = stripslashes($_REQUEST['code pastal']);
      $codepastal= mysqli_real_escape_string($conn, $codepastal);
 //requéte SQL + mot de passe crypté
      $query = "INSERT into `utilisateur` (nom,prenom,sexe,cin,adresse,ville,n°téléphone, e-mail, mot de passe,code pastal,fax)
      VALUES ('$nom','$prenom','$sexe','$cin',$adresse','$ville','$n°téléphone','$e-mail','".hash('sha256', $password)."','$codepastal','$fax')";
       // Exécuter la requête sur la base de données
       $res = mysqli_query($conn, $query);
             if($res){
                         echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
            
       </div>";
                                                }
                                            }else{
                                            ?>
             <form class="box" action="" method="post">
                            
                    <h1 class="box-title">Inscription</h1>
		 <table>
		 <tr>
		<td><center><label for="nom"><br>Nom<abbr>*</abbr></label></center></td>
		<td><br><input type="text" required name="nom" id="nom" /></td>
		</tr>
		<br ><br>
		
		<tr>
		<td><center><label for="prenom"><br>Prenom<abbr>*</abbr></label></center></td>
		<td><br><input type="text" required name="Prénom" id="prenom" /></td>
		</tr>
		<br ><br>
		
		<tr>
		 <td><center><br>Sexe:</center></td>
		 <td colspan=3>
		 <br><select> 
			<option> masculin </option>
			<option> feminin </option>
		 </select>		
		</tr>
		<br ><br>
		
		<tr>
		<td><center><label for="cin"><br>CIN<abbr>*</abbr></label></center></td> 
	
		<td><br><input type="text" required name="CIN" id="cin" /></td>
		</tr>
		<br ><br>
		
		<tr>
		<td><center><label for="rue"><br>Adresse<abbr>*</abbr></label></center></td>  
		<td><br><input type="text" required  name="rue" id="rue" /></td>
		</tr>
		<br>
		<tr>
		 <td><center><br><br>Ville<abbr>*</abbr><center></td>
		 <td colspan=3>
		 <br><select> 
			<option>Dakar</option>
			<option>saint-Louis</option>
			<option>Ziguinchor </option>
			<option>Kaolack </option>
			<option>Thies </option>
			<option>Dagana</option>
			<option> Mbour </option>
			<option>Podor</option>
			<option>Tambacounda</option>
			<option>Touba</option>
			<option>Kolda</option>
			<option>Kedougou </option>
			<option>Rufisque</option>
			<option> Richard Toll </option>
			<option>Diourbel </option>
			<option>Pikine</option>
			<option>Joal Fadiouth </option>
			<option>Guediawaye </option>
			<option>Ndioum </option>
			<option>Bignona </option>
			<option> Louga </option>
			<option>Vilingara </option>
			<option>Matam</option>
			<option>Kaffrine </option>
			<option>Mbacke  </option>
			<option>Mekhe </option>
			<option>Nguekhokh  </option>
			<option>Dahra </option>
			<option>Fatick  </option>
			<option>Sedhiou</option>
			<option>Kayar  </option>
			<option>Diamniadio </option>
			<option>Tivaouane  </option>
			<option>Pout</option>
			<option>Sokone  </option>
			<option>Khombole </option>
			<option>Sebikhotane  </option>
			<option>Kanel </option>
			<option>Mboro  </option>
			<option>Thiaroye </option>
			<option>Guinguineo </option>
			<option>Koungheul </option>
			<option>Ourossogui </option>
			<option> Bakel</option>
			<option>Bargny  </option>
			<option>Linguere </option>
			<option>N'Dofan  </option>
			<option>Gandiaye </option>
			<option>Goudomp  </option>
			<option>Kebemer </option>
			<option>Nioro du Rip </option>
		 </select>		
		</tr>
		
		
		<tr>
		<td><center><label for="tele"><br>N°téléphone<abbr>*</abbr><br></label></center></td>
		<td><br><input type="text" required size="20" id="tele" /></td>
		</tr>
		
		
		 <tr>
		 <td><center><label for="e-mail"><br>E-Mail<abbr>*</abbr></label></center></td>
		 <td><br><input type="text"required  name="mail" id="mail" value="" onfocus="this.value=""/></td>
		 </tr>
		</br>
		
		<tr>
		<td><center><label for="mot de passe"><br>Mot de passe<abbr>*</abbr></label></center><br></td>
		<td><br><input type="mot de passe" required name="passwd" id="passwd" value="" onfocus="this.value="" /></td>
		</tr>
		
		
		<tr>
		<td><center><label for="codepost"><br>Code Postal:</label></center></td>  
		<td><br><input type="text" size="20" id="codepost" /></td>
		</tr>
		<br ><br>
		
		<tr>
		<td><center><label for="fax"><br>Fax:</label></center></td>  
		<td><br><input type="text" size="20" id="fax" /></td>
		</tr>
		<tr>
		<P align="left">
	   <td><center><br><br><input type="submit" name="submit" value="S'inscrire" class="box-button" /><br></center> </td></p>
		</tr>
	   </table>	 	
      </form></center>
             <?php } ?>
   

    </body>
</html>