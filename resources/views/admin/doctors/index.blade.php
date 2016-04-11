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
                        <a class="btn btn-info" href="{{route('admin.doctors.create')}}" role="button">
                            Crear Nuevo Usuario
                        </a>
                        {!! Form::open(['route'=>'admin.doctors.index', 'method'=>'GET', 'class'=>'navbar-form navbar-right pull--right','role'=>'search']) !!}}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre de el usuario a buscar']) !!}

                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                        {!! Form::close() !!}
                    </div>
                    <div class="panel-body">

                        <p>{{count($doctors)}} Doctores</p>
                        @include('admin.doctors.partials.table')
                        {{--!! $doctors->render()!!--}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



