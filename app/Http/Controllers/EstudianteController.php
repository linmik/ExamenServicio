<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Materia;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.estudianteIndex',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.estudianteform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['string','required'],
            'codigo' => ['integer','unique:estudiantes','required'],
            'carrera' => ['string'],
            'creditos' => ['integer','min:0'],
            'correo' => ['string','unique:estudiantes']
        ]);

        Estudiante::create($request->all());

        return redirect()->route('Estudiante.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $Estudiante)
    {
        return view('estudiante.estudianteShow',compact('Estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $Estudiante)
    {
        return view('estudiante.estudianteform',compact('Estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $Estudiante)
    {
        $request->validate([
            'nombre' => ['string','required'],
            'codigo' => ['integer','required'],
            'carrera' => ['string'],
            'creditos' => ['integer','min:0'],
            'correo' => ['string']
        ]);

        Estudiante::where('id',$Estudiante->id)->update($request->except('_token','_method'));

        return redirect()->route('Estudiante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $Estudiante)
    {
        $Estudiante->delete();
        return redirect()->route('Estudiante.index');
    }

    public function agregarMateria(Request $request,Estudiante $Estudiante)
    {
        $materia = Materia::where('id',$request->only("id_m"))->first();
        if (isset($materia)){
            $Estudiante->materias()->attach($request->only("id_m"));
        }
        return redirect()->route('Estudiante.show',[$Estudiante]);
    }
}
