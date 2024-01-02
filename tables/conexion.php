<?php 
  $bandRegistros=0;
  
  $Con = mysqli_connect("localhost", "root","","gamiweb");
  
  if (mysqli_connect_errno()) {
    # code...
    echo "Error: ".mysqli_connect_errno();
    
  }
?>