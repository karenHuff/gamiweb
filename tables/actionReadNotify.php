<?php 
    include "conexion.php";
	
	$Res=array();
	
	if(isset($_POST['accion']) && isset($_POST['idUsuario'])){
		
		if($_POST['accion']=='mostrar'){
			
			$idUsuario = $_POST['idUsuario'];
			$queryCon = "SELECT * FROM notificacion WHERE id_usuario = '$idUsuario' AND id = (SELECT max(id) from notificacion)";
			$resQuery = mysqli_query($Con, $queryCon);
		  	
		  	
		  	while ($campo = mysqli_fetch_array($resQuery)) {
		        // code...
		        
		        $pregunta['id']=$campo['id'];
		        $pregunta['nom_noti']=$campo['nom_noti'];
		        $pregunta['mensaje']=$campo['mensaje'];
		        array_push($Res, $pregunta);
		    }
		}else{
			$Res['estado']=0;
		}
		
	}else{
		$Res['estado']=0;
	}
	echo json_encode($Res);

?>