@extends('layouts.app')

@section('template_title')
    Tallere
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
                                {{ __('Talleres') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('talleres.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Taller') }}
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
                                       
										<th>Código de Contratación</th>
										<th>Nombre Taller</th>
										<th>Dirección </th>
										<th>Descripción Especialidad</th>
										<th>Fecha de Vencimiento </th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($talleres as $tallere)
                                        <tr>
                                        
											<td>{{ $tallere->Contratacion }}</td>
											<td>{{ $tallere->NombreTaller }}</td>
											<td>{{ $tallere->DireccionTaller }}</td>
											<td>{{ $tallere->DescripcionEsp }}</td>
											<td>{{ $tallere->FechaVenTaller }}</td>

                                            <td>
                                                <form action="{{ route('talleres.destroy',$tallere->idTaller) }}" method="POST">
                                                   
                                                    <a class="btn btn-sm btn-warning" href="{{ route('talleres.edit',$tallere->idTaller) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $talleres->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
