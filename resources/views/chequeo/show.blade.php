@extends('layouts.app')

@section('template_title')
    {{ $chequeo->name ?? 'Show Chequeo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Chequeo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chequeos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idchequeos:</strong>
                            {{ $chequeo->idchequeos }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad Id:</strong>
                            {{ $chequeo->unidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechachequeo:</strong>
                            {{ $chequeo->FechaChequeo }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $chequeo->Kilometraje }}
                        </div>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $chequeo->Combustible }}
                        </div>
                        <div class="form-group">
                            <strong>Luzbaja:</strong>
                            {{ $chequeo->LuzBaja }}
                        </div>
                        <div class="form-group">
                            <strong>Luzalta:</strong>
                            {{ $chequeo->LuzAlta }}
                        </div>
                        <div class="form-group">
                            <strong>Luzmarcha:</strong>
                            {{ $chequeo->LuzMarcha }}
                        </div>
                        <div class="form-group">
                            <strong>Luzinterior:</strong>
                            {{ $chequeo->LuzInterior }}
                        </div>
                        <div class="form-group">
                            <strong>Luzfreno:</strong>
                            {{ $chequeo->LuzFreno }}
                        </div>
                        <div class="form-group">
                            <strong>Intermitentes:</strong>
                            {{ $chequeo->Intermitentes }}
                        </div>
                        <div class="form-group">
                            <strong>Luzparking:</strong>
                            {{ $chequeo->LuzParking }}
                        </div>
                        <div class="form-group">
                            <strong>Alojenos:</strong>
                            {{ $chequeo->Alojenos }}
                        </div>
                        <div class="form-group">
                            <strong>Escobillas:</strong>
                            {{ $chequeo->Escobillas }}
                        </div>
                        <div class="form-group">
                            <strong>Extintor:</strong>
                            {{ $chequeo->Extintor }}
                        </div>
                        <div class="form-group">
                            <strong>Botiquin:</strong>
                            {{ $chequeo->Botiquin }}
                        </div>
                        <div class="form-group">
                            <strong>Triangulos:</strong>
                            {{ $chequeo->Triangulos }}
                        </div>
                        <div class="form-group">
                            <strong>Cinturon:</strong>
                            {{ $chequeo->Cinturon }}
                        </div>
                        <div class="form-group">
                            <strong>Chapapuerta:</strong>
                            {{ $chequeo->ChapaPuerta }}
                        </div>
                        <div class="form-group">
                            <strong>Pito:</strong>
                            {{ $chequeo->Pito }}
                        </div>
                        <div class="form-group">
                            <strong>Parabrisas:</strong>
                            {{ $chequeo->Parabrisas }}
                        </div>
                        <div class="form-group">
                            <strong>Vidrioslaterales:</strong>
                            {{ $chequeo->VidriosLaterales }}
                        </div>
                        <div class="form-group">
                            <strong>Climatizacion:</strong>
                            {{ $chequeo->Climatizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Bateria:</strong>
                            {{ $chequeo->Bateria }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelrefrigeracion:</strong>
                            {{ $chequeo->NivelRefrigeracion }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelaceite:</strong>
                            {{ $chequeo->NivelAceite }}
                        </div>
                        <div class="form-group">
                            <strong>Alfombras:</strong>
                            {{ $chequeo->Alfombras }}
                        </div>
                        <div class="form-group">
                            <strong>Radio:</strong>
                            {{ $chequeo->Radio }}
                        </div>
                        <div class="form-group">
                            <strong>Asientosd:</strong>
                            {{ $chequeo->AsientosD }}
                        </div>
                        <div class="form-group">
                            <strong>Asientost:</strong>
                            {{ $chequeo->AsientosT }}
                        </div>
                        <div class="form-group">
                            <strong>Permisoscirculacion:</strong>
                            {{ $chequeo->PermisosCirculacion }}
                        </div>
                        <div class="form-group">
                            <strong>Rtv:</strong>
                            {{ $chequeo->RTV }}
                        </div>
                        <div class="form-group">
                            <strong>Titulopropiedad:</strong>
                            {{ $chequeo->TituloPropiedad }}
                        </div>
                        <div class="form-group">
                            <strong>Llantadelantera:</strong>
                            {{ $chequeo->LlantaDelantera }}
                        </div>
                        <div class="form-group">
                            <strong>Llantarepuesto:</strong>
                            {{ $chequeo->LlantaRepuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Llantatrasera:</strong>
                            {{ $chequeo->LlantaTrasera }}
                        </div>
                        <div class="form-group">
                            <strong>Tuercas:</strong>
                            {{ $chequeo->Tuercas }}
                        </div>
                        <div class="form-group">
                            <strong>Espejoretrovisor:</strong>
                            {{ $chequeo->EspejoRetrovisor }}
                        </div>
                        <div class="form-group">
                            <strong>Gata:</strong>
                            {{ $chequeo->Gata }}
                        </div>
                        <div class="form-group">
                            <strong>Llaverana:</strong>
                            {{ $chequeo->LlaveRana }}
                        </div>
                        <div class="form-group">
                            <strong>Lingas:</strong>
                            {{ $chequeo->Lingas }}
                        </div>
                        <div class="form-group">
                            <strong>Juegollaves:</strong>
                            {{ $chequeo->JuegoLlaves }}
                        </div>
                        <div class="form-group">
                            <strong>Bumper:</strong>
                            {{ $chequeo->Bumper }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
