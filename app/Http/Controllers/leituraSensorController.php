<?php

namespace App\Http\Controllers;

use App\Http\Requests\leituraSensorStoreRequest;
use App\Models\leituraSensor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class leituraSensorController extends Controller
{
    public function index(Request $request): View
    {
        $leituraSensors = LeituraSensor::all();

        return view('leituraSensor/index', compact('leituraSensors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cod_sensor'=>'required',
            'valor'=>'required',
            'setor_id'=>'required',
            'grandeza'=>'required|max:10',
        ],[
            'cod_sensor.required'=>"O :attribute é obrigatorio!",
            'valor.required'=>"O :attribute é obrigatorio!",
            'setor_id.required'=>"O :attribute é obrigatorio!",
            'grandeza.required'=>"O :attribute é obrigatorio!",
            'grandeza.max'=>"O :attribute deve ser menor que 10!",
        ]);

        $dados = [
            'cod_sensor'=>$request->cod_sensor,
            'valor'=> $request->valor,
            'setor_id'=> $request->setor_id,
            'grandeza'=>$request->grandeza,
        ];
    
        leituraSensor::create($dados); //ou  $request->all()

        return redirect('leitura-sensor')->with('leituraSensors', leituraSensor::all());
    }

    public function create(Request $request)
    {
        return view('leituraSensor.create');
    }

    public function delete($id){
        $leitura = leituraSensor::findOrFail($id);

        $leitura->delete();
        
        return redirect('leitura-sensor')->with('leituraSensors', leituraSensor::all());
    }
    
}
