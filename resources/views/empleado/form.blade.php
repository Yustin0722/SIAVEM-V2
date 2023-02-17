<div class="box box-info padding-1">
    <div class="box-body">
        
      
    <div class="form-group">
            {{ Form::label('departamento') }}
            {{ Form::select('departamento_id',$departamento,$empleado->departamento_id, ['class' => 'form-control' . ($errors->has('departamento_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('departamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Puesto') }}
            {{ Form::text('Puesto', $empleado->Puesto, ['class' => 'form-control' . ($errors->has('Puesto') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el nombre del puesto']) }}
            {!! $errors->first('Puesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('NombreEmple', $empleado->NombreEmple, ['class' => 'form-control' . ($errors->has('NombreEmple') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombreEmple', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer Apellido') }}
            {{ Form::text('Apellido1', $empleado->Apellido1, ['class' => 'form-control' . ($errors->has('Apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Digite su primer apellido']) }}
            {!! $errors->first('Apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(' Segundo Apellido') }}
            {{ Form::text('Apellido2', $empleado->Apellido2, ['class' => 'form-control' . ($errors->has('Apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Digite su segundo apellido']) }}
            {!! $errors->first('Apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Nacimiento') }}
            {{ Form::date('FechaNacimiento', $empleado->FechaNacimiento, ['class' => 'form-control' . ($errors->has('FechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('FechaNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedúla') }}
            {{ Form::text('Cedula', $empleado->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Digite su cedula']) }}
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $empleado->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Digite el numero de telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo Institucional') }}
            {{ Form::text('CorreoInstitucional', $empleado->CorreoInstitucional, ['class' => 'form-control' . ($errors->has('CorreoInstitucional') ? ' is-invalid' : ''), 'placeholder' => 'Digite el Correo Institucional']) }}
            {!! $errors->first('CorreoInstitucional', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>

</div>