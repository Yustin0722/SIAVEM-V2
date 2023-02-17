@extends('layouts.app')

@section('template_title')
Create Empleado
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Agregar Empleado</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('empleados.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('empleado.form')
                        <div id="content" style="display: none;">
                            <div class="form-group">
                                {{ Form::label('Tipo de Licencia') }}
                                {{ Form::select('TL_id',$tlicencias,$empleado->TL_id,['class' => 'form-control' . ($errors->has('TL_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
                                {!! $errors->first('TL_id', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Fecha Vencimiento') }}
                                {{ Form::date('FechaVencimiento', $empleado->FechaVencimiento, ['class' => 'form-control' . ($errors->has('FechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
                                {!! $errors->first('FechaVencimiento', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <br>
                            <label for="FotoLicencia">Foto Licencia: </label>
                            <br/>
                            <img src="{{ asset('storage').'/'.$empleado->FotoLicencia }}" width="300" alt="">
                            <input type="file" name="FotoLicencia" value="" id="FotoLicencia">
                            <br>

                            </br>
                        </div>
                        <label for="">Licencia <input type="checkbox" name="FotoLicencia" id="check" value="" onchange="javascript:showContent()" /> </label>
                        


                        
                        <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a class="btn btn-danger" href="{{ route('empleados.index') }}"> Atrás</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");

        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
</script>
@endsection