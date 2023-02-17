<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::select('placa', $vehiculo,$formulario->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('Estado', array('1' => 'Aprobado', '0' => 'Rechazado'), $formulario->estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
   </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('formularios.index') }}"> Atras</a>

    </div>
</div>