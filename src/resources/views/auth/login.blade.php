@extends('radiusweb::layouts.app')
    
@section('content')
<div id=loginform>
    {{ Form::open(array('url' => 'login')) }}
    <h1>Login</h1>
    
    <!-- if there are login errors, show them here -->
    <p>
    @if($errors != null)    
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
    @endif
    </p>
    
    <p>
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', Request::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
    </p>
    
    <p>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
    </p>
    
    <p>{{ Form::submit('Submit!') }}</p>
    {{ Form::close() }}
</div>
@endsection