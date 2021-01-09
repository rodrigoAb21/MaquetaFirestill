@extends('layouts.index')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        NUEVA VENTA
                    </h3>


                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input required
                                       type="date"
                                       class="form-control"
                                       value="{{\Carbon\Carbon::now('America/La_Paz')->toDateString()}}"
                                       name="fecha">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Cliente</label>
                                <select class="form-control">
                                    <option value="Juan Perez">Juan Perez</option>
                                    <option value="Esteban Choque">Jose Saucedo</option>
                                    <option value="Daniel Mendoza">MADISA SA</option>

                                </select>
                            </div>
                        </div>


                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Producto</label>
                                <select class="form-control selectpicker" data-live-search="true" id="selectorInsumo">
                                    <option value="21343">Extintor 10L CO2</option>
                                    <option value="21345">Manometro 3Bar</option>
                                    <option value="11234">Manguera 1.5m</option>
                                    <option value="33212">Precinto</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">

                                <button id="btn_agregar" type="button" onclick="agregar()"  class="btn btn-success btn-sm btn-block">
                                    <span class="fa fa-plus fa-2x"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th class="text-right">OPC</th>
                                <th class="text-center">ID</th>
                                <th class="text-center w-50">PRODUCTO</th>
                                <th class="text-center">PRECIO</th>
                            </tr>
                            </thead>
                            <tbody id="detalle">
                            </tbody>
                        </table>

                    </div>

                    <a href="{{url('ventas')}}" class="btn btn-warning">Atras</a>
                    <a href="{{url('ventas')}}" class="btn btn-info">Guardar</a>

                </div>
            </div>
        </div>
    </div>
    @push('arriba')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    @endpush
    @push('scripts')
        <script>
            var cont = 0;
            function agregar() {
                if(cont>=0) {
                    nombreInsumo = $('#selectorInsumo option:selected').text();
                    nombreID = $('#selectorInsumo option:selected').val();
                    var fila =
                        '<tr id="fila' + cont + '">' +
                        '<td>' +
                        '<button type="button" class="btn btn-danger btn-sm" onclick="quitar(' + cont + ');">' +
                        '<i class="fa fa-times" aria-hidden="true"></i>' +
                        '</button>' +
                        '</td>' +
                        '<td>' +
                        nombreID+
                        '</td>' +
                        '<td>' +
                        nombreInsumo+
                        '</td>' +
                        '<td>' +
                        '   <input class="form-control" name="asd" >'+
                        '</td>' +
                        '</tr>';


                    cont++;


                    $("#detalle").append(fila); // sirve para anhadir una fila a los detalles

                }

            }

            function quitar(index){

                cont--;

                $("#fila" + index).remove();
            }


        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    @endpush
@endsection
