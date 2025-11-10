@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Panel del Administrador 🧑‍💼</h2>
    <div class="d-flex justify-content-center gap-4 mt-4">
        <a href="{{ route('users.index') }}" class="btn btn-primary">👥 Gestionar Usuarios</a>
        <a href="{{ route('reports.index') }}" class="btn btn-success">📊 Ver Reportes</a>
    </div>
</div>
@endsection
