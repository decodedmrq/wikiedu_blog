@extends('layouts.admin.master')
@section('content')
	{!! Form::open(['route' => 'store', 'method' => 'POST', 'enctype' => "multipart/form-data"]) !!}
	<div>
		<label>{{ trans('string.title') }}</label> 
		<br/>
		<input type="text" name="title">
	</div>
	<div>
		<label>{{ trans('string.thumb_image') }}</label>
		<br/>
		<input type="file" name="thumb_image">
	</div>
	<div>
		<label> {{ trans('string.sapo') }}</label>
		<br/>
		<input type="text" name="sapo">
	</div>
	<div>
		<label> {{ trans('string.category') }} </label>
		<br/>
		<select name="category_id">
			@foreach($categories as $category)
			<option value={{$category->id}}>{{$category->name}}</option>
			@endforeach
		</select>
	</div>

	<label> {{ trans('string.content') }}</label>
	<textarea name="content" cols="30" rows="10" id="content"></textarea>
	<hr/>
	<button class="btn">Post</button>
	{!! Form::close() !!}
	@include('admin.error')
@endsection
@section('footer')
	<script type="text/javascript" src="/vendor/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		var editor_config = {
			path_absolute : "{{ URL::to('/') }}/test",
			selector : "textarea",
			plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor colorpicker textpattern"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
			relative_urls: false,
		};
		tinymce.init(editor_config);

		console.log(tinymce.activeEditor.getContent());
	</script>
@endsection