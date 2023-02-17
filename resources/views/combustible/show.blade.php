@extends('layouts.app')

@section('template_title')
    {{ $combustible->name ?? 'Show Combustible' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Combustible</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('combustibles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcombustibles:</strong>
                            {{ $combustible->idCombustibles }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrecombustibles:</strong>
                            {{ $combustible->nombreCombustibles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
