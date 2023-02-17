<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('nombreTraccion') }}
            {{ Form::text('nombreTraccion', $traccione->nombreTraccion, ['class' => 'form-control' . ($errors->has('nombreTraccion') ? ' is-invalid' : ''), 'placeholder' => 'Nombretraccion']) }}
            {!! $errors->first('nombreTraccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>