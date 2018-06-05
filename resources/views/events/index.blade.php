@extends('layouts.app')
@section('content')
	<h1>{{ $events->total()." ".str_plural('Evènement',$events->total()) }}</h1>
	@if(! $events->isEmpty())
		<ul>
			@foreach($events as $event)
			<li>
				<a href="{{ route('events.show',$event) }}">{{ $event->title }}</a>
				</li>
			@endforeach
		</ul>
		{{ $events->links() }}
		@else
		<p>Aucun évenement pour le moment.</p>
	@endif
@endsection