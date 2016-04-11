
<div class="form-group">
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Archivo</th>
            <th>Link</th>
            <th>Status</th>
            <th >Acciones</th>
        </tr>

        <tr data-id="{{$doctor[1][0]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][0][0]->name}}</td>
            <td><a style="color:white"  href="{{$doctor[1][0]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][0]->document_status_id}}</td>
            <td >

                {!! Form::model($doctor[1][0],['route'=>['admin.documents.update', $doctor[1][0]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="1" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;" href="{{route('admin.documents.update',  $doctor[1][0]->id)}}"><button class="btn btn-success" onclick="return confirm('Seguro que deseas aprobar este documento')" type="submit">  <i class="fa fa-check"></i></button></a>
                {!! Form::close() !!}
                {!! Form::model($doctor[1][0],['route'=>['admin.documents.update', $doctor[1][0]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="2" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;"><button class="btn btn-warning" onclick="return confirm('Seguro que deseas aprobar este documento')"> <i class="fa fa-times"></i></button></a>
                {!! Form::close() !!}
                <a style="color:white" ><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{url().'/storage/delete/'.$doctor[0]['id'].'/'.$doctor[2][0][0]->name.$doctor[0]['id'].substr($doctor[1][0]->document_url, -4).'/'.$doctor[0]['id']}}"><button class="btn btn-danger "   id=""> <i class="fa fa-trash-o"></i></button></a>
                {!! Form::open(['route'=> ['admin.documents.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'form-delete']) !!}
                {!! Form::close() !!}
            </td>
        </tr>


        <tr data-id="{{$doctor[1][1]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][1][0]->name}} </td>
            <td><a style="color:white"  href="{{$doctor[1][1]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][1]->document_status_id}}</td>
            <td >

                {!! Form::model($doctor[1][1],['route'=>['admin.documents.update', $doctor[1][1]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="1" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;" href="{{route('admin.documents.update',  $doctor[1][1]->id)}}"><button class="btn btn-success" onclick="return confirm('Seguro que deseas aprobar este documento')" type="submit">  <i class="fa fa-check"></i></button></a>
                {!! Form::close() !!}
                {!! Form::model($doctor[1][1],['route'=>['admin.documents.update', $doctor[1][1]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="2" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;"><button class="btn btn-warning" onclick="return confirm('Seguro que deseas aprobar este documento')"> <i class="fa fa-times"></i></button></a>
                {!! Form::close() !!}
                <a style="color:white" ><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{url().'/storage/delete/'.$doctor[0]['id'].'/'.$doctor[2][1][0]->name.$doctor[0]['id'].substr($doctor[1][1]->document_url, -4).'/'.$doctor[0]['id']}}"><button class="btn btn-danger "   id=""> <i class="fa fa-trash-o"></i></button></a>
                {!! Form::open(['route'=> ['admin.documents.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'form-delete']) !!}
                {!! Form::close() !!}
            </td>
        </tr>


        <tr data-id="{{$doctor[1][2]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][2][0]->name}}</td>
            <td><a style="color:white"  href="{{$doctor[1][2]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][2]->document_status_id}}</td>
            <td >

                {!! Form::model($doctor[1][2],['route'=>['admin.documents.update', $doctor[1][2]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="1" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;" href="{{route('admin.documents.update',  $doctor[1][2]->id)}}"><button class="btn btn-success" onclick="return confirm('Seguro que deseas aprobar este documento')" type="submit">  <i class="fa fa-check"></i></button></a>
                {!! Form::close() !!}
                {!! Form::model($doctor[1][2],['route'=>['admin.documents.update', $doctor[1][2]->id], 'style'=>"display:inline;", 'method'=>'PUT'])!!}
                <input type="hidden" class='form-control' value="2" name="document_status_id"/>
                <input name="_method" type="hidden" value="PUT">
                <a style="color:white; display:inline;"><button class="btn btn-warning" onclick="return confirm('Seguro que deseas aprobar este documento')"> <i class="fa fa-times"></i></button></a>
                {!! Form::close() !!}
                <a style="color:white" ><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{url().'/storage/delete/'.$doctor[0]['id'].'/'.$doctor[2][2][0]->name.$doctor[0]['id'].substr($doctor[1][2]->document_url, -4).'/'.$doctor[0]['id']}}"><button class="btn btn-danger "   id=""> <i class="fa fa-trash-o"></i></button></a>
                {!! Form::open(['route'=> ['admin.documents.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'form-delete']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        <tr data-id="{{$doctor[1][3]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][3][0]->name}}</td>
            <td><a style="color:white"  href="{{$doctor[1][3]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][3]->document_status_id}}</td>
            <td >
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-success">  <i class="fa fa-check"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-warning"> <i class="fa fa-times"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{--url().'/storage/delete/'.$doctor->id.'/'.'Carta_Antecedentes_no_penales_'.$doctor->id.'.png'--}}"><button class="btn btn-danger"> <i class="fa fa-trash-o"></i></button></a>

            </td>
        </tr>
        <tr data-id="{{$doctor[1][4]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][4][0]->name}}</td>
            <td><a style="color:white"  href="{{$doctor[1][4]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][4]->document_status_id}}</td>
            <td >
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-success">  <i class="fa fa-check"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-warning"> <i class="fa fa-times"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{--url().'/storage/delete/'.$doctor->id.'/'.'Carta_Antecedentes_no_penales_'.$doctor->id.'.png'--}}"><button class="btn btn-danger"> <i class="fa fa-trash-o"></i></button></a>

            </td>
        </tr>
        <tr data-id="{{$doctor[1][5]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][5][0]->name}}</td>
            <td><a style="color:white"  href="{{$doctor[1][5]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][5]->document_status_id}}</td>
            <td >
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-success">  <i class="fa fa-check"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-warning"> <i class="fa fa-times"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{--url().'/storage/delete/'.$doctor->id.'/'.'Carta_Antecedentes_no_penales_'.$doctor->id.'.png'--}}"><button class="btn btn-danger"> <i class="fa fa-trash-o"></i></button></a>

            </td>
        </tr>
        <tr data-id="{{$doctor[1][6]->id}}">
            <td>{{$doctor[0]['id']}}</td>
            <td>{{$doctor[2][6][0]->name}}</td>
            <td><a style="color:white"  href="{{$doctor[1][6]->document_url}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td>{{$doctor[1][6]->document_status_id}}</td>
            <td >
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-success">  <i class="fa fa-check"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-warning"> <i class="fa fa-times"></i></button></a>
                <a style="color:white" href="{{--route('admin.doctors.edit', $doctor)--}}"><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href="{{--url().'/storage/delete/'.$doctor->id.'/'.'Carta_Antecedentes_no_penales_'.$doctor->id.'.png'--}}"><button class="btn btn-danger"> <i class="fa fa-trash-o"></i></button></a>

            </td>
        </tr>
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
