
@extends('layouts.app')

@section('content')
<div class="container my-4">

    {{-- Mensajes de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Historial de Finanzas</h2>

        <div>
            <a href="{{ route('client.income.create') }}" class="btn btn-success me-2">
                + Registrar Ingreso
            </a>
            <a href="{{ route('client.expense.create') }}" class="btn btn-danger">
                + Registrar Gasto
            </a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Tipo</th>
                        <th>Monto</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($finances as $finance)
                        <tr>
                            <td>{{ $finance['date'] }}</td>
                            <td>
                                @if($finance['type'] === 'income')
                                    <span class="badge bg-success">Ingreso</span>
                                @else
                                    <span class="badge bg-danger">Gasto</span>
                                @endif
                            </td>
                            <td>${{ number_format($finance['amount'], 2) }}</td>
                            <td>{{ $finance['description'] ?? '---' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay registros todavía.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection