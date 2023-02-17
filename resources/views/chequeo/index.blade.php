@extends('layouts.app')

@section('template_title')
    Chequeo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if (Auth::user()->rol === 'superAdmin' || Auth::user()->rol === 'usuario')
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Chequeo Unidades y Busetas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('chequeos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th> Placa</th>
										<th>Fecha</th>
										<th>Kilometraje</th>
										<th>Combustible</th>
										<th>Luz baja</th>
										<th>Luz Alta</th>
										<th>Luz Marcha</th>
										<th>Luz Interior</th>
										<th>Luz Freno</th>
										<th>Intermitentes</th>
										<th>Luz Parking</th>
										<th>Alojenos</th>
										<th>Escobillas</th>
										<th>Extintor</th>
										<th>Botiquin</th>
										<th>Triangulos</th>
										<th>Cinturon</th>
										<th>Chapa Puerta</th>
										<th>Pito</th>
										<th>Parabrisas</th>
										<th>Vidrios Laterales</th>
										<th>Aire Acondicionado</th>
										<th>Bateria</th>
										<th>Nivel Refrigeracion</th>
										<th>Nivel Aceite</th>
										<th>Alfombras</th>
										<th>Radio</th>
										<th>Asientos Delanteros</th>
										<th>Asientos Traseros</th>
										<th>Permisos Circulacion</th>
										<th>RTV</th>
										<th>Titulo Propiedad</th>
										<th>Llanta Delantera</th>
										<th>Llanta Repuesto</th>
										<th>Llanta Trasera</th>
										<th>Tuercas</th>
										<th>Espejo Retrovisor</th>
										<th>Gata</th>
										<th>Llave Rana</th>
										<th>Lingas</th>
										<th>Juego Llaves</th>
										<th>Bumper</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chequeos as $chequeo)
                                        <tr>
                                           
											<td>{{ $chequeo->unidade->placa }}</td>
											<td>{{ $chequeo->FechaChequeo }}</td>
											<td>{{ $chequeo->Kilometraje }}</td>
											<td>{{ $chequeo->Combustible }}</td>
											<td>{{ $chequeo->LuzBaja }}</td>
											<td>{{ $chequeo->LuzAlta }}</td>
											<td>{{ $chequeo->LuzMarcha }}</td>
											<td>{{ $chequeo->LuzInterior }}</td>
											<td>{{ $chequeo->LuzFreno }}</td>
											<td>{{ $chequeo->Intermitentes }}</td>
											<td>{{ $chequeo->LuzParking }}</td>
											<td>{{ $chequeo->Alojenos }}</td>
											<td>{{ $chequeo->Escobillas }}</td>
											<td>{{ $chequeo->Extintor }}</td>
											<td>{{ $chequeo->Botiquin }}</td>
											<td>{{ $chequeo->Triangulos }}</td>
											<td>{{ $chequeo->Cinturon }}</td>
											<td>{{ $chequeo->ChapaPuerta }}</td>
											<td>{{ $chequeo->Pito }}</td>
											<td>{{ $chequeo->Parabrisas }}</td>
											<td>{{ $chequeo->VidriosLaterales }}</td>
											<td>{{ $chequeo->Climatizacion }}</td>
											<td>{{ $chequeo->Bateria }}</td>
											<td>{{ $chequeo->NivelRefrigeracion }}</td>
											<td>{{ $chequeo->NivelAceite }}</td>
											<td>{{ $chequeo->Alfombras }}</td>
											<td>{{ $chequeo->Radio }}</td>
											<td>{{ $chequeo->AsientosD }}</td>
											<td>{{ $chequeo->AsientosT }}</td>
											<td>{{ $chequeo->PermisosCirculacion }}</td>
											<td>{{ $chequeo->RTV }}</td>
											<td>{{ $chequeo->TituloPropiedad }}</td>
											<td>{{ $chequeo->LlantaDelantera }}</td>
											<td>{{ $chequeo->LlantaRepuesto }}</td>
											<td>{{ $chequeo->LlantaTrasera }}</td>
											<td>{{ $chequeo->Tuercas }}</td>
											<td>{{ $chequeo->EspejoRetrovisor }}</td>
											<td>{{ $chequeo->Gata }}</td>
											<td>{{ $chequeo->LlaveRana }}</td>
											<td>{{ $chequeo->Lingas }}</td>
											<td>{{ $chequeo->JuegoLlaves }}</td>
											<td>{{ $chequeo->Bumper }}</td>

                                            <td>
                                                <form action="{{ route('chequeos.destroy',$chequeo->idchequeos) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-warning" href="{{ route('chequeos.edit',$chequeo->idchequeos) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
							@section('js')
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            @if (session('eliminar') == 'ok')
                            <script>
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                            </script>
                            @endif
                            <script>
                                let forms = document.querySelectorAll('form')
            
                                forms.forEach(form => {
                                    form.addEventListener('submit', (event) => {
                                        event.preventDefault()
                                        Swal.fire({
                                            title: '¿Está seguro que desea eliminar?',
                                            text: "¡No podrá revertir esto!",
                                            icon: 'warning',
                                            cancelButtonText: "Cancelar",
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Eliminar'
                                            }).then((result) => {
                                            if (result.isConfirmed) {

                                                form.submit();
                                            }
                                            })

                                         })
                                     })
                             </script>
                             @endsection
                        </div>
                    </div>
                </div>
                {!! $chequeos->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
