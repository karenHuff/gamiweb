<?php  
include "conexion.php";

if (isset($_POST['idActv']) && isset($_POST['accion'])) {
	// code...
	
	if ($_POST['accion']=='mostrar') {
		// code...
		
		$idRetos = $_POST['idActv'];
		$QueryRetos = "SELECT * FROM retos_preguntas WHERE id='$idRetos'";
		$Resultado = mysqli_query($Con, $QueryRetos);
		$Res = array();

		while ($renglon=mysqli_fetch_array($Resultado)) {
			// code...
			$Res['id']=$renglon['id'];
			$Res['pregunta']=$renglon['pregunta'];
			$Res['respuesta']=$renglon['respuesta'];
			$Res['inc_uno']=$renglon['inc_uno'];
			$Res['inc_dos']=$renglon['inc_dos'];
			$Res['inc_tres']=$renglon['inc_tres'];
			$Res['puntaje']=$renglon['puntaje'];
		}
	}else {
		$Res['estado']=0;
	}
}else{
		$Res['estado']=0;
}
echo json_encode($Res);
?>