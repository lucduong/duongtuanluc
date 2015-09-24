@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">Edit menu</span>
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
                <form role="form" method="post" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Menu name" value="{{$menu->name}}">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="parent">Parent menu</label>
                                <span class="input-icon icon-right">
                                    <select name="parent" id="parent" class="form-control">
                                        <option value="0">I am parent</option>
                                        @foreach ($parents as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="url">Menu URL</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Menu URL" value="{{$menu->url}}">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="order">Order</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="order" name="order" placeholder="Order" value="{{$menu->order}}">
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
<script>
    var formObj = document.form;
    formObj.parent.value = '{{$menu->parent_id}}';
</script>
@stop