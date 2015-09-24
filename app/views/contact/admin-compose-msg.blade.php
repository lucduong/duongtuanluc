@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

Compose message here (Not implement yet)

@stop