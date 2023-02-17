<div class="box box-info padding-1">
    <div class="box-body">
        
     
    <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id', $unidade , $motocicleta->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">OBLIGATORIO</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('FechaChequeoM', $motocicleta->FechaChequeoM, ['class' => 'form-control' . ($errors->has('FechaChequeoM') ? ' is-invalid' : ''), 'placeholder' => 'Fechachequeom']) }}
            {!! $errors->first('FechaChequeoM', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('Kilometraje', $motocicleta->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
            {!! $errors->first('Kilometraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Combustible: ') }}
            <select name="Combustible" id='Combustible' onchange='cambioUnidad();' required>
        <option value="">Seleccione:</option>
        <option value="0">0</option>
        <option value="1/4">1/4</option>
        <option value="1/2">1/2</option>
        <option value="FULL">FULL</option>
    </select>
            {!! $errors->first('Combustible', '<div class="invalid-feedback">:OBLIGATORIO</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Luz Baja: ') }}
            <select name="LuzBaja" id='LuzBaja' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzBaja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Luz Alta: ') }}
             <br/>
            <select name="LuzAlta" id='LuzAlta' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
        {!! $errors->first('LuzAlta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
           
        <div class="form-group">
            {{ Form::label('Luz Marcha: ') }}
            <br/>
            <select name="LuzMarcha" id='LuzMarcha' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzMarcha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Pito: ') }}
            <br/>
            <select name="Pito" id='Pito' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Pito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>

        <div class="form-group">
            {{ Form::label('Bateria: ') }}
            <br/>
            <select name="Bateria" id='Bateria' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Bateria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Nivel Refrigeracion: ') }}
            <br/>
            <select name="NivelRefrigeracion" id='NivelRefrigeracion' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('NivelRefrigeracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nivel Aceite: ') }}
            <br/>
            <select name="NivelAceite" id='NivelAceite' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('NivelAceite', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Asientos: ') }}
            <br/>
            <select name="Asientos" id='Asientos' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Asientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Permisos Circulacion: ') }}
            <br/>
            <select name="PermisosCirculacion" id='PermisosCirculacion' onchange='cambioUnidad();' required>
                <option value="Si">Si</option>
                <option value="No" selected>No</option> 
            </select>
            {!! $errors->first('PermisosCirculacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('RTV: ') }}
            <br/>
            <select name="RTV" id='RTV' onchange='cambioUnidad();' required>
                <option value="Si">Si</option>
                <option value="No" selected>No</option> 
            </select>
            {!! $errors->first('RTV', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Titulo Propiedad: ') }}
            <br/>
            <select name="TituloPropiedad" id='TituloPropiedad' onchange='cambioUnidad();' required>
                <option value="Si">Si</option>
                <option value="No" selected>No</option> 
            </select>
            {!! $errors->first('TituloPropiedad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Llanta Delantera: ') }}
            <br/>
            <select name="LlantaDelantera" id='LlantaDelantera' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LlantaDelantera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('LlantaTrasera') }}
            <br/>
            <select name="LlantaTrasera" id='LlantaTrasera' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
</select>
            {!! $errors->first('LlantaTrasera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Espejo Retrovisor Derecho: ') }}
            <br/>
            <select name="EspejoRetrovisorD" id='EspejoRetrovisorD' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
</select>
            {!! $errors->first('EspejoRetrovisorD', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Espejo Retrovisor Izquierdo: ') }}
            <br/>
            <select name="EspejoRetrovisori" id='EspejoRetrovisori' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
</select>
            {!! $errors->first('EspejoRetrovisori', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <br/>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('motocicletas.index') }}"> Atras</a>

    </div>
</div>