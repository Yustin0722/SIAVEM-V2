<?php

namespace App\Http\Controllers;

use App\Models\Combustible;
use Illuminate\Http\Request;

/**
 * Class CombustibleController
 * @package App\Http\Controllers
 */
class CombustibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combustibles = Combustible::paginate();

        return view('combustible.index', compact('combustibles'))
            ->with('i', (request()->input('page', 1) - 1) * $combustibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $combustible = new Combustible();
        return view('combustible.create', compact('combustible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Combustible::$rules);

        $combustible = Combustible::create($request->all());

        return redirect()->route('combustibles.index')
            ->with('success', 'Combustible created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $combustible = Combustible::find($id);

        return view('combustible.show', compact('combustible'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $combustible = Combustible::find($id);

        return view('combustible.edit', compact('combustible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Combustible $combustible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Combustible $combustible)
    {
        request()->validate(Combustible::$rules);

        $combustible->update($request->all());

        return redirect()->route('combustibles.index')
            ->with('success', 'Combustible updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $combustible = Combustible::find($id)->delete();

        return redirect()->route('combustibles.index')
            ->with('success', 'Combustible deleted successfully');
    }
}
