<?php 
	include "conexion.php";
	
	if(isset($_POST['idActv']) && isset($_POST['accion'])){
		
		if($_POST['accion']=='mostrar'){
			
			$idJeo = $_POST['idActv'];
			$QueryJeop = "SELECT * FROM jeopardy_preguntas WHERE id= '$idJeo' ";
			
			$Resultado = mysqli_query($Con, $QueryJeop);
		  	$Res=array();

		  	while ($renglon=mysqli_fetch_array($Resultado)) {
		    // code...
				$Res['id']=$renglon['id'];
				$Res['pregunta'] = $renglon['pregunta'];
				$Res['resp_uno'] = $renglon['resp_uno'];
				$Res['resp_dos'] = $renglon['resp_dos'];
				$Res['resp_tres'] = $renglon['resp_tres'];
				$Res['resp_cuatro'] = $renglon['resp_cuatro'];
				$Res['puntaje'] = $renglon['puntaje'];
		    }
		}else{
			$Res['estado']=0;
		}
		
	}else{
		$Res['estado']=0;
	}
	echo json_encode($Res);
?>