<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAS API</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="container py-5">
        <h1 class="text-info">Postal Automation Service API</h1>
        <p class="lead">API Backed.</p>
    </div>
</body>

</html>
