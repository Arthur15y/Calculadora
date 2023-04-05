<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="post">
		<label>Número 1:</label>
		<input type="number" name="num1" required><br><br>
		<label>Número 2:</label>
		<input type="number" name="num2" required><br><br>
		<label>Operação:</label>
		<select name="operacao">
			<option value="soma">Adição (+)</option>
			<option value="subtracao">Subtração (-)</option>
			<option value="multiplicacao">Multiplicação (*)</option>
			<option value="divisao">Divisão (/)</option>
		</select><br><br>
		<input type="submit" value="Calcular">
	</form>
	<br><br>
	<?php
	if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operacao = $_POST['operacao'];

		switch($operacao) {
			case 'soma':
				$resultado = $num1 + $num2;
				echo "Resultado: $num1 + $num2 = $resultado";
				break;
			case 'subtracao':
				$resultado = $num1 - $num2;
				echo "Resultado: $num1 - $num2 = $resultado";
				break;
			case 'multiplicacao':
				$resultado = $num1 * $num2;
				echo "Resultado: $num1 * $num2 = $resultado";
				break;
			case 'divisao':
				if($num2 == 0) {
					echo "Não é possível dividir por zero.";
				} else {
					$resultado = $num1 / $num2;
					echo "Resultado: $num1 / $num2 = $resultado";
				}
				break;
			default:
				echo "Operação inválida.";
				break;
		}
	}
	?>
</body>
</html>
