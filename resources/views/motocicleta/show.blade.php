@extends('layouts.app')

@section('template_title')
    {{ $motocicleta->name ?? 'Show Motocicleta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Motocicleta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('motocicletas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idmotocicleta:</strong>
                            {{ $motocicleta->idMotocicleta }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad Id:</strong>
                            {{ $motocicleta->unidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechachequeom:</strong>
                            {{ $motocicleta->FechaChequeoM }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $motocicleta->Kilometraje }}
                        </div>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $motocicleta->Combustible }}
                        </div>
                        <div class="form-group">
                            <strong>Luzbaja:</strong>
                            {{ $motocicleta->LuzBaja }}
                        </div>
                        <div class="form-group">
                            <strong>Luzalta:</strong>
                            {{ $motocicleta->LuzAlta }}
                        </div>
                        <div class="form-group">
                            <strong>Luzmarcha:</strong>
                            {{ $motocicleta->LuzMarcha }}
                        </div>
                        <div class="form-group">
                            <strong>Pito:</strong>
                            {{ $motocicleta->Pito }}
                        </div>
                        <div class="form-group">
                            <strong>Bateria:</strong>
                            {{ $motocicleta->Bateria }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelrefrigeracion:</strong>
                            {{ $motocicleta->NivelRefrigeracion }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelaceite:</strong>
                            {{ $motocicleta->NivelAceite }}
                        </div>
                        <div class="form-group">
                            <strong>Asientos:</strong>
                            {{ $motocicleta->Asientos }}
                        </div>
                        <div class="form-group">
                            <strong>Permisoscirculacion:</strong>
                            {{ $motocicleta->PermisosCirculacion }}
                        </div>
                        <div class="form-group">
                            <strong>Rtv:</strong>
                            {{ $motocicleta->RTV }}
                        </div>
                        <div class="form-group">
                            <strong>Titulopropiedad:</strong>
                            {{ $motocicleta->TituloPropiedad }}
                        </div>
                        <div class="form-group">
                            <strong>Llantadelantera:</strong>
                            {{ $motocicleta->LlantaDelantera }}
                        </div>
                        <div class="form-group">
                            <strong>Llantatrasera:</strong>
                            {{ $motocicleta->LlantaTrasera }}
                        </div>
                        <div class="form-group">
                            <strong>Espejoretrovisord:</strong>
                            {{ $motocicleta->EspejoRetrovisorD }}
                        </div>
                        <div class="form-group">
                            <strong>Espejoretrovisori:</strong>
                            {{ $motocicleta->EspejoRetrovisori }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
