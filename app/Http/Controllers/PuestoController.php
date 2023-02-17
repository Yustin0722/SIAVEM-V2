<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use App\Models\Departamento;
use Illuminate\Http\Request;

/**
 * Class PuestoController
 * @package App\Http\Controllers
 */
class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = Puesto::paginate();

        return view('puesto.index', compact('puestos'))
            ->with('i', (request()->input('page', 1) - 1) * $puestos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puesto = new Puesto();
        $departamentos = Departamento::pluck('nombreDepa','idDepartamento'); 
        return view('puesto.create', compact('puesto','departamentos'));

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Puesto::$rules);

        $puesto = Puesto::create($request->all());

        return redirect()->route('puestos.index')
            ->with('success', 'Puesto creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idPuesto)
    {
        $puesto = Puesto::find($idPuesto);
    
        return view('puesto.show', compact('puesto','departamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idPuesto)
    {
        $puesto = Puesto::find($idPuesto);
        $departamentos = Departamento::pluck('nombreDepa','idDepartamento'); 
        return view('puesto.edit', compact('puesto','departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Puesto $puesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puesto $puesto)
    {
        request()->validate(Puesto::$rules);

        $puesto->update($request->all());

        return redirect()->route('puestos.index')
            ->with('success', 'Puesto editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idPuesto)
    {
        $puesto = Puesto::find($idPuesto)->delete();

        return redirect()->route('puestos.index')
            ->with('success', 'Puesto eliminado correctamente');
    }
}
