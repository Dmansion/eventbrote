@extends('layouts.app')
@section('content')
<h1>Créer un évènement</h1>
<form method="POST" action="{{ route('events.store') }}">
@include('events._form',['submitButtonText'=>'Créer l\'évènement'])
</form>
@endsection