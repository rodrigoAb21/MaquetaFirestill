@extends('layouts.index')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Reingreso de herramientas
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
                                <label>Responsable</label>
                                <input class="form-control" type="text" readonly value="Empleado 1">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th class="text-center w-50">HERRAMIENTA</th>
                                <th class="text-center">ASIGNADA</th>
                                <th class="text-center">DEVUELTA</th>
                                <th class="text-center w-50">MOTIVO BAJA</th>
                            </tr>
                            </thead>
                            <tbody id="detalle">
                            <tr class="text-center">
                                <td>Herramienta 1</td>
                                <td>10</td>
                                <td><input class="form-control" type="number" value="10"></td>
                                <td><input class="form-control" type="text"></td>
                            </tr>
                            <tr class="text-center">
                                <td>Herramienta 2</td>
                                <td>4</td>
                                <td><input class="form-control" type="number" value="2"></td>
                                <td><input class="form-control" type="text"></td>
                            </tr>
                            <tr class="text-center">
                                <td>Herramienta 3</td>
                                <td>1</td>
                                <td><input class="form-control" type="number" value="1"></td>
                                <td><input class="form-control" type="text"></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <a href="{{url('herramientas/listaAsignaciones')}}" class="btn btn-warning">Atras</a>
                    <a href="{{url('herramientas/listaAsignaciones')}}" class="btn btn-info">Guardar</a>

                </div>
            </div>
        </div>
    </div>
@endsection
