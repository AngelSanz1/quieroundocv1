@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo usuarios</div>
                    <div class="panel-body">
                        @include('admin.doctors.partials.messages')


                        {!! Form::open(['route'=>'admin.doctors.store', 'method'=>'POST'])!!}
                        @include('admin.doctors.partials.fields');

                        <button type="submit" class="btn btn-default">Crear</button>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
