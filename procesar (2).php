<?php 
	$nombre=$_POST['nombre'];
	$password=$_POST['password'];
	if($nombre=='Angela'&& $password=='3040'){
		echo "Bieeeen $nombre";
		header('Location:UsuarioA.php');
		exit;
	}
	else{
		if($nombre=='Nicolas'&& $password=='polluelo'){
		echo "Bieeeen $nombre";
			header('Location:UsuarioB.php');
			exit;
		}
		else{
			if($nombre=='Vero'&& $password=='coquito'){
			echo "Bieeeen $nombre";
			header('Location:UsuarioC.php');
			exit;
			}
			else{
				if($nombre=='Rosa'&& $password=='rivas'){
				echo "Bieeeen $nombre";
				header('Location:UsuarioD.php');
				exit;
				}
				else{
					if($nombre=='Eva'&& $password=='perea'){
					echo "Bieeeen $nombre";
					header('Location:UsuarioB.php');
					exit;
					}
					else{
						exit;
					}
				}
			}
		}
	}		
?>
