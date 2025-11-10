@extends('layouts.app')

@section('content')
<div class="container">
    <h2>📊 Reportes de Seguimiento</h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Días de racha</th>
                <th>Progreso</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ rand(1, 30) }} días</td>
                <td>{{ rand(10, 100) }}%</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
