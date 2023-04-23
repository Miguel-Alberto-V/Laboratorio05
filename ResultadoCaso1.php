<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$ventas = $_POST['ventas'];
			$hijos = $_POST['hijos'];

			$bonificacion = $hijos * 50;

			$comision = $ventas * 0.075;

			$sueldo_bruto = 600 + $comision + $bonificacion;

			$descuento = $sueldo_bruto * 0.11;

			$sueldo_neto = $sueldo_bruto - $descuento;

			echo "<br><hr><h3>
			===================== <br>
			Resultados:<br>
			===================== <br>
			</h3>";
			echo "- Bonificación:.................. S/. " . $bonificacion . "<br>";
			echo "- Comisión:....................... S/. " . $comision . "<br>";
			echo "- Sueldo Bruto:................. S/. " . $sueldo_bruto . "<br>";
			echo "- Descuento:..................... S/. " . $descuento . "<br>";
			echo "- Sueldo Neto:.................. S/. " . $sueldo_neto . "<br>";
		}
?>