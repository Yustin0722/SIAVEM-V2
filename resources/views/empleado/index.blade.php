@extends('layouts.app')

@section('template_title')
    Empleado
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
                                {{ __('Empleado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Empleado') }}
                                </a>
                                <a href="{{ route('licencias') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
                                    {{ __('Aviso Licencia') }}
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
                                       
										<th>Departamento </th>
										<th>Puesto</th>
										<th>Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Fecha Nacimiento</th>
										<th>Cedúla</th>
										<th>Teléfono</th>
										<th>Correo Institucional</th>
										<th>Código Licencia</th>
										<th>Fecha Vencimiento</th>
										<th>Foto Licencia</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                          
											<td>{{$empleado->departamento->nombreDepa }}</td>
											<td>{{ $empleado->Puesto }}</td>
											<td>{{ $empleado->NombreEmple }}</td>
											<td>{{ $empleado->Apellido1 }}</td>
											<td>{{ $empleado->Apellido2 }}</td>
											<td>{{ $empleado->FechaNacimiento }}</td>
											<td>{{ $empleado->Cedula }}</td>
											<td>{{ $empleado->Telefono }}</td>
											<td>{{ $empleado->CorreoInstitucional }}</td>
											<td>{{ $empleado->TL_id }}</td>
											<td>{{ $empleado->FechaVencimiento }}</td>
											<td>
                                            <img src="{{ asset('storage/empleado/'.$empleado->FotoLicencia) }}" width="150" alt="" title="" />
                                            </td>

                                            <td>
                                                <form action="{{ route('empleados.destroy',$empleado->idEmpleados) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleados.show',$empleado->idEmpleados) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('empleados.edit',$empleado->idEmpleados) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $empleados->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection