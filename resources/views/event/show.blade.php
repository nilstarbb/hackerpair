@extends('layouts.app')

@section('content')

<h1>Event: {{ $event->name }}</h1>

<a class="btn" href="{{ route('events.edit',['event'=>$event]) }}">Edit</a>

<dl class="row">

    <dt class="col-sm-2">Name</dt>
    <dd class="col-sm-10">{{ $event->name }}</dd>

    <dt class="col-sm-2">Venue</dt>
    <dd class="col-sm-10">{{ $event->venue }}</dd>

    <dt class="col-sm-2">City</dt>
    <dd class="col-sm-10">{{ $event->city }}</dd>

    <dt class="col-sm-2">Description</dt>
    <dd class="col-sm-10">{{ $event->description }}</dd>
</dl>
    
@endsection