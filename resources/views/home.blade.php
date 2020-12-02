@extends('app.app')
@section('title')
{!!$title!!}
@endsection
@section('contain')

<div class="container">
	<div class="row m-2 p-2">
		<h1 class="text-dark">{!!$page!!}</h1>
		<br>
		<div>
			<h1>Result</h1>
			@for($i=1;$i<10;$i++)
			@if($i==3 || $i==5)
			@continue
			@endif
			{{$i}}
			@endfor
		</div>
		<div>
			@foreach ($posts as $post)
			<x-sojib :list="$loop->iteration" :title="$title=$post['title']" :message="$message=$post['contant']"/>
			@endforeach
		</div>
	</div>
</div>

@endsection