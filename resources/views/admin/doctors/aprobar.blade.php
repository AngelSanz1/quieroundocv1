@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar usuario: {{$doctor->id}}</div>
                    <div class="panel-body">
                        @include('admin.doctors.partials.messages')

                        {!! Form::model($doctor,['route'=>['admin.doctors.updatedoc', $doctor], 'method'=>'PUT'])!!}
                        @include('admin.doctors.partials.files');
                        <button type="submit" class="btn btn-default">Actualizar usuario</button>

                        {!! Form::close() !!}

                    </div>

                </div>
                @include('admin.doctors.partials.delete')

            </div>
        </div>
    </div>
@endsection
