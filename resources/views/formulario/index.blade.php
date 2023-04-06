@extends('layouts.app')

@section('template_title')
    Formulario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if (Auth::user()->rol === 'superAdmin' || Auth::user()->rol === 'usuario' || Auth::user()->rol === 'chofer')
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Solicitud de Gira') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('formularios.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Hacer Solicitud') }}
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
                                     
										<th>Codigo Solicitud</th>
										<th>Vehiculo</th>
										<th>Departamento</th>
										<th>Responsable de la Gira</th>
										<th>Objetivo</th>
										<th>Numero Personas</th>
										<th>Fecha Salida</th>
										<th>Fecha Regreso</th>
										<th>Lugar</th>
										<th>Autorizacion </th>
                                        <th>Chofer</th>
										<th>Observaciones</th>
                                        <th>Estado</th>
                                        <th>Placa</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formularios as $formulario)
                                        <tr>
                                         
											<td>{{ $formulario->idFormularios }}</td>
											<td>{{ $formulario->categoria->nombre }}</td>
											<td>{{ $formulario->departamento->nombreDepa }}</td>
											<td>{{ $formulario->empleado->Cedula }}</td>
											<td>{{ $formulario->Objetivo }}</td>
											<td>{{ $formulario->NumePersonas }}</td>
											<td>{{ $formulario->FechaSalida }}</td>
											<td>{{ $formulario->FechaRegreso }}</td>
											<td>{{ $formulario->Lugar }}</td>
                                            <td>
                                            <img src="{{ asset('formulario/'.$formulario->Autorizacion) }}" width="150" alt="" title="" />
                                            </td>
											
                                            <td>{{ $formulario->empleado->Cedula }}</td>
											<td>{{ $formulario->Observaciones }}</td>
                                            @if($formulario->estado == 1)
                                                <td>Aceptado</td>
                                            @else
                                                <td>Rechazado</td>
                                            
                                            @endif
                                            <td>{{ $formulario->placa }}</td>
                                            <td>
                                                <form action="{{ route('formularios.destroy',$formulario->idFormularios) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('formularios.show',$formulario->idFormularios) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('formularios.edit',$formulario->idFormularios) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @if($formulario->estado == 1)
                                                    <a class="btn btn-sm btn-info" href="{{ route('pdf',$formulario->idFormularios) }}"><i class="fa fa-fw fa-edit"></i> PDF</a>
                                                    @endif
        
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
                {!! $formularios->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection