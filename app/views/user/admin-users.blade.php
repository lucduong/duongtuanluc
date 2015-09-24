@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="widget">
                <div class="widget-header ">
                    <span class="widget-caption">Users</span>
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
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Feature</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->firstname}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if ($user->role == 'admin')
                                        <a href="javascript:void(0);" class="btn btn-darkorange btn-xs" style="width:70px">{{$user->role}}</a>
                                    @else
                                        <a href="javascript:void(0);" class="btn btn-palegreen btn-xs" style="width:70px"> {{$user->role}} </a>
                                    @endif
                                </td>                                
                                <td>{{$user->created_at}}</td>
                                <td><a href="{{asset('admin/edit-user/')}}/{{$user->id}}" class="btn btn-xs btn-primary">Edit</a> <a href="{{asset('admin/delete-user/')}}/{{$user->id}}" class="btn btn-xs btn-danger delete">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

@stop