@extends('layouts.admin')
@section('content')
<style>
    p {
        line-height:normal;
    }
</style>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption"><a href="mailto:{{$contact->email}}">
                    <span style="font-weight: bold;color: #fb6e52;">{{$contact->name}}</span> ({{$contact->email}})
                            </a></span>
                <div class="widget-buttons">
                    <a href="#" data-toggle="maximize">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a href="#" data-toggle="collapse">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a href="#" data-toggle="dispose">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body">
                <div class="mail-body">
                    <div class="mail-info">
                        <div class="mail-date">
                            <span class="label label-info">
                                <i>{{$contact->created_at}}</i>
                            </span>
                        </div>
                    </div>
                    <div class="mail-text" style="text-align: justify;padding-top:10px">
                        {{$contact->message}}
                    </div>
                    <br>
                    <div class="mail-reply">
                        <div class="reply-form">
                            <div>
                                <a href="#">Reply</a> or <a href="#">Forward</a> this message...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop