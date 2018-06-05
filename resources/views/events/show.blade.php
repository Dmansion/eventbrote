@extends('layouts.app')
@section('content')
<h1>{{ $event->title }}</h1>
<p>{{ $event->description }}</p>

<a class="btn btn-default" href="{{ route('events.edit',$event) }}">Modifier</a> 
<a href="{{ route('events.destroy',$event) }}" data-method="DELETE" data-confirm="Etes-vous sûr?" class="btn btn-danger">Supprimer</a>
{{-- <form class="inline-block" name="delete" action="{{ route('events.destroy',$event) }}" method="POST">
	 @csrf
	 @method('DELETE')
<a class="btn btn-danger" href="#" onclick="document.delete.submit()">Supprimer</a>
</form>  --}}
<hr>
<a href="{{ route('root') }}">Tous les évenements</a>
@endsection