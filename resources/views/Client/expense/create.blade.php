@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white fw-bold">
            Registrar Gasto
        </div>
        <div class="card-body">
            <form action="{{ route('client.expense.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Monto</label>
                    <input type="number" name="amount" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-danger">Guardar Gasto</button>
            </form>
        </div>
    </div>
</div>
@endsection