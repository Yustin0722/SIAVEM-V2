<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código de Contratación') }}
            {{ Form::text('Contratacion', $tallere->Contratacion, ['class' => 'form-control' . ($errors->has('Contratacion') ? ' is-invalid' : ''), 'placeholder' => 'Digite el codigo de contratacion']) }}
            {!! $errors->first('Contratacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Taller') }}
            {{ Form::text('NombreTaller', $tallere->NombreTaller, ['class' => 'form-control' . ($errors->has('NombreTaller') ? ' is-invalid' : ''), 'placeholder' => 'Digite el nombre del taller']) }}
            {!! $errors->first('NombreTaller', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('DireccionTaller', $tallere->DireccionTaller, ['class' => 'form-control' . ($errors->has('DireccionTaller') ? ' is-invalid' : ''), 'placeholder' => 'Digite la direccion del taller']) }}
            {!! $errors->first('DireccionTaller', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción de la Especialidad') }}
            {{ Form::text('DescripcionEsp', $tallere->DescripcionEsp, ['class' => 'form-control' . ($errors->has('DescripcionEsp') ? ' is-invalid' : ''), 'placeholder' => 'Digite la descripcion de la especialidad']) }}
            {!! $errors->first('DescripcionEsp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Vencimiento Contrato') }}
            {{ Form::date('FechaVenTaller', $tallere->FechaVenTaller, ['class' => 'form-control' . ($errors->has('FechaVenTaller') ? ' is-invalid' : ''), 'placeholder' => 'Digite la fecha de vencimiento del contrato']) }}
            {!! $errors->first('FechaVenTaller', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('talleres.index') }}"> Atrás</a>

    </div>
</div>