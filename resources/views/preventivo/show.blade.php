@extends('layouts.app')

@section('template_title')
    {{ $preventivo->name ?? 'Show Preventivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Mantenimiento Preventivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preventivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idpreventivo:</strong>
                            {{ $preventivo->idPreventivo }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad Id:</strong>
                            {{ $preventivo->unidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Taller Id:</strong>
                            {{ $preventivo->taller_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechamant:</strong>
                            {{ $preventivo->FechaMant }}
                        </div>
                        <div class="form-group">
                            <strong>Tipomante:</strong>
                            {{ $preventivo->tipoMante }}
                        </div>
                        <div class="form-group">
                            <strong>Horimetro:</strong>
                            {{ $preventivo->Horimetro }}
                        </div>
                        <div class="form-group">
                            <strong>Proximoser:</strong>
                            {{ $preventivo->ProximoSer }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $preventivo->Monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
