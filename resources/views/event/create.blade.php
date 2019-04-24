@extends('layouts.app')

@section('content')

<h1>Create New Event</h1>

<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div> 
    @endif

    <form method="POST" action="{{ route('events.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Event Name">
        </div>
        <div class="form-group">
            <label for="venue">Venue</label>
            <input name="venue" type="text" class="form-control" id="venue" placeholder="Event Venue">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input name="city" type="text" class="form-control" id="city" placeholder="Event City">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn">Create</button>
    </form>
</div>
    
@endsection