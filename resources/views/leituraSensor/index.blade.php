{{--
    @extends('layouts.app')

    @section('content')
        leituraSensor.index template
    @endsection
--}}

<html>
<h1>
    pah, eu diria que ta funcionando se pa
    <table>
        <tr>
            <td>
                ID
            </td>
            <td>
                Codigo do Sensor
            </td>
            <td>
                Valor
            </td>
            <td>
                Grandeza
            </td>
            <td>
                Id do Setor
            </td>
        </tr>
        @foreach ($leituraSensors as $leitura)
            <tr>
                <td>
                    {{ $leitura->id }}
                </td>
                <td>
                    {{ $leitura->cod_sensor }}
                </td>
                <td>
                    {{ $leitura->valor }}
                </td>
                <td>
                    {{ $leitura->grandeza }}
                </td>
                <td>
                    {{ $leitura->setor_id }}
                </td>
                <td>
                    {{ $leitura->setor_id }}
                </td>
                <td>
                    <a href="{{ route('leitura-sensor.delete', $leitura->id) }}"
                        onclick="return confirm('Deseja excluir?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</h1>

</html>
