@extends('layouts.admin.master')

@section('content')

<table class="table table-striped">
	<thead>
		<tr>
			<th>{{ trans('string.title') }}</th>
			<th>{{ trans('string.category') }}</th>
			<th>{{ trans('string.thumb_image') }}</th>
			<th>{{ trans('string.sapo') }}</th>
			<th>{{ trans('string.content') }}</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
			<th scope="row">{{$post->title}}</th>
			<td>{{$post->category->name}}</td>
			<td>
				<img src="{{url($post->thumb_image)}}" width="40%">
			</td>
			<td>{{$post->sapo}}</td>
			<td>{{$post->content}} </td>
			<td>
				{!! Form::open([
					'url' => 'admin/post/' . $post->id, 
					'method' => 'DELETE', 
					]) 
					!!}
					<button class="btn btn-warning delete">Delele</button>
					{!! Form::close()!!}
			</td>
		</tr>
		@endforeach
			
		</tbody>
	</table>

	@endsection