@extends('layouts.app')

@section('content')

<h1>Events</h1>

<div>
    <ul>
    @forelse ($events as $event) 
    <li><a href="{{ route('events.show',['slug'=>$event->slug]) }}">{{ $event->name }}</a></li>
    @empty 
        No events found!</li>
    @endforelse 
    </ul>
    {!! $events->links() !!}
</div>
    
@endsection