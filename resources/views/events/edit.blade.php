@extends('layouts.app')
@section('content')
<h1>Editer un évènement</h1>
<form class="" method="POST" action="{{ route('events.update',$event) }}">
	 @method('PUT')
	 <input type="hidden" name="id" value="{{ $event->id }}"> 
@include('events._form',['submitButtonText'=>'Modifier l\'évènement'])


<a class="" href="{{ route('events.show',$event) }}">Annuler</a>
</form>
	

@endsection