@extends('radiusweb::layouts.app')
    
@section('content')
<div id=loginform>
<form method="POST" id=login name=login action="/login">
<table>
    <tr><td>ID:</td><td><input name=email id=email type=text length=20></td></tr>
    <tr><td>Password:</td><td><input name=password id=password type=password length=40></td></tr>
    <tr><td colspan=2><input type=button value=login> <a href=/resetpassword>Forgotten Password?</a>@csrf<div id=result></div></td></tr>
</table>
</form>
</div>
@endsection