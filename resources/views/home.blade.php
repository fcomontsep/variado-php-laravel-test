<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la página principal en creación</h1>
		A continuación van Alerts hechos como componentes en components.

		<x-alert type="info">
			Este es el valor del slot que viene desde blade.php
		</x-alert>
		<x-alert type="danger">
			Este es el valor del slot que viene desde blade.php
		</x-alert>

		A continuación van Alerts hechos como componentes en App.
		
		<x-alert2 type="info">
			Este es el valor del slot que viene desde blade.php
		</x-alert2>
		<x-alert2 type="danger">
			Este es el valor del slot que viene desde blade.php
		</x-alert2>

    </div>

</body>

</html>
