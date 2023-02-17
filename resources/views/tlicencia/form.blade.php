<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreTL') }}
            {{ Form::text('nombreTL', $tlicencia->nombreTL, ['class' => 'form-control' . ($errors->has('nombreTL') ? ' is-invalid' : ''), 'placeholder' => 'Nombretl']) }}
            {!! $errors->first('nombreTL', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>