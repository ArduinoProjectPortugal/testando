<!DOCTYPE html>
<html>
<head>
	<title>Gerador de Quotes Motivacionais</title>
	<meta charset="utf-8">
	<!--Importando o Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css">
	<!--Estilo personalizado-->
	<style>
		body {
			background-color: #282c34;
			color: #fff;
			font-family: Arial, sans-serif;
			font-size: 18px;
			padding: 20px;
		}

		h1 {
			color: #61dafb;
			font-weight: bold;
			margin-top: 0;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
		}

		.quote {
			margin-top: 40px;
			padding: 20px;
			background-color: #61dafb;
			border-radius: 10px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Gerador de Quotes Motivacionais</h1>

		<div class="quote">
			<?php
			//Array com as frases motivacionais
			$frases = array(
				"Não importa o que você decidiu. O que importa é que isso te faça feliz.",
				"Não espere por uma crise para descobrir o que é importante em sua vida.",
				"O sucesso é ir de fracasso em fracasso sem perder entusiasmo.",
				"Você nunca sabe que resultados virão da sua ação. Mas se você não fizer nada, não existirão resultados.",
				"O sucesso é a soma de pequenos esforços repetidos dia após dia.",
				"Você é muito mais forte do que imagina. Acredite!"
			);

			//Seleciona uma frase aleatoriamente
			$frase = $frases[array_rand($frases)];

			//Exibe a frase selecionada
			echo "<p>".$frase."</p>";
			?>
		</div>

		<button class="btn btn-primary mt-4" onclick="location.reload()">Gerar Nova Frase</button>

	</div>
	<!--Importando o JavaScript do Bootstrap-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
</body>
</html>
