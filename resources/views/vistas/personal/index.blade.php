@extends('layouts.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="pb-2">
                        Personal
                        <div class="float-right">
                            <a class="btn btn-success" href="{{url('personal/create')}}">
                                <i class="fa fa-plus"></i>  Nuevo
                            </a>
                        </div>
                    </h2>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CI</th>
                                <th>TELEFONO</th>
                                <th>DIRECCION</th>
                                <th>CORREO</th>

                                <th class="text-center w-25">OPC</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>Juan</td>
                                <td>Perez Condori</td>
                                <td>8080808 LP</td>
                                <td>79896598</td>
                                <td>Doble via Km9 #342</td>
                                <td>juanperez@gmail.com</td>

                                <td class="text-center">
                                    <a href="{{url('personal/1/edit')}}">
                                        <button class="btn btn-warning">
                                            <i class="fa fa-pen"></i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'h')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Esteban</td>
                                <td>Choque Quispe</td>
                                <td>8484845 CBBA</td>
                                <td>73164545</td>
                                <td>Av. Avaroa #435</td>
                                <td>estebanchoque@gmail.com</td>

                                <td class="text-center">
                                    <a href="{{url('personal/1/edit')}}">
                                        <button class="btn btn-warning">
                                            <i class="fa fa-pen"></i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'personal')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('vistas.modal')
    @push('scripts')
        <script>

            function modalEliminar(nombre, url) {
                $('#modalEliminarForm').attr("action", url);
                $('#metodo').val("delete");
                $('#modalEliminarTitulo').html("Eliminar");
                $('#modalEliminarEnunciado').html("Realmente lo desea eliminar?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection
