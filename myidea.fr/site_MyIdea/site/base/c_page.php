<?php
		if (isset ($_REQUEST['cont']))
		{
			switch ($_REQUEST['cont'])
			{
				
										
				case 'test': include ('site/c_test.php');
				break;
				
				/* Defaut ! */	
				
				default: include ('site/erreur/c_erreur.php');
				break;
			}
		}
		else {
			include ('site/accueil/c_accueil.php');
			
			}
			?>
		