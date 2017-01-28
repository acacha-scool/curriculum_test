@extends('adminlte::page')

@section('htmlheader_title')
	Curriculum del centre per departaments
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<curriculum-accordion></curriculum-accordion>

			</div>
		</div>
	</div>
@endsection
