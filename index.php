<?php
require('controller/frontend.php');

try
{
	if(isset($_GET['action']))
	{
		$redi = new Redi();

		if($_GET['action'] == 'home')
		{
			$redi->home();
		}
		else
		{
			throw new Exception('Erreur : Aucune page correspondante');
		}
	}
	else
	{
		header('Location: index.php?action=home');
	}
}
catch(Exception $e)
{
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}

 ?>
