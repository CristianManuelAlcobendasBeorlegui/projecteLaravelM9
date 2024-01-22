<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Stylesheet file -->
    <link rel="stylesheet" href="{{ asset('./css/generalStyles.css') }}">
</head>

<body>
    <header>
        <div id="logo">
            <h1>Logo</h1>
        </div>
        <div id="opcionesUsuario">
            <a href="{{ route('register') }}">Registrarse</a>
            <a href="{{ route('login') }}">Iniciar sesión</a>
        </div>
    </header>
    <main>
        <section id="detallesLugar">
            <div class="principal">
                <div id="imagenLugar">
                    <img src="{{ asset($destinacions->picture_location) }}" alt="Imagen del destino {{ $destinacions->name }}">
                </div>
                <div id="descripcion">
                    <h2>{{ $destinacions->name }}</h2>
                    <h3>{{ $destinacions->province }} - {{ $destinacions->country }}</h3>
                    <p>{{ $destinacions->description }}</p>
                </div>
            </div>
            <div class="secundario">
                <div class="opciones">
                    <a href="{{ route('destinacions.index') }}">¡Ver más destinos!</a>
                </div>    
            </div>
        </section>
    </main>
    <footer>
        <div id="copyrightInfo">
            <span>&copy; 2024. M.09 - UF2 - Proyecto</span>
        </div>
    </footer>
</body>

</html>
