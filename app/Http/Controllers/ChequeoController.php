<?php

namespace App\Http\Controllers;

use App\Models\Chequeo;
use App\Models\Unidade;
use Illuminate\Http\Request;

/**
 * Class ChequeoController
 * @package App\Http\Controllers
 */
class ChequeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chequeos = Chequeo::paginate();

        return view('chequeo.index', compact('chequeos'))
            ->with('i', (request()->input('page', 1) - 1) * $chequeos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chequeo = new Chequeo();
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('chequeo.create', compact('chequeo','unidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Chequeo::$rules);

        $chequeo = Chequeo::create($request->all());

        return redirect()->route('chequeos.index')
            ->with('success', 'Chequeo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chequeo = Chequeo::find($id);

        return view('chequeo.show', compact('chequeo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chequeo = Chequeo::find($id);
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('chequeo.edit', compact('chequeo','unidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chequeo $chequeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chequeo $chequeo)
    {
        request()->validate(Chequeo::$rules);

        $chequeo->update($request->all());

        return redirect()->route('chequeos.index')
            ->with('success', 'Chequeo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chequeo = Chequeo::find($id)->delete();

        return redirect()->route('chequeos.index')
            ->with('success', 'Chequeo deleted successfully');
    }
}
