<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use App\Models\Categoria;
use App\Models\Traccione;
use App\Models\Combustible;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AvisoRTVMail;
use Carbon\Carbon;
use App\Models\Preventivo;
use App\Models\Correctivo;

/**
 * Class UnidadeController
 * @package App\Http\Controllers
 */
class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidade::paginate();

        return view('unidade.index', compact('unidades'))
            ->with('i', (request()->input('page', 1) - 1) * $unidades->perPage());
    }

    public function avisoRTV()
    {

        $unidadesRTVVencido = [];

        $unidades = Unidade::get()->toArray();
        $count = count($unidades);

        for($i = 0; $i < $count; $i++){
            $cantidadDeDias = Carbon::parse(Carbon::now())->diffInDays($unidades[$i]['RVT']);
            if($cantidadDeDias <= 30){
                $unidadesRTVVencido[] =$unidades[$i];
            }
        }
        $countDos = count($unidadesRTVVencido);
        for ($a = 0; $a < $countDos; $a++) {

            $placa = $unidadesRTVVencido[$a]['placa'];
            $fecha = $unidadesRTVVencido[$a]['RVT'];
            $email = "da598298@gmail.com";
            $messages = "La unidad placa $placa se vence el rtv en la fecha $fecha.";
    
            Mail::to($email)->send(new AvisoRTVMail($email,$messages));
        }

        return redirect()->route('unidades.index')
            ->with('success', 'Aviso enviado correctamente!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidade = new Unidade();
        $categorias = Categoria::pluck('nombre','id'); 
        $tracciones = Traccione::pluck('nombreTraccion','idTraccion'); 
        $combustibles = Combustible::pluck('nombreCombustibles','idCombustibles');
        $estados = Estado::pluck('nombreEstados','idEstados');
        return view('unidade.create', compact('unidade','categorias','tracciones','combustibles','estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Unidade::$rules);

        $unidade = Unidade::create($request->all());

        return redirect()->route('unidades.index')
            ->with('success', 'Unidad creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unidade = Unidade::find($id);

        return view('unidade.show', compact('unidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidade = Unidade::find($id);
        $categorias = Categoria::pluck('nombre','id'); 
        $tracciones = Traccione::pluck('nombreTraccion','idTraccion'); 
        $combustibles = Combustible::pluck('nombreCombustibles','idCombustibles');
        $estados = Estado::pluck('nombreEstados','idEstados');
        return view('unidade.edit', compact('unidade','categorias','tracciones','combustibles','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Unidade $unidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidade $unidade)
    {
        request()->validate(Unidade::$rules);

        $unidade->update($request->all());

        return redirect()->route('unidades.index')
            ->with('success', 'Unidad editada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    { // validacion para evitar 
        $preventivo = Preventivo::where('unidad_id',$id)->get();
        $correctivo = Correctivo::where('unidad_id',$id)->get();
        if($preventivo->isEmpty() && $correctivo->isEmpty()){

            $unidade = Unidade::find($id)->delete();
            return redirect()->route('unidades.index')
            ->with('success', 'Unidad eliminada correctamente');

        }else{
            return redirect()->route('unidades.index')
            ->with('success', 'Unidad se encuentra en mantenimiento correctivo o preventivo');
        }
    }
}
