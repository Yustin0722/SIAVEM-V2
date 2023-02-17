@extends('layouts.app')

@section('template_title')
    {{ $traccione->name ?? 'Show Traccione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Traccione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tracciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtraccion:</strong>
                            {{ $traccione->idTraccion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombretraccion:</strong>
                            {{ $traccione->nombreTraccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
