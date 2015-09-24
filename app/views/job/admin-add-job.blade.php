@extends('layouts.admin')
@section('content')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">Add new Job</span>
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
                <form role="form" method="post" action="add-job" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Job Type</label>
                                <span class="input-icon icon-right">
                                    <select name="jobtype" id="jobtype" class="form-control">
                                        @foreach ($jobTypes as $jobType)
                                            <option value="{{$jobType->id}}">{{$jobType->title}}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title">Description</label>
                                <span class="input-icon icon-right">
                                    <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <span class="input-icon icon-right">
                                    <input type="file" class="form-control" id="image" name="image" placeholder="Image" onchange="reviewImage(this);">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Due Date</label>
                                 <span class="input-icon icon-right">
                                    <input type="input" class="form-control" id="duedate" name="duedate" placeholder="Due date">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="margin:20px 0; text-align:left;">
                            <img src="http://localhost/media/images/2014-10/noimg.jpg" alt="" class="shadow-all" style="max-width:500px;max-height:300px;" id="img-preview">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <span class="input-icon icon-right">
                                    <textarea class="form-control" rows="15" name="content" id="content"></textarea>
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="savePublish" value="1" class="btn btn-sky">Save and publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'content', {height : '500px'});
</script>
<script>
    $(function() {

        //format type date is yyyy/mm/dd
        var date = new Date();
        var day = date.getDate() +7;
        $("#duedate").val(date.getFullYear()+"/"+date.getMonth()+"/"+ day);
        $('#duedate').datepicker({dateFormat: 'yy/mm/dd'});
    });
</script>

<!-- Preview image selected before upload -->
<script type="text/javascript">
    function reviewImage(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<!-- set Due date -->
@stop