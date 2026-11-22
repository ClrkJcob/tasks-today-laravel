
@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="panel">
    <h1>Developer Profile</h1>

    @if($user)
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    @else
        <p>No user profile found.</p>
    @endif
</div>
@endsection
