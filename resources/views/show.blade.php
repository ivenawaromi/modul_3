<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Route</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>This is Route List</h1>
        <ul class="list-group mt4">
            @foreach ($routes as $routes)
                <li class="list-group-item">{{ $routes -> uri }}</li>
            @endforeach
        </ul>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
