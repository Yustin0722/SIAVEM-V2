@extends('layouts.app')

@section('template_title')
    Correctivo
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
                                {{ __('Mantenimiento Correctivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('correctivos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
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
                                        <th> Placa</th>
										<th>Taller</th>
										<th>Fecha Salida</th>
										<th>Fecha Reingreso</th>
										<th>Horimetro</th>
										<th>Detalle</th>
										<th>Montó</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($correctivos as $correctivo)
                                        <tr>
                                          <td>{{ $correctivo->unidade->placa }}</td>
											<td>{{ $correctivo->tallere->NombreTaller}}</td>
											<td>{{ $correctivo->FechaSalida }}</td>
											<td>{{ $correctivo->FechaReingreso }}</td>
											<td>{{ $correctivo->Horimetro }}</td>
											<td>{{ $correctivo->Detalle }}</td>
											<td>{{ $correctivo->Monto }}</td>


                                            <td>
                                                <form action="{{ route('correctivos.destroy',$correctivo->idCorrectivo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('correctivos.show',$correctivo->idCorrectivo) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('correctivos.edit',$correctivo->idCorrectivo) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $correctivos->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
