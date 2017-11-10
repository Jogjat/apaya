@extends('layouts.app')

@section('content')
@section('logout')
<a href="{{ route('user.logout') }}"
 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
 Logout
</a>
<form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
 {{ csrf_field() }}
</form>
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <b>USER DASHBOARD</b></br>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
