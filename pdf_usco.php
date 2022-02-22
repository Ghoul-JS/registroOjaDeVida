<?php
	include("conexion.php");
	include('fpdf/fpdf.php');
	class PDF extends FPDF 
	{
         //Cabecera de la Pagina
		function Header()
		{
			//logo
			$this->Image('images2.jpg',20,3,25,25,"jpg");
			$this->Image('images.jpg',160,3,25,25,"jpg");
			//tipo y tamaño de la titulo
			$this->SetFont('Arial','B',14);
			$this->Cell(50);

			//titulo
			$this->Cell(90,10,'REPORTE DE AMIGOS - AGENDA',0,1,'C');

			$this->Ln(5);
			$this->Cell(160);
			$this->SetFont('Arial','I',8);
			$this->Cell(25,5,'Fecha : '.date("d/m/y"),0,0,'C');

			//Salto de linea
			$this->Ln(5);
			$this->SetFont('Arial','B',10);
			$this->Cell(25,8,'Cedula',1,0,'C');
			$this->Cell(25,8,'Codigo',1,0,'C');
			$this->Cell(35,8,'Nombre1',1,0,'C');
			$this->Cell(35,8,'Nombre2',1,0,'C');
			$this->Cell(35,8,'Apellido1',1,0,'C');
			$this->Cell(35,8,'Apellido2',1,0,'C');
			$this->Ln(10);
			$this->SetFont('Arial','I',9);
		}

		//pie de pagina
		function Footer()
		{
			$this->SetY(-15);
			//tipo y tamaño de la titulo
			$this->SetFont('Arial','I',8);
			// muestra la pagina de un total de paginas
			$this->Cell(0,10,'Pagina No. '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

	$consulta = "SELECT * FROM basicos ORDER BY id ASC;";
	$resultado = $conectar->query($consulta);

    if ( $resultado == false)
    {
    	die("Fallo la lectura del registro : ".$conectar->error);
    }

	$pdf = new PDF();
	$pdf->AliasNbPages();
    $pdf->AddPage();
    
    //leer la tabla
    while ( $row = $resultado->fetch_assoc() )
    {
    	$pdf->Cell(25,8,$row['cedula'],1,0,'L',0);
    	$pdf->Cell(25,8,$row['codigo'],1,0,'L',0);
    	$pdf->Cell(35,8,$row['nombre1'],1,0,'L',0);
    	$pdf->Cell(35,8,$row['nombre2'],1,0,'L',0);
    	$pdf->Cell(35,8,$row['apellido1'],1,0,'L',0);
    	$pdf->Cell(35,8,$row['apellido2'],1,1,'L',0);
    }
    $pdf->Output();
?>