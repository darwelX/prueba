<?php
$con = odbc_connect("Driver={SQL Server};Server=ACAD01;Database=ControlAcademico","sa","");
if($con){
  print "conexion exitosa!<br>";
}else{
  print "error en conexion";
}

$sql = "SELECT * FROM DOCENTES";

//Executing The Query
$rs = odbc_exec($con,$sql);

//Checking The Result Set
if (!$rs)
{
exit("Error in SQL");
}

while ( $rss=odbc_fetch_array($rs) ) { 
$resultado=$rss["APELLIDOSYNOMBRES"];
echo $resultado."<br>"; 
}
?> 