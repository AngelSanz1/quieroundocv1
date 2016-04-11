{!! Form::open(['route'=> ['admin.users.destroy', $user],'method'=>'DELETE']) !!}
<button type="submit" onclick="return confirm('Seguro que deseas eliminar')" class="btn btn-danger">Eliminar usuario</button>
{!! Form::close() !!}
