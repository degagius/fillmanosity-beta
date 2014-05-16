@extends('layout')

@section('content')
<div class="row">
    <form class="container br-ltblue">
        <div class="input-group">
            <label for="email">Email</label><br/>
            <input class="input-lg" type="email" name="email"><br/>
            <label for="password">Password</label><br/>
            <input class="input-lg" type="password" name="password"><br/>
        </div>
    </form>
</div>
@stop