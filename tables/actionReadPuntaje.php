<?php  
require 'conexion.php';
$Res = array();
if(isset($_POST['idActv']) && isset($_POST['accion'])){
	if($_POST['accion']=='mostrar'){
		$idActv = $_POST['idActv'];
		
		$QueryRan = "SELECT * FROM ranking_actividad WHERE actividad_id= '$idActv' ORDER BY puntaje DESC";
		
		$Resultado = mysqli_query($Con, $QueryRan);
	  	
	  	$Res['puntajes']=array();

	  	while ($renglon=mysqli_fetch_array($Resultado)) {
	    // code...
		    $usuario = array();
		   
		    $usuario['puntaje'] = $renglon['puntaje'];
		    $usuario['nombre'] = $renglon['nombre'];
		    array_push($Res['puntajes'], $usuario);
		    
	    }
	}else{
		$Res['estado']=0;
	}
	
}else{
	$Res['estado']=0;
}
echo json_encode($Res);
?>