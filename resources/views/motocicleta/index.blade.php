@extends('layouts.app')

@section('template_title')
    Motocicleta
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
                                {{ __('Chequeo Motocicleta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('motocicletas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
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
                                       
										<th>Placa</th>
										<th>Fecha</th>
										<th>Kilometraje</th>
										<th>Combustible</th>
										<th>Luz baja</th>
										<th>Luz alta</th>
										<th>Luz marcha</th>
										<th>Pito</th>
										<th>Bateria</th>
										<th>Nivel refrigeracion</th>
										<th>Nivel aceite</th>
										<th>Asientos</th>
										<th>Permisos circulacion</th>
										<th>Rtv</th>
										<th>Titulo propiedad</th>
										<th>Llanta delantera</th>
										<th>Llanta trasera</th>
										<th>Espejo retrovisor Derecho</th>
										<th>Espejo retrovisor Izquierdo</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($motocicletas as $motocicleta)
                                        <tr>
                                          
											<td>{{ $motocicleta->unidade->placa }}</td>
											<td>{{ $motocicleta->FechaChequeoM }}</td>
											<td>{{ $motocicleta->Kilometraje }}</td>
											<td>{{ $motocicleta->Combustible }}</td>
											<td>{{ $motocicleta->LuzBaja }}</td>
											<td>{{ $motocicleta->LuzAlta }}</td>
											<td>{{ $motocicleta->LuzMarcha }}</td>
											<td>{{ $motocicleta->Pito }}</td>
											<td>{{ $motocicleta->Bateria }}</td>
											<td>{{ $motocicleta->NivelRefrigeracion }}</td>
											<td>{{ $motocicleta->NivelAceite }}</td>
											<td>{{ $motocicleta->Asientos }}</td>
											<td>{{ $motocicleta->PermisosCirculacion }}</td>
											<td>{{ $motocicleta->RTV }}</td>
											<td>{{ $motocicleta->TituloPropiedad }}</td>
											<td>{{ $motocicleta->LlantaDelantera }}</td>
											<td>{{ $motocicleta->LlantaTrasera }}</td>
											<td>{{ $motocicleta->EspejoRetrovisorD }}</td>
											<td>{{ $motocicleta->EspejoRetrovisori }}</td>

                                            <td>
                                                <form action="{{ route('motocicletas.destroy',$motocicleta->idMotocicleta) }}" method="POST">
                                                    <a class="btn btn-sm btn-warning" href="{{ route('motocicletas.edit',$motocicleta->idMotocicleta) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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
                {!! $motocicletas->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
