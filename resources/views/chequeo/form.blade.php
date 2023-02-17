<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id', $unidade, $chequeo->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha del Chequeo') }}
            {{ Form::date('FechaChequeo', $chequeo->FechaChequeo, ['class' => 'form-control' . ($errors->has('FechaChequeo') ? ' is-invalid' : ''), 'placeholder' => 'Fechachequeo']) }}
            {!! $errors->first('FechaChequeo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('Kilometraje', $chequeo->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
            {!! $errors->first('Kilometraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Combustible: ') }}

            <select name="Combustible" id='Combustible' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="0">0</option>
                <option value="1/4">1/4</option>
                <option value="1/2">1/2</option>
                <option value="FULL">FULL</option>
            </select>
            {!! $errors->first('Combustible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        
        <div class="form-group">
            {{ Form::label('Luz Baja: ') }}
            <select name="LuzBaja" id='LuzBaja' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzBaja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Luz Alta: ') }}

            <select name="LuzAlta" id='LuzAlta' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzAlta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Luz Marcha: ') }}

            <select name="LuzMarcha" id='LuzMarcha' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzMarcha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Luz Interior: ') }}
            <select name="LuzInterior" id='LuzInterior' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzInterior', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Luz Freno: ') }}

            <select name="LuzFreno" id='LuzFreno' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzFreno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Luces Intermitentes: ') }}

            <select name="Intermitentes" id='Intermitentes' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Intermitentes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Luz Parking: ') }}

            <select name="LuzParking" id='LuzParking' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LuzParking', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Alojenos: ') }}

            <select name="Alojenos" id='Alojenos' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Alojenos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Escobillas: ') }}

            <select name="Escobillas" id='Escobillas' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Escobillas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Extintor: ') }}

            <select name="Extintor" id='Extintor' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Extintor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Botiquin: ') }}

            <select name="Botiquin" id='Botiquin' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Botiquin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Triangulos: ') }}

            <select name="Triangulos" id='Triangulos' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Triangulos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Cinturon: ') }}

            <select name="Cinturon" id='Cinturon' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Cinturon', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Chapa Puerta: ') }}

            <select name="ChapaPuerta" id='ChapaPuerta' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('ChapaPuerta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Pito: ') }}

            <select name="Pito" id='Pito' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Pito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Parabrisas: ') }}

            <select name="Parabrisas" id='Parabrisas' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Parabrisas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Vidrios Laterales: ') }}

            <select name="VidriosLaterales" id='VidriosLaterales' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('VidriosLaterales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Climatizacion: ') }}

            <select name="Climatizacion" id='Climatizacion' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Climatizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Bateria: ') }}

            <select name="Bateria" id='Bateria' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Bateria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Nivel Refrigeracion: ') }}

            <select name="NivelRefrigeracion" id='NivelRefrigeracion' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('NivelRefrigeracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Nivel Aceite: ') }}

            <select name="NivelAceite" id='NivelAceite' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('NivelAceite', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Alfombras: ') }}

            <select name="Alfombras" id='Alfombras' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Alfombras', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Radio: ') }}

            <select name="Radio" id='Radio' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Radio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Asientos Delanteros: ') }}

            <select name="AsientosD" id='AsientosD' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('AsientosD', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Asientos Traseros: ') }}

            <select name="AsientosT" id='AsientosT' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('AsientosT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Permisos Circulacion: ') }}
            <select name="PermisosCirculacion" id='PermisosCirculacion' onchange='cambioUnidad();' required>
                <option value="Si">Si</option>
                <option value="No" selected>No</option>
            </select>
            {!! $errors->first('PermisosCirculacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('RTV: ') }}
            <select name="RTV" id='RTV' onchange='cambioUnidad();' required>
                <option value="Si">Si</option>
                <option value="No" selected>No</option>
            </select>
            {!! $errors->first('RTV', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Titulo Propiedad: ') }}
            <select name="TituloPropiedad" id='TituloPropiedad' onchange='cambioUnidad();' required>
                <option value="Si">Si</option>
                <option value="No" selected>No</option>
            </select>
            {!! $errors->first('TituloPropiedad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Llanta Delantera: ') }}

            <select name="LlantaDelantera" id='LlantaDelantera' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LlantaDelantera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Llanta Repuesto: ') }}

            <select name="LlantaRepuesto" id='LlantaRepuesto' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LlantaRepuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Llanta Trasera: ') }}

            <select name="LlantaTrasera" id='LlantaTrasera' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LlantaTrasera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Tuercas: ') }}
            <select name="Tuercas" id='Tuercas' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Tuercas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Espejo Retrovisor: ') }}
            <select name="EspejoRetrovisor" id='EspejoRetrovisor' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('EspejoRetrovisor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Gata: ') }}
            <select name="Gata" id='Gata' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Gata', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Llave Rana: ') }}
            <select name="LlaveRana" id='LlaveRana' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('LlaveRana', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Lingas: ') }}
            <select name="Lingas" id='Lingas' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Lingas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Juego Llaves: ') }}
            <select name="JuegoLlaves" id='JuegoLlaves' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('JuegoLlaves', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Bumper: ') }}
            <select name="Bumper" id='Bumper' onchange='cambioUnidad();' required>
                <option value="Bueno">Bueno</option>
                <option value="Regular" selected>Regular</option>
                <option value="Malo">Malo</option>
            </select>
            {!! $errors->first('Bumper', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br />
</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a class="btn btn-danger" href="{{ route('chequeos.index') }}"> Atras</a>

</div>
</div>