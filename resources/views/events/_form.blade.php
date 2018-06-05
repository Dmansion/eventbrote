@csrf
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
	<label for="title" class="control-label sr-only">Titre</label>
	<input type="text" name="title" id="title" placeholder="Titre de l'évènement" value="{{ old('title') ?? $event->title }}" class="form-control"> {!! $errors->first('title',"<span class='help-block'>:message</span>") !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
	<label for="description" class="control-label sr-only">Description</label>
	<textarea name="description" id="description" placeholder="Description de l'évènement"  class="form-control">{{ old('description') ?? $event->description }}</textarea>
	{!! $errors->first('description',"<span class='help-block'>:message</span>") !!} 
</div>
<div class="form-group">	
	<input class="btn btn-primary btn-block" type="submit" value="{{ $submitButtonText }}">

</div>