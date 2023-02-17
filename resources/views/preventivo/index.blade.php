@extends('layouts.app')

@section('template_title')
    Preventivo
@endsection

@section('content')
    <div class="container-fluid">
        @if (Auth::user()->rol === 'superAdmin' || Auth::user()->rol === 'usuario')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mantenimiento Preventivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('preventivos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar mantenimiento') }}
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
										<th>Taller </th>
										<th>Fecha Mantenimiento</th>
										<th>Tipo Mantenimiento</th>
										<th>Horimetro</th>
										<th>Proximo Servicio</th>
										<th>Montó</th>
                                        <th>Acciones</th>



                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($preventivos as $preventivo)
                                        <tr>
                                        <td>{{ $preventivo->unidade->placa }}</td>
											<td>{{ $preventivo->tallere->NombreTaller }}</td>
											<td>{{ $preventivo->FechaMant }}</td>
											<td>{{ $preventivo->tipoMante }}</td>
											<td>{{ $preventivo->Horimetro }}</td>
											<td>{{ $preventivo->ProximoSer }}</td>
											<td>{{ $preventivo->Monto }}</td>


                                            <td>
                                                <form action="{{ route('preventivos.destroy',$preventivo->idPreventivo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('preventivos.show',$preventivo->idPreventivo) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('preventivos.edit',$preventivo->idPreventivo) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $preventivos->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
