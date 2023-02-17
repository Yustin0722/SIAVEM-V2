<?php

namespace App\Http\Controllers;

use App\Models\Tallere;
use Illuminate\Http\Request;

/**
 * Class TallereController
 * @package App\Http\Controllers
 */
class TallereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres = Tallere::paginate();

        return view('tallere.index', compact('talleres'))
            ->with('i', (request()->input('page', 1) - 1) * $talleres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tallere = new Tallere();
        return view('tallere.create', compact('tallere'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tallere::$rules);

        $tallere = Tallere::create($request->all());

        return redirect()->route('talleres.index')
            ->with('success', 'Taller crear correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tallere = Tallere::find($id);

        return view('tallere.show', compact('tallere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tallere = Tallere::find($id);

        return view('tallere.edit', compact('tallere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tallere $tallere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tallere $tallere)
    {
        request()->validate(Tallere::$rules);

        $tallere->update($request->all());

        return redirect()->route('talleres.index')
            ->with('success', 'Tallere editar correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tallere = Tallere::find($id)->delete();

        return redirect()->route('talleres.index')
            ->with('success', 'Tallere eliminar correctamente');
    }
}
