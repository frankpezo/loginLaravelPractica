@extends('layouts.app')
@section('title', 'Recuperar contraseña')


<div class="modal fade" id="resetPassModal" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal-2"
    data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex d-flex-inline my-2 py-2">
                    <h4>Recuperar contraseña</h4>

                </div>
                <a href="{{ route('auth.login') }}" class="btn-close" aria-label="Close"></a>
            </div>
            <div class="modal-body">
                <form action="{{ route('auth.storePass') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="emailR" id="email" class="form-control"
                            placeholder="example@example.com">
                    </div>
                    @error('emailR')
                        <p class="alert alert-danger">Ingrese un correo</p>
                    @enderror

                    <div class="mb-3">
                        <label for="password" class="label-control"> Nueva contraseña</label>
                        <input type="password" id="password" class="form-control" name="passwordR">
                    </div>
                    @error('passwordR')
                        <p class="alert alert-danger">Ingrese una contraseña</p>
                    @enderror

                    <button type="submit" class="btn btn-dark form-control">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
