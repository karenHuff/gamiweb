<?php  
include "conexion.php";

if (isset($_POST['idActv']) && isset($_POST['accion'])) {
	// code...
	
	if ($_POST['accion']=='mostrar') {
		// code...
	
		$idS = $_POST['idActv'];
		$QuerySerp = "SELECT * FROM serpyesc_preguntas WHERE id='$idS'";
		$Resultado = mysqli_query($Con, $QuerySerp);
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