@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Doctor: {{$doctor[0]->id}}</div>
                    <div class="panel-body">

                        @include('admin.doctors.partials.files');

                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        $(document).ready(function()
        {
            $('.btn-danger').click(function (e)
            {
                var row= $(this).parents('tr');
                var id=row.data('id');
                var form = $('#form-delete');
                var url =form.attr('action').replace(':USER_ID', id);
                alert(url)
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