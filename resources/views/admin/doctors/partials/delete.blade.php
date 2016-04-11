{!! Form::open(['route'=> ['admin.doctors.destroy', $doctor],'method'=>'DELETE']) !!}
<button type="submit" onclick="return confirm('Seguro que deseas eliminar')" class="btn btn-danger">Eliminar usuario</button>
{!! Form::close() !!}
