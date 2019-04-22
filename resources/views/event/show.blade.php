@extends('layouts.app')

@section('content')

<h1>Event: {{ $event->name }}</h1>

<dl class="row">

    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $event->name }}</dd>

    <dt class="col-sm-3">Venue</dt>
    <dd class="col-sm-9">{{ $event->venue }}</dd>

    <dt class="col-sm-3">City</dt>
    <dd class="col-sm-9">{{ $event->city }}</dd>

    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9">{{ $event->description }}</dd>
</dl>
    
@endsection