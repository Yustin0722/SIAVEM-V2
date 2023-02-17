@extends('layouts.app')

@section('template_title')
    {{ $correctivo->name ?? 'Show Correctivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Correctivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('correctivos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcorrectivo:</strong>
                            {{ $correctivo->idCorrectivo }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad Id:</strong>
                            {{ $correctivo->unidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Taller Id:</strong>
                            {{ $correctivo->taller_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechasalida:</strong>
                            {{ $correctivo->FechaSalida }}
                        </div>
                        <div class="form-group">
                            <strong>Fechareingreso:</strong>
                            {{ $correctivo->FechaReingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Horimetro:</strong>
                            {{ $correctivo->Horimetro }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $correctivo->Detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $correctivo->Monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
