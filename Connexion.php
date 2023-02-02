<html>
    <head>
       <meta charset="utf-8">
       <TITLE>CONNEXION.php</TITLE>
    </head>
    <body>
         <?php
             require('config.php');
             session_start();
             if (isset($_POST['e-mail'])){
             $e-mail = stripslashes($_REQUEST['e-mail']);
             $e-mail = mysqli_real_escape_string($conn, $e-mail);
             $password = stripslashes($_REQUEST['password']);
             $password = mysqli_real_escape_string($conn, $password);
             $query = "SELECT * FROM `utilisateur` WHERE e-mail='$e-mail' and password='".hash('sha256', $password)."'";
             $result = mysqli_query($conn,$query) or die(mysql_error());
             $rows = mysqli_num_rows($result);
             if($rows==1){
              $_SESSION['e-mail'] = $e-mail;
               header("Location: index.php");
                 }else{
                       $message = "votre e-mail ou votre mot de passe est incorrect.";
                                            }
                       }
                     ?>
        <center><form class="box" action="" method="post" name="connexion">
                                            
          <h1 class="box-title">CONNEXION</h1>
	
          <td><input type="text" class="box-input" name="e-mail" placeholder="Entrer votre E-mail" required></td></tr><br><br>
           <td><input type="password" class="box-input" name="password" placeholder="Entrer votre Mot de passe" required></td></tr>
           <br><br><br><input type="submit" value="SE CONNECTER" name="submit" class="box-button">
		       </form></center>
           
            <?php if (! empty($message)) { ?>
                 <p class="errorMessage"><?php echo $message; ?></p>
                                            <?php } ?>
										
										
										
  </body>
</html>
