@extends('layouts.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="pb-2">
                        Ventas
                        <div class="float-right">
                            <a class="btn btn-success" href="{{url('ventas/create')}}">
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
                                <th>CLIENTE</th>
                                <th>MONTO BS</th>

                                <th class="text-center w-25">OPC</th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>1</td>
                                <td>04-ENE-2020</td>
                                <td>Juan Perez</td>
                                <td>150</td>


                                <td class="text-center">
                                    <button class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'Ventas')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>14-ENE-2020</td>
                                <td>Marcos Moreno</td>
                                <td>2525</td>


                                <td class="text-center">

                                    <button class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'Ventas')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>04-FEB-2020</td>
                                <td>Jose Mercado</td>
                                <td>456</td>


                                <td class="text-center">

                                    <button class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="modalEliminar('h', 'Ventas')">
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
