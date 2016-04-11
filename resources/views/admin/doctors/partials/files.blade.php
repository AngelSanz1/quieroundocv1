
<div class="form-group">
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Archivo</th>
            <th>Link</th>
            <th>Status</th>
            <th >Acciones</th>
        </tr>
        @for( $i=0; $i<count($doctor[2]); $i++)

        <tr data-id="{{$doctor[1][0]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][$i][0]->name}}</td>
            <td><a style="color:white"  href="{{$doctor[1][$i]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][$i]->document_status_id}}</td>
            <td >

                {!! Form::model($doctor[1][$i],['route'=>['admin.documents.update', $doctor[1][$i]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="1" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;" href="{{route('admin.documents.update',  $doctor[1][$i]->id)}}"><button class="btn btn-success" onclick="return confirm('Seguro que deseas aprobar este documento')" type="submit">  <i class="fa fa-check"></i></button></a>
                {!! Form::close() !!}
                {!! Form::model($doctor[1][$i],['route'=>['admin.documents.update', $doctor[1][$i]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="2" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;"><button class="btn btn-warning" onclick="return confirm('Seguro que deseas aprobar este documento')"> <i class="fa fa-times"></i></button></a>
                {!! Form::close() !!}
                <a style="color:white" ><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{url().'/storage/delete/'.$doctor[0]['id'].'/'.$doctor[2][$i][0]->name.$doctor[0]['id'].substr($doctor[1][$i]->document_url, -4).'/'.$doctor[0]['id']}}"><button class="btn btn-danger "   id=""> <i class="fa fa-trash-o"></i></button></a>
                {!! Form::open(['route'=> ['admin.documents.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'form-delete']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endfor


    </table>


</div>
<button class="btn btn-success"> <i class="fa fa-check"></i></button> Aprobar
<button class="btn btn-warning"> <i class="fa fa-times"></i></button> Rechazar
<button class="btn btn-info"> <i class="fa fa-pencil"></i></button> Editar
<button class="btn btn-danger"> <i class="fa fa-trash-o"></i></button>  Eliminar
<br>
<br>
<ol>
    <li>Aprobado</li>
    <li>No Aprobado</li>
    <li>En revision</li>
</ol>
<p>Después de validar los documentos, favor de subir la fotografía del médico.</p>

            @include('photo')
