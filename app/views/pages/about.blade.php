@extends('layouts.default')
@section('content')

<div class="profile-container">
    <div class="profile-header row">
        <div>
            <div class="header-fullname"><br/><h1>{{$about->title}}</h1><br/></div>
            
            <div class="header-information">
                {{$about->content}}
                <br/>
            </div>
        </div>
   </div>	

@stop