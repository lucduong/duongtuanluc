@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">Edit Slider</span>
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
                <form role="form" name="form" method="post" action="/admin/edit-slider/{{$slider->id}}" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Description</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{$slider->description}}">
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Order</label>
                                <span class="input-icon icon-right">
                                    <input type="text" class="form-control" id="order" name="order" placeholder="Order" value="{{$slider->order}}">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <span class="input-icon icon-right">
                                    <input type="file" class="form-control" id="file" name="image" placeholder="Image" onchange="reviewImage(this);">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="margin:20px 0; text-align:left;">
                            <img src="{{asset($slider->image_url)}}" alt="" class="shadow-all" style="" id="img-preview">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="updateSlider" value="1" class="btn btn-sky">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
@stop