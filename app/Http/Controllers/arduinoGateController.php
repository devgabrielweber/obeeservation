<?php

namespace App\Http\Controllers;

use App\Models\leituraSensor;
use Illuminate\Http\Request;

class arduinoGateController extends Controller
{
    public function insert(Request $request)
    {
    //     $erros = $request->validate([
    //         'cod_sensor'=>'required',
    //         'valor'=>'required|numeric',
    //         'setor_id'=>'required|exists:setor,id',
    //         'grandeza'=>'required|max:10',
    //     ],[
    //         'valor.numeric'=>'O :attribute deve ser numérico!',
    //         'setor_id.exists'=> 'O setor não existe!',
    //         'cod_sensor.required'=>"O :attribute é obrigatorio!",
    //         'valor.required'=>"O :attribute é obrigatorio!",
    //         'setor_id.required'=>"O :attribute é obrigatorio!",
    //         'grandeza.required'=>"O :attribute é obrigatorio!",
    //         'grandeza.max'=>"O :attribute deve ser menor que 10!",
    //     ]);


        $dados = [
            'cod_sensor'=>$request->cod_sensor,
            'valor'=> $request->valor,
            'setor_id'=> $request->setor_id,
            'grandeza'=>$request->grandeza,
        ];

        leituraSensor::create($dados);

        return view('leituraSensor.index')->with('leituraSensors', leituraSensor::all());
    }
}
