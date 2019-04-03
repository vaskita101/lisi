@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/landings') }}">Landing</a> :
@endsection
@section("contentheader_description", $landing->$view_col)
@section("section", "Landings")
@section("section_url", url(config('laraadmin.adminRoute') . '/landings'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Landings Edit : ".$landing->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($landing, ['route' => [config('laraadmin.adminRoute') . '.landings.update', $landing->id ], 'method'=>'PUT', 'id' => 'landing-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'landing_home')
					@la_input($module, 'season')
					@la_input($module, 'about_project')
					@la_input($module, 'project_info')
					@la_input($module, 'project_summary')
					@la_input($module, 'landing_apartment')
					@la_input($module, 'footer')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/landings') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#landing-edit-form").validate({
		
	});
});
</script>
@endpush
