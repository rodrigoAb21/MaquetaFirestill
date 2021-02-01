@extends('layouts.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="pb-2">
                        Productos dados de Baja
                        <div class="float-right">

                        </div>
                    </h2>

                    <div class="mb-3">
                        <input class="form-control" placeholder="Buscar..." type="text">
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>COD</th>
                                <th>NOMBRE</th>
                                <th>COSTO</th>
                                <th>FECHA</th>
                                <th>MOTIVO</th>


                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>1</td>
                                <td>Llave combinada 12</td>

                                <td>20 Bs</td>
                                <td>10-DIC-2020</td>
                                <td>Extraviada</td>


                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Llave Cruz</td>

                                <td>45 Bs</td>
                                <td>13-NOV-2020</td>
                                <td>Dañada</td>


                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Desaramador estrella</td>

                                <td>10 Bs</td>
                                <td>30-OCT-2020</td>
                                <td>Extraviado</td>



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
