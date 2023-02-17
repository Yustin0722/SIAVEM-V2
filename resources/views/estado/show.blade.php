@extends('layouts.app')

@section('template_title')
    {{ $estado->name ?? 'Show Estado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idestados:</strong>
                            {{ $estado->idEstados }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreestados:</strong>
                            {{ $estado->nombreEstados }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
