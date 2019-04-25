@extends('layouts.app')

@section('content')

<h1>Users</h1>

@forelse ($users as $user)
    <li>{{ $user->name }} ({{ $user->email }})</li>
@empty
    <li>No registered users</li> 
@endforelse

@endsection
