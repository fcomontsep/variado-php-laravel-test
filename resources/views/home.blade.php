@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la página principal en creación con componentes</h1>
        A continuación van Alerts hechos como componentes en components.

        <x-alert type="info">
            Este es el valor del slot que viene desde blade.php
        </x-alert>
        <x-alert type="danger">
            Este es el valor del slot que viene desde blade.php
        </x-alert>

        A continuación van Alertss hechos como componentes en App.

        <x-alert2 type="info">
            Este es el valor del slot que viene desde blade.php
        </x-alert2>
        <x-alert2 type="danger">
            Este es el valor del slot que viene desde blade.php
        </x-alert2>

    </div>
@endsection