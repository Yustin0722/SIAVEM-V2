@extends('layouts.app')

@section('template_title')
    Estado
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
                                {{ __('Estado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Idestados</th>
										<th>Nombreestados</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estados as $estado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estado->idEstados }}</td>
											<td>{{ $estado->nombreEstados }}</td>

                                            <td>
                                                <form action="{{ route('estados.destroy',$estado->idEstados) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estados.show',$estado->idEstados) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estados.edit',$estado->idEstados) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
                {!! $estados->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
