@extends('layouts.app')

@section('title', 'Register');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">

                <form action="">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">

                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido">

                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">

                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">


                </form>

                <button type="button" class="btn btn-dark form-control mb-3">Iniciar sesión</button>
                <button type="button" class="btn btn-primary form-control">Registrarse</button>

            </div>
        </div>
    </div>
@endSection
