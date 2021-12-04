<!-- <?php
session_start();
if ($_SESSION['tipo'] == 'Administrador') {
	
	

require "fpdf.php";
require_once("../conexion/conexion.php");
class PDF extends FPDF{
  function Header()
{
    // Logo     el 83 define el tama�o el 10 es un tab, el 8 es lineas
    $this->Image('logoo.png',20,8,30);
    $this->Image('logoo.png',225,8,30);
}
}
//CREACION DE LA HOJA
//$years=$_GET['years'];
$pdf = new PDF('L', 'mm','Letter');
$pdf->setMargins(30,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);

$pdf->Cell(0,5,'HOSPITAL DE LA SELVA',0,1,'C');
$pdf->Cell(0,5,'PACIENTES REGISTRADOS ',0,1,'C');
setlocale (LC_ALL,"es_ES");
$fecha = new DateTime (NULL, new DateTimeZone('America/Mexico_City'));
$hora = new DateTime (NULL, new DateTimeZone('America/Mexico_City'));

  $pdf->Ln();

  
  //segundo grupo lactantes2
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

$result=mysqli_query($link, "select id,nombre,tel,email,sexo,fecha,hora,en from pacientes"); 

//$consulta 
  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(45,5, "ID",1,0,'C'); 
    $pdf->Cell(45,5, "Nombre Completo",1,0,'C');
    $pdf->Cell(25,5, "te",1,0,'C');
    $pdf->Cell(20,5, "email",1,0,'C');
    $pdf->Cell(40,5, "sexo",1,0,'C');
    $pdf->Cell(20,5, "fecha",1,0,'C');
    $pdf->Cell(25,5, "hora",1,0,'C');
    $pdf->Cell(25,5, "tpo_cita",1,0,'C');
    
    
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    

    
    
    $pdf->Cell(45,5, $row[0],1,0,'J');
    $pdf->Cell(25,5, $row[1],1,0,'J');
    $pdf->Cell(20,5, $row[2],1,0,'J');
    $pdf->Cell(40,5, $row[3],1,0,'J');
    $pdf->Cell(20,5, $row[4],1,0,'J');
    $pdf->Cell(25,5, $row[5],1,0,'J');
    $pdf->cell(25,5, $row[6],1,0,'J');
    

 
 		$pdf->Text(200, 200,"Ocosingo Chiapas, a ". $fecha->format('d/m/Y'));
 	$pdf->Text(200, 205,"A las:". $hora->format("H:i"));
 	//$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
} else {
	
	header('Location: ../index3.php');
	exit();
	return;
}


?> -->


<?php
session_start();
if ($_SESSION['tipo'] != 'Administrador') {
	
	header('Location: ../index3.php');
	exit();
	return;
}
?>
<?php
require "fpdf.php";
require_once("../conexion/conexion.php");
class PDF extends FPDF{
  function Header()
{
    // Logo     el 83 define el tama�o el 10 es un tab, el 8 es lineas
    $this->Image('tipologo.png',10,8,30);
    $this->Image('tipologo.png',170,8,30);
}
}
//CREACION DE LA HOJA
//$years=$_GET['years'];
$pdf = new PDF('P', 'mm','Letter');
$pdf->setMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'MEDICAL TECHNOLOGY',0,1,'C');
$pdf->Cell(0,5,'MEDICAMENTOS REGISTRADOS ',0,1,'C');
setlocale (LC_ALL,"es_ES");
$fecha = new DateTime (NULL, new DateTimeZone('America/Mexico_City'));
$hora = new DateTime (NULL, new DateTimeZone('America/Mexico_City'));

  $pdf->Ln();

  
  //segundo grupo lactantes2
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

$result=mysqli_query($link, "select nombre,codigo,fecha_cad,marca,fecha_ad from medicamentos"); 
//$consulta 
  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
  //  $pdf->Cell(20,5, utf8_encode(""),1,0,'C');
    $pdf->Cell(40,5, "Nombre de los Medicamentos",1,0,'C');
    $pdf->Cell(30,5, "Codigo",1,0,'C');
    $pdf->Cell(30,5, "Fecha Caducidad",1,0,'C');
    $pdf->Cell(30,5, "Marca",1,0,'C');
    $pdf->Cell(35,5, utf8_encode("Fecha de Asquisicion"),1,0,'C');
    
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    
    $pdf->Cell(40,5, $row[0],1,0,'J');
    $pdf->Cell(30,5, $row[1],1,0,'J');
    $pdf->Cell(30,5, $row[2],1,0,'J');
    $pdf->Cell(30,5, $row[3],1,0,'J');
    $pdf->Cell(35,5, $row[4],1,0,'J');
   
 
$pdf->Text(170, 265,"Ocosingo Chiapas, a ". $fecha->format('d/m/Y'));
 	$pdf->Text(170, 270,"A las:". $hora->format("H:i"));
    //$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
?>