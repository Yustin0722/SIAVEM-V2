<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::select('depar_id', $departamento,$formulario->depar_id, ['class' => 'form-control' . ($errors->has('depar_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('depar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Objetivo') }}
            {{ Form::text('Objetivo', $formulario->Objetivo, ['class' => 'form-control' . ($errors->has('Objetivo') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el objetivo de la gira']) }}
            {!! $errors->first('Objetivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Numero Personas') }}
            {{ Form::text('NumePersonas', $formulario->NumePersonas, ['class' => 'form-control' . ($errors->has('NumePersonas') ? ' is-invalid' : ''), 'placeholder' => 'Numero de personas']) }}
            {!! $errors->first('NumePersonas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Fecha Salida') }}
            {{ Form::date('FechaSalida', $formulario->FechaSalida, ['class' => 'form-control' . ($errors->has('FechaSalida') ? ' is-invalid' : ''), 'placeholder' => 'Fechasalida']) }}
            {!! $errors->first('FechaSalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora Salida') }}
            {{ Form::time('HoraS', $formulario->HoraS, ['class' => 'form-control' . ($errors->has('HoraS') ? ' is-invalid' : ''), 'placeholder' => 'Horas']) }}
            {!! $errors->first('HoraS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Regreso') }}
            {{ Form::date('FechaRegreso', $formulario->FechaRegreso, ['class' => 'form-control' . ($errors->has('FechaRegreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecharegreso']) }}
            {!! $errors->first('FechaRegreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora Regreso') }}
            {{ Form::time('HoraR', $formulario->HoraR, ['class' => 'form-control' . ($errors->has('HoraR') ? ' is-invalid' : ''), 'placeholder' => 'Horar']) }}
            {!! $errors->first('HoraR', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Responsable de la Gira') }}
            {{ Form::select('emple_id',$empleados ,$formulario->emple_id, ['class' => 'form-control' . ($errors->has('emple_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('emple_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Destino') }}
            {{ Form::text('Lugar', $formulario->Lugar, ['class' => 'form-control' . ($errors->has('Lugar') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el provincia, canton y distrito']) }}
            {!! $errors->first('Lugar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vehiculo') }}
            {{ Form::select('categoria_id',$categorias,$formulario->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecione un tipo de vehiculo']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Itinerario') }}
            {{ Form::text('Itinerario', $formulario->Itinerario, ['class' => 'form-control' . ($errors->has('Itinerario') ? ' is-invalid' : ''), 'placeholder' => 'Itinerario']) }}
            {!! $errors->first('Itinerario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('chofer') }}
            {{ Form::select('chofer',$empleados  ,$formulario->chofer, ['class' => 'form-control' . ($errors->has('chofer') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('chofer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('Observaciones', $formulario->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
   </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('formularios.index') }}"> Atras</a>

    </div>
</div>