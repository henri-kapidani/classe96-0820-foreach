<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controllo parola</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<div class="container">
		<h1>Foreach</h1>
		<form action="" method="get">
			<div class="mb-3">
				<label for="word" class="form-label">Parola da cercare</label>
				<input type="text" class="form-control" id="word" name="word">
			</div>

			<div class="mb-3">
				<label for="name" class="form-label">Nome</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>

			<div class="mb-3">
				<label for="age" class="form-label">Età</label>
				<input type="number" class="form-control" id="age" name="age">
			</div>

			<button class="btn btn-primary" type="submit">Cerca</button>
		</form>

		<?php // var_dump($_GET) ?>

		<ul><?php
			foreach ($_GET as $key => $value) { ?>
				<li><?= $key ?>: <?= $value ?></li><?php
			} ?>
		</ul>

		<?php
			$animals = [
				"mammals"	=> ["cow", "pig", "horse", "dog"],
				"birds"		=> ["duck", "chicken"]
			];

			foreach ($animals as $family => $animalClass) { ?>
				<h2><?= $family ?></h2><?php
				foreach ($animalClass as $animal) {
					echo $animal . '<br>';
				}
			} ?>
	</div>
</body>

</html>