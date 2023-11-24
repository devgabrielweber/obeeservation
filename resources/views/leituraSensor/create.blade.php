{{--
    @extends('layouts.app')

    @section('content')
        leituraSensor.create template
    @endsection
--}}
@php
    $route = route('leitura-sensor.arduino-gate');
@endphp


<html>

<form action="{{ $route }}" method="POST">
    @csrf
    <label>Codigo do Sensor</label><br>
    <input type="text" name="cod_sensor" placeholder="C-3PO"><br><br>
    <label>Valor da Leitura</label><br>
    <input type="number" name="valor" placeholder="42"><br><br>
    <label>Id do Setor</label><br>
    <input type="number" name="setor_id" placeholder="1, 2, 3..."><br><br>
    <label>Grandeza</label><br>
    <input type="text" name="grandeza" placeholder="Km/h"><br><br>
    <input type="submit" value="enviar">
</form>
@if ($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

</html>
