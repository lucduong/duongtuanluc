@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="col-xs-12 col-md-12">
	    <div class="widget">
	        <div class="widget-header ">
	            <span class="widget-caption">List About</span>
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
                                <th>Title</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Feature</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($abouts as $about)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$about->title}}</td>
                                <td>{{$about->created_at}}</td>
                                <td>{{$about->updated_at}}</td>
                                <td><a href="{{asset('admin/edit-about/')}}/{{$about->id}}" class="btn btn-xs btn-primary">Edit</a> <a href="{{asset('admin/delete-about/')}}/{{$about->id}}" class="btn btn-xs btn-danger delete">Delete</a></td>
                                <td>
                                    @if ($about->publish)
                                        <a href="javascript:void(0);" class="btn btn-palegreen btn-xs" style="width:70px">published</a>
                                    @else
                                        <a href="javascript:void(0);" class="btn btn-darkorange btn-xs" style="width:70px"> draf </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
	</div>
</div>

@stop