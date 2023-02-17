<?php

namespace App\Http\Controllers;

use App\Models\Traccione;
use Illuminate\Http\Request;

/**
 * Class TraccioneController
 * @package App\Http\Controllers
 */
class TraccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracciones = Traccione::paginate();

        return view('traccione.index', compact('tracciones'))
            ->with('i', (request()->input('page', 1) - 1) * $tracciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $traccione = new Traccione();
        return view('traccione.create', compact('traccione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Traccione::$rules);

        $traccione = Traccione::create($request->all());

        return redirect()->route('tracciones.index')
            ->with('success', 'Traccione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $traccione = Traccione::find($id);

        return view('traccione.show', compact('traccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traccione = Traccione::find($id);

        return view('traccione.edit', compact('traccione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Traccione $traccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traccione $traccione)
    {
        request()->validate(Traccione::$rules);

        $traccione->update($request->all());

        return redirect()->route('tracciones.index')
            ->with('success', 'Traccione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $traccione = Traccione::find($id)->delete();

        return redirect()->route('tracciones.index')
            ->with('success', 'Traccione deleted successfully');
    }
}
