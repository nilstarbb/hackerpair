@extends('layouts.app')

@section('content')

<h1>Events</h1>

<div>
    <ul>
    @forelse ($events as $event) 
        <li>{{ $event->name }}</li>
    @empty 
        No events found!</li>
    @endforelse 
    </ul>
    {!! $events->links() !!}
</div>
    
@endsection