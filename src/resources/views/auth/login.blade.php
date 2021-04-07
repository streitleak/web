@extends('radiusweb::layouts.app')
    
@section('content')
<form method="POST" id=login name=login action="/login">
<table>
    <tr><td>ID:</td><td><input name=account id=account type=text length=20></td></tr>
    <tr><td>ID:</td><td><input name=password id=password type=password length=40></td></tr>
    <tr><td colspan=2><input type=button value=login> <a href=/resetpassword>Forgotten Password?</a>@csrf</td></tr>
</table>
</form>
@endsection