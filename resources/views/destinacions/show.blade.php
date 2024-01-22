<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <div id="image">
            <img src="{{ asset($destinacions->picture_location) }}" alt="">
        </div>
        <div id="placeInfo">
            <h1>{{ $destinacions->name }}</h1>
            <h2>{{ $destinacions->province }} - {{ $destinacions->country }}</h2>
            <p>
                {{ $destinacions->description }}
            </p>
        </div>
        <a href="{{ route('destinacions.index') }}">Volver</a>
    </div>
</body>
</html>