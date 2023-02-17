@extends('layouts.app')

@section('template_title')
    {{ $unidade->name ?? 'Show Unidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Unidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                      
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $unidade->categoria->nombre  }}
                        </div>
                        <div class="form-group">
                            <strong>Tracción:</strong>
                            {{ $unidade->traccione->nombreTraccion }}
                        </div>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $unidade->combustible->nombreCombustibles }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $unidade->estado->nombreEstados }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $unidade->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $unidade->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $unidade->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Estilo:</strong>
                            {{ $unidade->estilo }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $unidade->color }}
                        </div>
                        <div class="form-group">
                            <strong>Año fabricación:</strong>
                            {{ $unidade->ayoFabricacion }}
                        </div>
                        <div class="form-group">
                            <strong>Contratación:</strong>
                            {{ $unidade->contratacion }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Adquisitivo:</strong>
                            {{ $unidade->valorAdqui }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Hacienda:</strong>
                            {{ $unidade->valorHacienda }}
                        </div>
                        <div class="form-group">
                            <strong>RVT:</strong>
                            {{ $unidade->RVT }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $unidade->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
