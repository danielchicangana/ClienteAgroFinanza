@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center bg-success text-white">
                    <h4>Editar Perfil</h4>
                </div>
                <div class="card-body">
                    
                    {{-- Mostrar errores --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Mensaje de éxito --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('perfil.update', $user['id'] ?? '') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Nombre --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="{{ old('name', $user['name'] ?? '') }}" required>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="form-control"
                                   value="{{ old('email', $user['email'] ?? '') }}" required>
                        </div>

                        {{-- Fecha nacimiento --}}
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control"
                                   value="{{ old('birth_date', $user['birth_date'] ?? '') }}">
                        </div>

                        {{-- Foto --}}
                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto de perfil</label>
                            <input type="file" name="photo" id="photo" class="form-control">

                            @if (!empty($user['photo']))
                                <div class="mt-3 text-center">
                                    <img src="{{ asset('storage/' . $user['photo']) }}" 
                                         alt="Foto de perfil" class="img-thumbnail rounded-circle shadow" width="130">
                                </div>
                            @endif
                        </div>

                        {{-- Botón --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Actualizar Perfil</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
