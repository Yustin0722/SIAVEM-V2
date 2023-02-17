@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Mostrar Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                      
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $empleado->departamento->nombreDepa }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $empleado->Puesto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->NombreEmple }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $empleado->Apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $empleado->Apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $empleado->FechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Cedúla:</strong>
                            {{ $empleado->Cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empleado->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correoinstitucional:</strong>
                            {{ $empleado->CorreoInstitucional }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Licencia:</strong>
                            {{ $empleado->tlicencia->nombreTL}}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $empleado->FechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Foto Licencia:</strong>
                            <img src="{{ asset('storage').'/'.$empleado->FotoLicencia }}" width="150" alt=""> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
