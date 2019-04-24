@extends('layouts.app')

@section('content')

<h1>Edit Event</h1>

<div>
    <form method="POST" action="{{ route('events.update',['event'=>$event]) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ old('name',$event->name) }}">
        </div>
        <div class="form-group">
            <label for="venue">Venue</label>
            <input name="venue" type="text" class="form-control" id="venue">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input name="city" type="text" class="form-control" id="city" value="{{ $event->city }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3">
                {{ $event->description }}
            </textarea>
        </div>
        <button type="submit" class="btn">Edit</button>
    </form>
</div>
    
@endsection