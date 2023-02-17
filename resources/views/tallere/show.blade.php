@extends('layouts.app')

@section('template_title')
    {{ $tallere->name ?? 'Show Tallere' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Taller</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('talleres.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtaller:</strong>
                            {{ $tallere->idTaller }}
                        </div>
                        <div class="form-group">
                            <strong>Contratacion:</strong>
                            {{ $tallere->Contratacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombretaller:</strong>
                            {{ $tallere->NombreTaller }}
                        </div>
                        <div class="form-group">
                            <strong>Direcciontaller:</strong>
                            {{ $tallere->DireccionTaller }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcionesp:</strong>
                            {{ $tallere->DescripcionEsp }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaventaller:</strong>
                            {{ $tallere->FechaVenTaller }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
