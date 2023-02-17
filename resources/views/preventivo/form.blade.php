<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id',$unidade ,$preventivo->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('taller_id', $talleres ,$preventivo->taller_id, ['class' => 'form-control' . ($errors->has('taller_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('taller_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaMant') }}
            {{ Form::date('FechaMant', $preventivo->FechaMant, ['class' => 'form-control' . ($errors->has('FechaMant') ? ' is-invalid' : ''), 'placeholder' => 'Digite la fecha de mantenimiento']) }}
            {!! $errors->first('FechaMant', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo Mantenimiento') }}
            {{ Form::text('tipoMante', $preventivo->tipoMante, ['class' => 'form-control' . ($errors->has('tipoMante') ? ' is-invalid' : ''), 'placeholder' => 'Digite el tipo de mantenimiento']) }}
            {!! $errors->first('tipoMante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horimetro') }}
            {{ Form::text('Horimetro', $preventivo->Horimetro, ['class' => 'form-control' . ($errors->has('Horimetro') ? ' is-invalid' : ''), 'placeholder' => 'Digite el Horimetro']) }}
            {!! $errors->first('Horimetro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proximo Servicio') }}
            {{ Form::text('ProximoSer', $preventivo->ProximoSer, ['class' => 'form-control' . ($errors->has('ProximoSer') ? ' is-invalid' : ''), 'placeholder' => 'Digite el proximo servicio']) }}
            {!! $errors->first('ProximoSer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Montó') }}
            {{ Form::text('Monto', $preventivo->Monto, ['class' => 'form-control' . ($errors->has('Monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('Monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('preventivos.index') }}"> Atras</a>

    </div>
</div>