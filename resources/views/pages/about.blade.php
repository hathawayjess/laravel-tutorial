@extends('app')

@section('content')

@if ($first == 'Jessica')
	<h1>Hi {{ $first }}</h1>
@else
	<h1>Wrong name</h1>
@endif

	<h1>
		About me: {{ $first }} {{ $last }} 
	</h1>
@if (count($people))
	<h3>
		@foreach ($people as $person)
			<li>{{ $person }}</li>
		@endforeach
	</h3>
@else
	<h2>No people to show.</h2>
@endif

@stop