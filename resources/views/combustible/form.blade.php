<div class="box box-info padding-1">
    <div class="box-body">
        
      
        <div class="form-group">
            {{ Form::label('nombreCombustibles') }}
            {{ Form::text('nombreCombustibles', $combustible->nombreCombustibles, ['class' => 'form-control' . ($errors->has('nombreCombustibles') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecombustibles']) }}
            {!! $errors->first('nombreCombustibles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>