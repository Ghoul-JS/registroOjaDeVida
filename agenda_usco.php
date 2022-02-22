<?php
	include('fpdf/fpdf.php');
	class PDF extends FPDF 
	{
         //Cabecera de la Pagina
		function Header()
		{
			//logo
			$this->Image('images2.jpg',25,3,30,30,"jpg");

			//tipo y tamaño de la titulo
			$this->SetFont('Arial','B',16);
			$this->Cell(50);

			//titulo
			$this->Cell(70,10,'REPORTE DE AMIGOS - AGENDA',1,0,'C');

			//Salto de linea
			$this->Ln(15);

			$this->Cell(20,10,'Cedula',1,0,'C');
			$this->Cell(20,10,'Codigo',1,0,'C');
			$this->Cell(40,10,'Nombre1',1,0,'C');
			$this->Cell(40,10,'Nombre2',1,0,'C');
			$this->Cell(40,10,'Apellido1',1,0,'C');
			$this->Cell(40,10,'Apellido2',1,0,'C');
			$this->Ln(15);

		}

		//pie de pagina

		function Footer()
		{
			$this->SetY(-15);

			//tipo y tamaño de la titulo
			$this->SetFont('Arial','i',8);
			// muestra la pagina de un total de paginas
			$this->Cell(0,10,utf8_decode('Página No. ').$this->pageNo().'/{nb}',0,0,'C');
		}
	}

	include("conexion.php");

	$consulta = "SELECT * FROM basicos ORDER BY id ASC;";

	$resultado = $conectar->query($consulta);


    if ( $resultado == false)
    {
    	die("Fallo la lectura del registro : ".$conectar->error);
    }

	$pdf = new PDF();
	$pdf-> AliasNbPages();
    $pdf->AddPage();


    //leer la tabla
    while ($row=mysqli_fetch_assoc($resultado))
    //while ( $row = $resultado->fetch_assoc() )
    {
    	$pdf->Cell(20,10,$row['cedula'],1,0,'L',0);
    	$pdf->Cell(20,10,$row['codigo'],1,0,'L',0);
    	$pdf->Cell(40,10,$row['nombre1'],1,0,'L',0);
    	$pdf->Cell(40,10,$row['nombre2'],1,0,'L',0);
    	$pdf->Cell(40,10,$row['apellido1'],1,0,'L',0);
    	$pdf->Cell(40,10,$row['apellido2'],1,1,'L',0);
    }
    $pdf->Output();
?>