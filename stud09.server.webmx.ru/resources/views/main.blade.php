@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<img src="/images/{{ $data->img }}">
	<!-- <video width="1280" height="720" controls="controls">
		<source src="/video/chill_music.mp4" type="video/mp4">
	</video> -->
	<p>
	{!! $data->content !!}

	<h1>Последние новости:</h1>
	@for ($i = 0; $i < 3; $i++)
		<h2>{{$attachdata[$i]->title}}</h2>
	<img src="/images/asset/{{$attachdata[$i]->img}}">
	<p>
		{{$attachdata[$i]->content }}
	</p>
	@endfor
	
@endsection