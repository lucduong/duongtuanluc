@extends('layouts.default')
@section('content')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<section id="ccr-main-section">
	<div class="goole_map" id="goole_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.1177587621596!2d106.637997!3d10.802292000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d0099dbd18aaa24!2zVMOyYSBOaMOgIEUuVG93bg!5e0!3m2!1sen!2sus!4v1414210755226" width="100%" height="450" frameborder="0" style="border:0"></iframe>
	</div>
	
	<div class="container">


		<section id="ccr-left-section" class="col-md-8">

			<div class="current-page">
				<a href="/"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> Contact
			</div>

			<section id="ccr-contact-form">
				<br>
				<h3>Contact Us</h3>
				@if(Session::has('success'))
				    <div class="alert alert-success">
				        {{Session::get('success')}}
				    </div>
				@endif
                <form action="send-contact" method="post" id="form" role="form">
                        <div class="row">
                       		<div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                   	<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                       		<div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                   	<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <span class="input-icon icon-right">
                                        <textarea id="message" name="message" class="form-control" rows="10" required></textarea>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
			</section>
		</section>
		<section id="ccr-right-section" class="col-md-4">
			<section id="ccr-contact-sidebar">
					<p>
					<span>Contact Info</span>
					</p>
					<address>
						{{$contactInfo}}
					</address>
				<p>
					<span>Social Updates</span>
				</p>
				<ul>
		 			<li>
		 				<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
		 			</li>
		 			<li>
		 				<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
		 			</li>
		 			<li>
		 				<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
		 			</li>
		 			<li>
		 				<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
		 			</li>
		 		</ul>
			</section> <!-- /#ccr-contact-sidebar -->
		</section><!-- / .col-md-4  / #ccr-right-section -->


	</div><!-- /.container -->
</section>
<script type="text/javascript">
    CKEDITOR.replace( 'message',
    {
        toolbarGroups : [
		    { name: 'styles' },
		    { name: 'colors' },
		    { name: 'tools' },
		    { name: 'others' },
		]
    });

    var gmHtml = $('#goole_map').html();
    $('#goole_map').remove();
    $('#mainCntr').parent().prepend(gmHtml);
    
</script>
@stop