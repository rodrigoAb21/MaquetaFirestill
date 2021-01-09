@extends('layouts.index')
@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="pb-2">
                        Herramientas
                        <div class="float-right">

                        </div>
                    </h2>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>ESTADO</th>
                                <th>COSTO</th>
                                <th>OBSERVACION</th>

                                <th class="text-center w-25">OPC</th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>1</td>
                                <td>Llave combinada 12</td>
                                <td>Disponible</td>
                                <td>20 Bs</td>
                                <td>Oxidada</td>


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
                                <td>Llave Cruz</td>
                                <td>Ocupada</td>
                                <td>45 Bs</td>
                                <td>Ninguna</td>


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
                                <td>Desaramador estrella</td>
                                <td>Disponible</td>
                                <td>10 Bs</td>
                                <td>Nuevo</td>


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
    <div class="modal fade" id="modalBaja" tabindex="-1" role="dialog" aria-labelledby="eliminarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Dar de baja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modalEliminarEnunciado">¿Está seguro que desea dar de baja esta herramienta?</p>


                    <textarea class="form-control" name="" id="" cols="30" rows="3" placeholder="Motivo de la baja"></textarea>
                    <br>
                    <button type="button" data-dismiss="modal" class="btn btn-danger">Eliminar</button>
                </div>


            </div>
        </div>
    </div>
    @push('scripts')
        <script>

            function modalEliminar(nombre, url) {
                $('#modalBaja').modal('show');
            }

        </script>

    @endpush()
@endsection
