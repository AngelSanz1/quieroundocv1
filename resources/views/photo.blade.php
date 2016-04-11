


        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Subir fotografía del médico: </div>
                    <div class="panel-body">
                        <form method="POST" action="{{url('storage/photo_upload')}}" accept-charset="UTF-8" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$doctor[0]['id']}}">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Fotografía </label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file1" >
                                </div>
                                <br><br>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Subir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

