@extends('layouts.app')

@section('template_title')
    Unidade
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
                                {{ __('Unidades') }}
                            </span>
                             <div class="float-right">
                                <a href="{{ route('unidades.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Unidad') }}
                                </a>
                                <a href="{{ route('unidad') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
                                    {{ __('Aviso RTV') }}
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
                                     
										<th>Categoría</th>
										<th>Tracción</th>
										<th>Combustible</th>
										<th>Estado</th>
										<th>Placa</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Estilo</th>
										<th>Color</th>
										<th>Año fabricación</th>
										<th>Contratacion</th>
										<th>Valor Adquisitivo</th>
										<th>Valor Hacienda</th>
										<th>Rvt</th>
										<th>Descripción</th>
                                         <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidades as $unidade)
                                        <tr>
                                    
											<td>{{ $unidade->categoria->nombre }}</td>

											<td>{{ $unidade->traccione->nombreTraccion}}</td>
											<td>{{ $unidade->combustible->nombreCombustibles }}</td>
											<td>{{ $unidade->estado->nombreEstados}}</td>
											<td>{{ $unidade->placa }}</td>
											<td>{{ $unidade->marca }}</td>
											<td>{{ $unidade->modelo }}</td>
											<td>{{ $unidade->estilo }}</td>
											<td>{{ $unidade->color }}</td>
											<td>{{ $unidade->ayoFabricacion }}</td>
											<td>{{ $unidade->contratacion }}</td>
											<td>{{ $unidade->valorAdqui }}</td>
											<td>{{ $unidade->valorHacienda }}</td>
											<td>{{ $unidade->RVT }}</td>
											<td>{{ $unidade->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('unidades.destroy',$unidade->idUnidad) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unidades.show',$unidade->idUnidad) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('unidades.edit',$unidade->idUnidad) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $unidades->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
