@extends('app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Porfavor sube tus archivos siguientes: </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ url('/storage/create') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">CURP</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file1" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">IFE</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file2" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Cédula profesional</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file3" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Comprobante de domicilio</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file4" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Carta de Antecedentes no penales</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file5" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">CV</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file6" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Acta de Nacimiento</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file7" >
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection