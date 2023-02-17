@extends('layouts.app')

@section('template_title')
    {{ $tlicencia->name ?? 'Show Tlicencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tlicencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tlicencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtl:</strong>
                            {{ $tlicencia->idTL }}
                        </div>
                        <div class="form-group">
                            <strong>Nombretl:</strong>
                            {{ $tlicencia->nombreTL }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
