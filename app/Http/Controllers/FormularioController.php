<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Categoria;
use App\Models\Departamento;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GiraMail;
use Illuminate\Support\Str;
use App\Models\Unidade;
use PDF;

/**
 * Class FormularioController
 * @package App\Http\Controllers
 */
class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formularios = Formulario::paginate(10);

        return view('formulario.index', compact('formularios'));
           // ->with('i', (request()->input('page', 1) - 1) * $formularios->perPage());
    }
    public function generarPDF($id){
        

        $info = Formulario::where('idFormularios',$id)->get();

        $data = [
            'title' => 'Solicitud de Gira',
            'date' => date('m/d/Y'),
            'info' => $info
        ]; 
            
        $pdf = PDF::loadView('formulario.PDF', $data);
     
        return $pdf->download('Solicitud de gira.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formulario = new Formulario();
        $categorias = Categoria::pluck('nombre','id');
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $empleados = Empleado::selectRaw('CONCAT(Cedula," ",NombreEmple," ",Apellido1," ",Apellido2) AS Cedula, idEmpleados')->pluck('Cedula','idEmpleados');

        
        return view('formulario.create', compact('formulario','categorias','departamento','empleados'));
    }

    public function vistaEstado($idSolicitud,$token){

        $formulario = Formulario::find($idSolicitud);

        $vehiculo = Unidade::selectRaw('CONCAT(placa) AS placa, idUnidad')->where('categoria_id', $formulario->categoria_id)->pluck('placa','idUnidad');

        if( $formulario->token == $token){

            return view('formulario.estado', compact('formulario','vehiculo'));

        }else{
            return redirect()->route('formularios.index')
            ->with('success', 'Token es distinto al de la solicitud.');
        }
        
    }

    public function respuestaSolicitud(Request $request, $id){

        $placa = Unidade::find($request->placa);

        $formulario = Formulario::find($id);

        if($request->Estado == 1){
            $formulario['estado'] = $request->Estado;
            $formulario['placa'] = $placa->placa;
            $formulario['token'] = "";
            $formulario->update();
        }
        if($request->Estado == 0){
            $formulario['estado'] = $request->Estado;
            $formulario['token'] = "";
            $formulario->update();
        }
        return redirect()->route('formularios.index')
        ->with('success', 'Formulario editado correctamente');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = Str::random(30);
        $url = $request->root();
        request()->validate(Formulario::$rules);
        $request['token'] = $token;
        $formulario = Formulario::create($request->all());
        $responsable = Empleado::find($request->emple_id);
        $departamento = Departamento::find($request->depar_id);
        $unidad = Categoria::find($request->categoria_id);
        $idFormulario = $formulario->idFormularios;


        $newLink = "$url/estado/$idFormulario/$token";
        $email = "da598298@gmail.com";
        $messages = "Solicitud realizada por el departamento  $departamento->nombreDepa, a cargo del director $responsable->NombreEmple $responsable->Apellido1 $responsable->Apellido2 con el numero de cedula $responsable->Cedula, solicito una unidad tipo $unidad->nombre, objetivo de la gira $formulario->Objetivo, personas $formulario->NumePersonas, fechas de gira $formulario->FechaSalida 
        hora de salida $formulario->HoraS, fecha de regreso $formulario->FechaRegreso, hora de regreso $formulario->HoraR, destino $formulario->Lugar, dar respuesta a la solicitud en el siguiente link";
        Mail::to($email)->send(new GiraMail($email,$messages,$newLink));

        return redirect()->route('formularios.index')
            ->with('success', 'Solicitud enviada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulario = Formulario::find($id);

        return view('formulario.show', compact('formulario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulario = Formulario::find($id);
        $categorias = Categoria::pluck('nombre','id');
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $empleados = Empleado::pluck('Cedula','idEmpleados');
        return view('formulario.edit', compact('formulario','categorias','departamento','empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Formulario $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        request()->validate(Formulario::$rules);

        $formulario->update($request->all());

        return redirect()->route('formularios.index')
            ->with('success', 'Formulario editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formulario = Formulario::find($id)->delete();

        return redirect()->route('formularios.index')
            ->with('success', 'Formulario eliminado correctamente');
    }
}