<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <img class="img-thumbnail" src="{{Vite::asset('resources/img/laravel.jpg')}}" alt="image">
    </div>
    @vite('resource/js/app.js')
</body>
</html>
