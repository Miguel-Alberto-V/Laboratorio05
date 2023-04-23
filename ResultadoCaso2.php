<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$precio = $_POST['precio'];
			$cantidad = $_POST['cantidad'];

			$precio_rebajado = $precio * 0.95;

			$importe_compra = $precio_rebajado * $cantidad;

			$descuento = $importe_compra * 0.07;

			$importe_a_pagar = $importe_compra - $descuento;

			$obsequio = $cantidad * 2;

			echo "<br><hr><h3>
			===================== <br>
			Resultados:<br>
			===================== <br>
			</h3>";
			echo "- Nuevo Precio de la Gaseosa:........ S/. " . $precio_rebajado . "<br>";
			echo "- Importe de la Compra:.................. S/. " . $importe_compra . "<br>";
			echo "- Importe del Descuento:................. S/. " . $descuento . "<br>";
			echo "- Importe a Pagar:............................ S/. " . $importe_a_pagar . "<br>";
			echo "- Obsequio: " . $obsequio . " caramelos<br>";
		}
	?>