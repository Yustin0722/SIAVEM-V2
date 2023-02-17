@extends('layouts.app')

@section('template_title')
    Update Formulario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Solicitud</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('formularios.update', $formulario->idFormularios ) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('formulario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

