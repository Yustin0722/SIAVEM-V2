<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::select('categoria_id',$categorias ,$unidade->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tracción') }}
            {{ Form::select('tracciones_id',$tracciones,$unidade->tracciones_id, ['class' => 'form-control' . ($errors->has('tracciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('tracciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('combustible') }}
            {{ Form::select('combustibles_id', $combustibles ,$unidade->combustibles_id, ['class' => 'form-control' . ($errors->has('combustibles_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('combustibles_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estados_id',  $estados,$unidade->estados_id, ['class' => 'form-control' . ($errors->has('estados_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('estados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $unidade->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $unidade->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $unidade->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estilo') }}
            {{ Form::text('estilo', $unidade->estilo, ['class' => 'form-control' . ($errors->has('estilo') ? ' is-invalid' : ''), 'placeholder' => 'Estilo']) }}
            {!! $errors->first('estilo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $unidade->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año Fabricación') }}
            {{ Form::text('ayoFabricacion', $unidade->ayoFabricacion, ['class' => 'form-control' . ($errors->has('ayoFabricacion') ? ' is-invalid' : ''), 'placeholder' => 'Digite con numeros el año de fabricacion']) }}
            {!! $errors->first('ayoFabricacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contratación') }}
            {{ Form::text('contratacion', $unidade->contratacion, ['class' => 'form-control' . ($errors->has('contratacion') ? ' is-invalid' : ''), 'placeholder' => 'Digite la cantidad de la contracion o 0 si no cuenta']) }}
            {!! $errors->first('contratacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor Adquisitivo') }}
            {{ Form::text('valorAdqui', $unidade->valorAdqui, ['class' => 'form-control' . ($errors->has('valorAdqui') ? ' is-invalid' : ''), 'placeholder' => 'Digite con numero la cantidad']) }}
            {!! $errors->first('valorAdqui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor Hacienda') }}
            {{ Form::text('valorHacienda', $unidade->valorHacienda, ['class' => 'form-control' . ($errors->has('valorHacienda') ? ' is-invalid' : ''), 'placeholder' => 'Digite con numero la cantidad']) }}
            {!! $errors->first('valorHacienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RVT') }}
            {{ Form::date('RVT', $unidade->RVT, ['class' => 'form-control' . ($errors->has('RVT') ? ' is-invalid' : ''), 'placeholder' => 'Rvt']) }}
            {!! $errors->first('RVT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcion', $unidade->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion de la Unidad']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('unidades.index') }}"> Atrás</a>

    </div>
</div>