@extends('app')

@section('content')
	@if( !(Auth::guest()))
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						Que pedo ya estas dentro, Bienvenido {{ Auth::user()->nombre }}!
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
@endsection