@extends('layouts.index')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Nuevo proveedor
                    </h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           name="contacto">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>NIT</label>
                                    <input
                                            type="text"
                                           class="form-control"

                                           name="celular">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Direccion</label>
                                    <input
                                            type="text"
                                            class="form-control"

                                            name="tel_empresa">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input
                                           type="text"
                                           class="form-control"

                                           name="tel_empresa">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Informacion</label>
                                    <input
                                            type="text"
                                            class="form-control"

                                            name="tel_empresa">
                                </div>
                            </div>


                        </div>
                        <a href="{{url('proveedores')}}" class="btn btn-warning">Atras</a>
                        <a href="{{url('proveedores')}}" class="btn btn-success">Guardar</a>


                </div>
            </div>
        </div>
    </div>
@endsection
