@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="col-xs-12 col-md-12">
	    <div class="widget">
	        <div class="widget-header ">
	            <span class="widget-caption">List Subscribers</span>
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
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($subscribes as $subscribe)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$subscribe->email}}</td>
                                <td>
                                    @if ($subscribe->act_flg)
                                        <a href="javascript:void(0);" class="btn btn-palegreen btn-xs" style="width:70px">subscribed</a>
                                    @else
                                        <a href="javascript:void(0);" class="btn btn-darkorange btn-xs" style="width:70px"> un-subscribed </a>
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