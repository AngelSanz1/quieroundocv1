<table class="table table-striped">
    <tr>
        <th># ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Estatus</th>
        <th>Ver</th>
        <th>Acciones</th>
    </tr>
    @foreach ($doctors as $doctor)
        <tr >

            <td>{{$doctor->id}}</td>
            <td><a href="">{{$doctor->name}}</a></td>
            <td><a href="">{{$doctor->last_name}}</a></td>
            <td>{{$doctor->status}}</td>
            <td><a style="color:white"  href="{{route('admin.doctors.edit', $doctor->id)}}"> <button class="btn btn-primary"> <i class="fa fa-file-text-o"></i></button></a> </td>
            <td >
                <a style="color:white" href=""><button class="btn btn-success">  <i class="fa fa-check"></i></button></a>
                <a style="color:white" href=""><button class="btn btn-warning"> <i class="fa fa-times"></i></button></a>
                <a style="color:white" href=""><button class="btn btn-info"> <i class="fa fa-pencil"></i></button></a>
                <a style="color:white" href=""><button class="btn btn-danger"> <i class="fa fa-trash"></i></button></a>
            </td>
        </tr>
    @endforeach
</table>
<ul>
    <li>0 Inhabilitado</li>
    <li>1 Habilitado</li>
</ul>