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
        <section id="planificaTusVacaciones">
            <h2>¡Planifica tus vacaciones!</h2>
            <p>¿Quieres desconectar de la rutina? ¡Hecha un vistazo a los destinos que te proponemos!</p>
            <div id="eligeUnDestino">
                <h3>Destinos</h3>
                <div id="destinos">
                    
                    @foreach ($destinacions as $destinacion)
                    <div class="destino">
                        <div class="imagenDestino">
                            <img src="{{ asset($destinacion->picture_location) }}" alt="Imagen destino {{ $destinacion->name }}">
                        </div>
                        <div class="datosDestino">
                            <h4>{{ $destinacion->name }}</h4>
                            <h5>{{ $destinacion->province }} - {{ $destinacion->country }}</h5>
                            <div class="opcionesDestino">
                                <a href="{{ route('destinacions.show', $destinacion->id) }}">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div id="copyrightInfo">
            &copy; 2024. M.09 - UF2 - Proyecto
        </div>
    </footer>
</body>
</html>