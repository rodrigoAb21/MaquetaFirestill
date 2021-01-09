@extends('layouts.index')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar personal
                    </h3>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input required
                                       type="text"
                                       value="Juan"
                                       class="form-control"
                                       name="contacto">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Apellido</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        value="Perez Condori"

                                        name="celular">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Direccion</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        value="Doble via Km9 #342"

                                        name="tel_empresa">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Carnet</label>
                                <input required
                                       type="text"
                                       class="form-control"
                                       value="8080808 LP"
                                       name="empresa">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        value="79896598"
                                        name="tel_empresa">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        value="juanperez@gmail.com"
                                        name="tel_empresa">
                            </div>
                        </div>
                    </div>
                    <a href="{{url('personal')}}" class="btn btn-warning">Atras</a>
                    <a href="{{url('personal')}}" class="btn btn-success">Guardar</a>


                </div>
            </div>
        </div>
    </div>
@endsection
