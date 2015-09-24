@extends('layouts.admin')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="widget">
                <div class="widget-header ">
                    <span class="widget-caption">Articles</span>
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
                    <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                        <thead>
                            <tr>
                                <th>Seq</th>
                                <th>Description</th>
                                <th>Image Path</th>
                                <th>Order</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($sliders as $slider)
                                @if($slider->count())
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$slider->description}}</td>
                                    <td>{{$slider->image_url}}</td>
                                    <td>{{$slider->order}}</td>
                                    <td>{{$slider->created_at}}</td>
                                    <td>{{$slider->updated_at}}</td>
                                    <td><a href="/admin/edit-slider/{{$slider->id}}" class="btn btn-xs btn-primary">Edit</a> <a href="/admin/delete-slider/{{$slider->id}}" class="btn btn-xs btn-danger delete">Delete</a></td>
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