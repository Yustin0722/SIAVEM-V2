<?php

namespace App\Http\Controllers;
use App\Models\Unidade;
use App\Models\Motocicleta;
use Illuminate\Http\Request;


/**
 * Class MotocicletaController
 * @package App\Http\Controllers
 */
class MotocicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motocicletas = Motocicleta::paginate();

        return view('motocicleta.index', compact('motocicletas'))
            ->with('i', (request()->input('page', 1) - 1) * $motocicletas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motocicleta = new Motocicleta();
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('motocicleta.create', compact('motocicleta','unidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Motocicleta::$rules);

        $motocicleta = Motocicleta::create($request->all());

        return redirect()->route('motocicletas.index')
            ->with('success', 'Motocicleta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motocicleta = Motocicleta::find($id);

        return view('motocicleta.show', compact('motocicleta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motocicleta = Motocicleta::find($id);
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('motocicleta.edit', compact('motocicleta','unidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Motocicleta $motocicleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motocicleta $motocicleta)
    {
        request()->validate(Motocicleta::$rules);

        $motocicleta->update($request->all());

        return redirect()->route('motocicletas.index')
            ->with('success', 'Motocicleta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $motocicleta = Motocicleta::find($id)->delete();

        return redirect()->route('motocicletas.index')
            ->with('success', 'Motocicleta deleted successfully');
    }
}
