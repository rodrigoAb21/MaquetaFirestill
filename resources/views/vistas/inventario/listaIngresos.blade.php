@extends('layouts.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="pb-2">
                        Ingresos de Productos
                        <div class="float-right">
                            <a class="btn btn-success" href="{{url('inventario/nuevoIngreso')}}">
                                <i class="fa fa-plus"></i>  Nuevo
                            </a>
                        </div>
                    </h2>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>FECHA</th>
                                <th>PROVEEDOR</th>
                                <th>TOTAL BS</th>

                                <th class="text-center w-25">OPC</th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>1</td>
                                <td>04-ENE-2020</td>
                                <td>FERROTODO</td>
                                <td>956</td>


                                <td class="text-center">

                                    <button class="btn btn-warning">
                                        <i class="fa fa-pen"></i>
                                    </button>

                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'herramientas')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>14-ENE-2020</td>
                                <td>ANGLARIL</td>
                                <td>784</td>


                                <td class="text-center">

                                    <button class="btn btn-warning">
                                        <i class="fa fa-pen"></i>
                                    </button>

                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'herramientas')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>04-FEB-2020</td>
                                <td>AGSA</td>
                                <td>250</td>


                                <td class="text-center">

                                    <button class="btn btn-warning">
                                        <i class="fa fa-pen"></i>
                                    </button>

                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'herramientas')">
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
