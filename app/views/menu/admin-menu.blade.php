@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="widget">
                <div class="widget-header ">
                    <span class="widget-caption">Menus</span>
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
                                <th>Name</th>
                                <th>Url</th>
                                <th>Parent</th>
                                <th>Order</th>
                                <th>Feature</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($arrMenus as $menu)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$menu->name}}</td>
                                <td>{{$menu->url}}</td>
                                <td>{{$menu->parentName()}}</td>
                                <td>{{$menu->order}}</td>
                                <td><a href="{{asset('admin/edit-menu')}}/{{$menu->id}}" class="btn btn-xs btn-primary">Edit</a> <a href="{{asset('admin/delete-menu')}}/{{$menu->id}}" class="btn btn-xs btn-danger delete">Delete</a></td>
                                <td>
                                    @if ($menu->act_flg)
                                        <a href="javascript:void(0);" class="btn btn-palegreen btn-xs" style="width:70px">activated</a>
                                    @else
                                        <a href="javascript:void(0);" class="btn btn-darkorange btn-xs" style="width:70px">unactive</a>
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