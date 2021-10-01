@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('includes.message')
                @include('includes.errors')
                <div class="card">
                    <div class="card-header">Items</div>

                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear
                            Item</button>
                            <br>

                        @if ($conteo > 0)
                        <table class="table table-hover table-bordered table-striped text-nowrap">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)

                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->cantidad}}</td>
                                <td>


                                    <form action="{{route('items.destroy',$item->id)}}" class="d-inline deleteitem" method="post">
                                        @csrf
                                         <button type="submit" class="btn btn-danger btn-sm"> 
                                            eliminar
                                         </button>
                                     </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        </table>
                        @endif

                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Crear Item</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('items.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="cantidad">Cantidad</label>
                                            <input type="number" class="form-control" id="cantidad" name="cantidad">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
            $(".deleteitem").submit(function(e){
    e.preventDefault();
    Swal.fire({
      title: 'Esta seguro de borrar este item?',
      text: "No podras recuperarla",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'SI, quiero borrarlo',
      cancelButtonText: 'cancelar'

    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })
  });
    </script>
@endsection
