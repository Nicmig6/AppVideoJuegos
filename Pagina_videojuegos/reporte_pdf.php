<?php
require('/Users/nicol/OneDrive/Escritorio/Pagina_videojuegos/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(80,10,'Reporte de Videojuegos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(100,10,'Titulo',0,0,'C',0);
    $this->Cell(45,10,'Completado',0,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$datos=[];
try {
    $db=mysqli_connect("localhost","root","mmnicomm88","appvideojuegos");
    $sql="SELECT * FROM videojuegos;";
    $consulta=mysqli_query($db,$sql);
    $i=0;
   

       while($row=mysqli_fetch_assoc($consulta)){
        $datos[$i]["id"]=$row["id"];
        $datos[$i]["titulo"]=$row["titulo"];
        $datos[$i]["completado"]=$row["completado"];

        $pdf->Cell(90,10,$datos[$i]["titulo"],0,0,'C',0);
        $pdf->Cell(90,10,$datos[$i]["completado"],0,1,'C',0);
        $i++;
    } 
    $pdf->Output();  
 
    
}
    catch (\Throwable $th) {
        //throw $th;
     }


    
?>