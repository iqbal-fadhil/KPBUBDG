@extends("layout")
@section("content")
{{ Form::open() }}
@if (isset($error))
{{ $error }}<br />
@endif
{{ Form::label("username", "Username") }}
{{ Form::text("username") }}
{{ Form::label("password", "Password") }}
{{ Form::password("password") }}
{{ Form::submit("login") }}
{{ Form::close() }}
@stop