<div class="box box-info padding-1">
    <div class="box-body">
     
        <div class="form-group">
            {{ Form::label('nombreEstados') }}
            {{ Form::text('nombreEstados', $estado->nombreEstados, ['class' => 'form-control' . ($errors->has('nombreEstados') ? ' is-invalid' : ''), 'placeholder' => 'Nombreestados']) }}
            {!! $errors->first('nombreEstados', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>