@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">Contacts</span>
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
            <div style="display:none">{{$seq = 1}}</div>
            <div class="widget-body">
                <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th style="text-align:center;">Read</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $data)
                        @if($data->count())
                            <tr>
                                <td>{{$seq++}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td class="center">{{$data->phone}}</td>
                                @if ($data->read==0)
                                    <td style="text-align:center;"><a href="javascript:void(0);" class="btn btn-xs btn-warning">Unread</a></td>
                                @else
                                    <td style="text-align:center;"><a href="javascript:void(0);" class="btn btn-xs btn-success">Read</a></td>
                                @endif
                                <td style="text-align:center;"><a href="/admin/view-contact/{{$data->id}}" class="btn btn-xs btn-primary">Detail</a> <a href="/admin/delete-contact/{{$data->id}}" class="btn btn-xs btn-danger delete">Delete</a></td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="7" class="text-center">There is no data to search</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop