<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id', $unidade , $correctivo->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('taller_id',$talleres ,  $correctivo->taller_id, ['class' => 'form-control' . ($errors->has('taller_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('taller_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Salida') }}
            {{ Form::date('FechaSalida',  $correctivo->FechaSalida, ['class' => 'form-control' . ($errors->has('FechaSalida') ? ' is-invalid' : ''), 'placeholder' => 'Digite la fecha de salida']) }}
            {!! $errors->first('FechaSalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Reingreso') }}
            {{ Form::date('FechaReingreso',  $correctivo->FechaReingreso, ['class' => 'form-control' . ($errors->has('FechaReingreso') ? ' is-invalid' : ''), 'placeholder' => 'Digite la fecha de ingreso']) }}
            {!! $errors->first('FechaReingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horimetro') }}
            {{ Form::text('Horimetro', $correctivo->Horimetro, ['class' => 'form-control' . ($errors->has('Horimetro') ? ' is-invalid' : ''), 'placeholder' => 'Digite el horimetro']) }}
            {!! $errors->first('Horimetro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Detalle') }}
            {{ Form::text('Detalle', $correctivo->Detalle, ['class' => 'form-control' . ($errors->has('Detalle') ? ' is-invalid' : ''), 'placeholder' => 'Digite el detalle']) }}
            {!! $errors->first('Detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Montó') }}
            {{ Form::text('Monto', $correctivo->Monto, ['class' => 'form-control' . ($errors->has('Monto') ? ' is-invalid' : ''), 'placeholder' => 'Digite el monto']) }}
            {!! $errors->first('Monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('correctivos.index') }}"> Atrás</a>

    </div>
</div>