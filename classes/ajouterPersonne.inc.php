<?php
	$db=new Mypdo();
	
	$manager1 = new personneManager($db);
	$manager2 = new divisionManager($db);
	$manager3 = new departementManager($db);
	$manager4 = new etudiantManager($db);
	$manager5 = new fonctionManager($db);
	


	if(isset($_SESSION['pseudo']))
	{
	
		if ((!empty($_POST["Nom"])  && !empty($_POST["Telephone"])
		&& !empty($_POST["Mail"]) && !empty($_POST["Login"]) && !empty($_POST["Pwd"])) && preg_match("#^[0-9]{10}$#", $_POST["Telephone"])
		&& preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST["Mail"]))
		{	

			$_SESSION["Nom"]=$_POST["Nom"];
			$_SESSION["Prenom"]=$_POST["Prenom"];
			$_SESSION["Telephone"]=$_POST["Telephone"];
			$_SESSION["Mail"]=$_POST["Mail"];
			$_SESSION["Login"]=$_POST["Login"];
			$_SESSION["Pwd"]=$_POST["Pwd"];		

			$_SESSION['categorie']=$_POST['Categorie'];	
		}
	

		
		if ((empty($_POST["Nom"]) || empty($_POST["Prenom"]) || empty($_POST["Telephone"])
		|| empty($_POST["Mail"]) || empty($_POST["Login"]) || empty($_POST["Pwd"])
		|| empty($_POST["categorie"]) || !preg_match("#^[0-9]{10}$#", $_POST["Telephone"])
		|| !preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST["Mail"]))
		&& !isset($_SESSION['Nom']))
		{ ?>

			<h1>Ajouter une personne</h1>	
				
					<?php if(!empty($_POST["Telephone"]) && !preg_match("#^[0-9]{10}$#", $_POST["Telephone"]))
					{
						echo "<p><img src=\"image/erreur.png\" alt=\"\"/>";
						echo "Le téléphone n'est pas valide !</p>";
					}

					if(!empty($_POST["Mail"]) && !preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST["Mail"]))
					{
						echo "<p><img src=\"image/erreur.png\" alt=\"\"/>";
						echo "L'email n'est pas valide !</p>";
					} ?>

			<table class ="nobordered" align="center">
			
			<form method="post" action="#">	
				<tr>
				<td>Nom :</td>
				<td><input type="text" name="Nom" ></td>
				</tr>
				<tr>
				<td>Prénom :</td>
				<td><input type="text" name="Prenom" ></td>
				</tr>
				<tr>
				<td>Téléphone :</td>
				<td><input type="text" name="Telephone" ></td>
				</tr>
					<tr>
				<td>Mail :</td>
				<td><input type="text" name="Mail" ></td>
				</tr>
				<tr>
				<td>Login :</td>
				<td><input type="text" name="Login" ></td>
				</tr>
				<tr>
				<td>Mot de passe :</td>
				<td><input type="password" name="Pwd" ></td>
				</tr>
				<tr>
				<td>Catégorie :</td>
				<td><input type="radio" name="Categorie" value="Etudiant" checked>Etudiant</td>
				<td><input type="radio" name="Categorie" value="Personnel" >Personnel</td>
				</tr>
				<tr>
				<td><input type="submit" value="Valider"></td>
				</tr>

			</table>
		<?php 		
	 	} 
		else 
		{	

			if($_SESSION['categorie']==='Etudiant') 
			{ 
				if (empty($_POST["annee"]) || empty($_POST["dpt"])) 
				{ ?>
		
					
					<form method="post" action="#">	

						<label>Année :</label>
						<select name="annee" id="annee">
						<?php 
						$divs = $manager2->getAllDivision();		
						foreach($divs as $division)
						{
						?>	
									<option value="<?php echo $division->getDiv_num(); ?>">
										 <?php echo $division->getDiv_nom(); ?>
									</option>
									
					<?php } ?>
						</select>
						<label>Département :</label>
						
						<select name="dpt" id="dpt">
						 <?php 
						$dpts = $manager3->getAllDpt();	
						
						foreach($dpts as $departement)
						{
						?>
							<option value="<?php echo $departement->getDep_num();?>">
								<?php echo $departement->getDep_nom(); ?>
							</option>
					<?php } ?>
						</select>
						<input type="submit" value="Valider">
					</form>
			 	<?php 		
				}
	 			else
	 			{		

	 				$salt = "48@!alsd";
					$pwd=$_SESSION['Pwd'];
					$pwd_crypter=md5(md5($pwd).$salt);


					$personne=new personne(array('per_num'=> "", 'per_nom' => $_SESSION["Nom"], 'per_prenom' => $_SESSION["Prenom"],
					 'per_tel' => $_SESSION["Telephone"], 'per_mail' => $_SESSION["Mail"], 'per_admin' => '0', 'per_login' => $_SESSION["Login"],
					  'per_pwd' => $pwd_crypter));
					$manager1->add($personne);
					
					$etudiant=new etudiant(array('per_num'=> "",'dep_num' => $_POST['dpt'], 'div_num' => $_POST['annee']));
					$manager4->add($etudiant);	
				
					?><h1>Ajouter un étudiant</h1> <?php
					
					echo "<img src=\"image/valid.png\"/>";
					echo "  L'étudiant a été ajouté";
					
					unset($_SESSION['Nom']);
					unset($_SESSION['Prenom']);
					unset($_SESSION['Telephone']);
					unset($_SESSION['Mail']);
					unset($_SESSION['Login']);
					unset($_SESSION['Pwd']);
					unset($_SESSION['Categorie']);
				}
			}		
			else
			{
				if (empty($_POST["telpro"]) || empty($_POST["fonction"]) || !preg_match("#^[0-9]{10}$#", $_POST["telpro"]))
				{ ?>
			
					<h1>Ajouter un salarié</h1>
							
					<?php if(!empty($_POST["telpro"]) && !preg_match("#^[0-9]{10}$#", $_POST["telpro"])){
						echo "<p><img src=\"image/erreur.png\" alt=\"\"/>";
						echo "Le téléphone n'est pas valide !</p>";
					}?>

					<form method="post" action="#">	

						<label> Téléphone professionnel :</label>
						<input type="text" name="telpro" >

						<label>Fonction :</label>
						<select name="fonction" id="fonction">
						<?php 
						$fons = $manager5->getAllFon();		
						foreach($fons as $fonction)
						{
						?>	
							<option value="<?php echo $fonction->getFon_num(); ?>">
								 <?php echo $fonction->getFon_libelle(); ?>
							</option>
									
					<?php } ?>
						</select>
						<input type="submit" value="Valider">
					</form>
				<?php 		 
				}
	 			else
	 			{		

	 				$salt = "48@!alsd";
					$pwd=$_SESSION['Pwd'];
					$pwd_crypter=md5(md5($pwd).$salt);


					$personne=new Personne(array('per_num'=> "", 'per_nom' => $_SESSION["Nom"], 'per_prenom' => $_SESSION["Prenom"],
					 'per_tel' => $_SESSION["Telephone"], 'per_mail' => $_SESSION["Mail"], 'per_admin' => '0', 'per_login' => $_SESSION["Login"],
					  'per_pwd' => $pwd_crypter));
					$manager1->add($personne);
					
					$salarie=new Salarie(array('per_num'=> "",'sal_telprof' => $_POST['telpro'], 'fon_num' => $_POST['fonction']));
					$manager6->add($salarie);	
				
					
					?><h1>Ajouter un salarié</h1> <?php
					
					echo "<img src=\"image/valid.png\"/>";
					echo "  Le salarié a été ajouté";
					echo "</br>";
					
					unset($_SESSION['Nom']);
					unset($_SESSION['Prenom']);
					unset($_SESSION['Telephone']);
					unset($_SESSION['Mail']);
					unset($_SESSION['Login']);
					unset($_SESSION['Pwd']);
					unset($_SESSION['Categorie']);
				}
			}
		}
	}
	else
	{
		echo "Vous n'etes pas authentifiez, dommage";
	}
?>