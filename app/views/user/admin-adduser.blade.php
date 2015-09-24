@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">Add new user</span>
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
                <form role="form" method="post" action="add-article" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <span class="input-icon icon-right">
                                    <select name="role" id="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="repassword">Re-Password</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="repassword" name="repassword" placeholder="Re-Password">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="save" value="1" class="btn btn-sky">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop