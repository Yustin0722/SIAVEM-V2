@extends('layouts.app')

@section('template_title')
    {{ $puesto->name ?? 'Show Puesto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Puesto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('puestos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                       
                        <div class="form-group">
                            <strong>Nombre Puesto:</strong>
                            {{ $puesto->nombrePuesto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
