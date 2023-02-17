@extends('layouts.app')

@section('template_title')
    Update Traccione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Traccione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tracciones.update', $traccione->idTraccion) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('traccione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
