@extends('layouts.app')

@section('template_title')
    Update Preventivo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Mantenimiento Preventivo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('preventivos.update', $preventivo->idPreventivo) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('preventivo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
