<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    {{-- Para el mensaje --}}
    @include('layouts.partials.messages')

    @yield('content')

    {{-- 
    @if (isset($showModal) && $showModal)
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('registerModal'), {
                    keyboard: false
                });
                myModal.show();
            });
        </script>
    @endif
 --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Abre el modal automáticamente solo si hay errores de validación para campos específicos del formulario de reseteo de contraseña
            @if ($errors->has('emailR'))
                var myModal = new bootstrap.Modal(document.getElementById('resetPassModal'));
                myModal.show();
            @endif
        });
    </script>

    <!-- Scripts Bootstrap-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
        < /> <
        /body>

        <
        /html>
