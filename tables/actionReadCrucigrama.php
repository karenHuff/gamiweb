<?php 
	include "conexion.php";
	
	if(isset($_POST['idActv']) && isset($_POST['accion'])){
		
		if($_POST['accion']=='mostrar'){
			
			$idCruci = $_POST['idActv'];
			$QueryJeop = "SELECT * FROM crucigrama_preguntas WHERE id= '$idCruci' ";
			
			$Resultado = mysqli_query($Con, $QueryJeop);
		  	$Res=array();

		  	while ($renglon=mysqli_fetch_array($Resultado)) {
		    // code...
		    
				$Res['id']=$renglon['id'];
				$Res['palabra']=$renglon['palabra'];
				$Res['descripcion']=$renglon['descripcion'];
		    
		    }
		}else{
			$Res['estado']=0;
		}
		
	}else{
		$Res['estado']=0;
	}
	echo json_encode($Res);

?>