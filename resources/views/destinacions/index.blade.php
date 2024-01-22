<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            border: 2px solid black;
            padding: 2em 1.5em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    @foreach ($destinacions as $destinacion)
    <div class="container">
        <img src="{{ asset($destinacion->picture_location) }}" alt="">
        <h1>{{ $destinacion->name }}</h1>
        <h2>{{ $destinacion->province }} - {{ $destinacion->country }}</h2>
        <a href="{{route('destinacions.show', $destinacion->id)}}">Ver mas</a>
    </div>
    @endforeach
</body>
</html>