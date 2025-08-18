@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center bg-success text-white">
                    <h4>Mi Perfil</h4>
                </div>
                <div class="card-body text-center">

                    {{-- Foto de perfil --}}
                    <div class="mb-3">
                        @if (!empty($user['photo']))
                            <img src="{{ asset('storage/' . $user['photo']) }}" 
                                 alt="Foto de perfil" 
                                 class="img-thumbnail rounded-circle shadow mb-2" width="140">
                        @else
                            <img src="https://via.placeholder.com/140x140.png?text=Sin+Foto" 
                                 alt="Sin foto" 
                                 class="img-thumbnail rounded-circle shadow mb-2">
                        @endif
                    </div>

                    {{-- Datos --}}
                    <ul class="list-group list-group-flush text-start mb-3">
                        <li class="list-group-item"><strong>Nombre:</strong> {{ $user['name'] ?? 'No definido' }}</li>
                        <li class="list-group-item"><strong>Correo:</strong> {{ $user['email'] ?? 'No definido' }}</li>
                        <li class="list-group-item"><strong>Fecha de nacimiento:</strong> {{ $user['birth_date'] ?? 'No definida' }}</li>
                    </ul>

                    {{-- Botón editar --}}
                    <a href="{{ route('perfil.edit', $user['id'] ?? '') }}" class="btn btn-success w-100">
                        Editar Perfil
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
