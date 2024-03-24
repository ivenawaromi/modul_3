<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Route Cache</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>This is Route List Cache</h1>
        <ul class="list-group mt4">
                <li class="list-group-item">{{ $output }}</li>
        </ul>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
