@extends('layout')

@section('content')
        <div class="row br-white">
            <h1 class="text-center">Users</h1>
            @foreach($users as $user)
                <p class="text-center">{{ $user->name }}</p>
            @endforeach
        </div>
@stop