@include('resources.header')
@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">users</div>

                    @if(Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif

                    <div class="panel-body">
                        <a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">
                            Crear Nuevo Usuario
                        </a>
                        {!! Form::open(['route'=>'admin.users.index', 'method'=>'GET', 'class'=>'navbar-form navbar-right pull--right','role'=>'search']) !!}}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre de el usuario a buscar']) !!}

                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                        {!! Form::close() !!}
                    </div>
                    <div class="panel-body">
                        <p>{{ $users->total()}} Usuarios</p>
                        @include('admin.users.partials.table')
                        {!! $users->setPath('')->render()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['route'=> ['admin.users.destroy', ':USER_ID'],'method'=>'DELETE', 'id'=>'form-delete']) !!}
    {!! Form::close() !!}

@endsection




@section('scripts')
    <script>
            $(document).ready(function()
            {
                $('.btn-delete').click(function (e)
                {
                    e.preventDefault();
                    var row= $(this).parents('tr');
                    var id=row.data('id');
                    var form = $('#form-delete');
                    var url =form.attr('action').replace(':USER_ID', id);
                    var data=form.serialize();

                    $.post(url, data, function(result){
                        row.show();
                        alert(result.message);
                    }).fail(function(){
                       alert('El usuario fue eliminado', id);
                        row.fadeOut();
                    });
                });
            });
    </script>
@endsection