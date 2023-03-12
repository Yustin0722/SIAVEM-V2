<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use App\Models\Tlicencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\avisoLicenciaMail;
use Carbon\Carbon;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    public function avisoLicencia()
    {
        //declaramos un array vacio para llenar con licencias pronto a vencer
        $empleadosLicenciaVencida = [];
        //Obtenemos todos los empleados
        $empleado = Empleado::get()->toArray();
        //contamos el la cantidad del array de empleados en total
        $count = count($empleado);
        //Hacemos un recorrido
        for($i = 0; $i < $count; $i++){
            $cantidadDeDias = Carbon::parse(Carbon::now())->diffInDays($empleado[$i]['FechaVencimiento']);
            if($cantidadDeDias <= 30){
                //Guardamos en el array las licencias a vencer
                $empleadosLicenciaVencida[0] =$empleado[$i];
            }
        }

        $countDos = count($empleadosLicenciaVencida);
        for ($a = 0; $a < $countDos; $a++) {

            $email = $empleadosLicenciaVencida[$a]['CorreoInstitucional'];
            $cedula = $empleadosLicenciaVencida[$a]['Cedula'];
            $nombre = $empleadosLicenciaVencida[$a]['NombreEmple'];
            $apellido1 = $empleadosLicenciaVencida[$a]['Apellido1'];
            $apellido2 = $empleadosLicenciaVencida[$a]['Apellido2'];
            $fecha = $empleadosLicenciaVencida[$a]['FechaVencimiento'];


            $messages = "Estimado $nombre $apellido1 $apellido2 con cedula $cedula le avisamos que su licencia esta pronto a vencer, su fecha de vencimiento es $fecha.";
    
            Mail::to($email)->send(new avisoLicenciaMail($email,$messages));

        }

        return redirect()->route('empleados.index')
            ->with('success', 'Aviso enviado correctamente!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleado = new Empleado();
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $tlicencias = Tlicencia::pluck('nombreTL','idTL'); 
        return view('empleado.create', compact('empleado','departamento','tlicencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $empleado  = request()->except('_token');

        if($request->hasFile('FotoLicencia')){


            $file = $request->file('FotoLicencia');
            $filename = "$request->Cedula.png"; 
            $file->storeAs('/empleado/', $filename);

            $empleado ['FotoLicencia'] = $filename;
            
         } 
        Empleado::insert($empleado);

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $tlicencias = Tlicencia::pluck('nombreTL','idTL');
        return view('empleado.edit', compact('empleado','departamento','tlicencias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       $empleado = request()->except(['_token','_method']);

       $empleado = Empleado::findOrFail($id);

       $filename = "";

       $currentFoto = $empleado->imagen;

       $file_path = public_path().'/empleado/'.$empleado->FotoLicencia;
       if($request->FotoLicencia == ""){
        if (file_exists($file_path) && $empleado->FotoLicencia != "") {
            unlink($file_path);
        }
       }
       if($request->FotoLicencia != $currentFoto){
        
        if (file_exists($file_path) && $empleado->FotoLicencia != "") {
            unlink($file_path);
        }

        $file = $request->file('FotoLicencia');
        $filename = "$empleado->Cedula.png"; 
        $file->storeAs('/empleado/', $filename);

            
     }

     $empleado->departamento_id = $request->departamento_id;
     $empleado->Puesto = $request->Puesto;
     $empleado->NombreEmple = $request->NombreEmple;
     $empleado->Apellido1 = $request->Apellido1;
     $empleado->Apellido2 = $request->Apellido2;
     $empleado->FechaNacimiento = $request->FechaNacimiento;
     $empleado->Cedula = $request->Cedula;
     $empleado->Telefono = $request->Telefono;
     $empleado->CorreoInstitucional = $request->CorreoInstitucional;
     $empleado->TL_id = $request->TL_id;
     $empleado->FechaVencimiento = $request->FechaVencimiento;
     $empleado->FotoLicencia = $filename;
     $empleado->update();


        return redirect()->route('empleados.index')
            ->with('success', 'Empleado editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $empleado = Empleado::FindOrFail($id);

        $file_path = storage_path().'/app/public/empleado/'.$empleado->FotoLicencia;

        if (file_exists("$file_path") and !empty($empleado->FotoLicencia)) {
            unlink($file_path);
        }

        $empleado->delete();

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado eliminado correctamente');
    }
}