@extends('layouts.admin')
@section('content')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">Edit Categories</span>
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
                <form role="form" name="form" method="post" action="/admin/edit-categories/{{$article->id}}" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$article->title}}">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Category</label>
                                <span class="input-icon icon-right">
                                    <select name="category" id="category" class="form-control">
                                        @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <span class="input-icon icon-right">
                                    <textarea class="form-control" rows="5" name="summary" id="summary">{{$article->summary}}</textarea>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <span class="input-icon icon-right">
                                    <input type="file" class="form-control" id="file" name="image" placeholder="Image">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{asset($article->image_url)}}" alt="" class="thumb-100 shadow-all">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <span class="input-icon icon-right">
                                    <textarea class="form-control" rows="15" name="content" id="content">{{$article->content}}</textarea>
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="savePublish" value="1" class="btn btn-sky">Save and publish</button>
                            <button type="submit" name="saveUnPublish" value="0" class="btn btn-sky">Save without publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'content' );
    var formObj = document.form;
    formObj.category.value = '{{$article->category_id}}';
</script>
@stop