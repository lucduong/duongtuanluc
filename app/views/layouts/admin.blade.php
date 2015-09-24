<!--
============================================================================
* COPYRIGHT (C) 2013 - 2014 DOU Networks. All rights reserved
* File     : Admin template
* Author   : Luc Duong
* Created  : 18:49 - Sep 02, 2014
============================================================================
-->
<?php 
    $currPage = Request::path();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Administration - DOU Networks</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="blank page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->

    <!-- Based CSS (S) -->
    {{ HTML::style('templates/admin/css/bootstrap.min.css') }}
    {{ HTML::style('templates/admin/css/font-awesome.min.css') }}
    {{ HTML::style('templates/admin/css/weather-icons.min.css') }}
    {{ HTML::script('templates/admin/js/jquery-2.0.3.min.js') }}
    {{ HTML::script('templates/admin/js/jquery-ui.min.js') }}
    <!-- Based CSS (E) -->

    <!-- Fonts (S) -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300"
        rel="stylesheet" type="text/css">
    <!-- Fonts (E) -->

    <!-- Style (S)-->
    <link id="app-link" href="{{ URL::asset('templates/admin/css/app.css') }}" rel="stylesheet"/>
    {{ HTML::style('templates/admin/css/font-customize.css') }}
    {{ HTML::style('templates/admin/css/typicons.min.css') }}
    {{ HTML::style('templates/admin/css/animate.min.css') }}
    {{ HTML::style('templates/admin/css/jquery-ui.structure.css') }}
    {{ HTML::style('templates/admin/css/jquery-ui.css') }}
    {{ HTML::style('templates/admin/css/jquery-ui.theme.css') }}
    <link id="skin-link" href="" rel="stylesheet" type="text/css"/>
    <!-- Style (E)-->

    <!-- Hack IE (S) -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Hack IE (E) -->
</head>

<body>
<!-- Loading (S) -->
@include('elements.loading')
<!-- Loading (E) -->

<!-- Navigation (S) -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
    <div class="navbar-container">
    <!-- LOGO (S) -->
    <div class="navbar-header pull-left">
        <a href="{{URL::to('admin')}}" class="navbar-brand">
            <small style="display:block;padding-top:8px;padding-left:10px">
                <!-- {{HTML::image("templates/admin/img/logo.png")}} -->
                Administration
            </small>
        </a>
    </div>
    <!-- LOGO (E) -->
    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="collapse-icon fa fa-bars"></i>
    </div>

    <!-- Account Area and Settings -->
    <div class="navbar-header pull-right">
    <div class="navbar-account">
    <ul class="account-area">
    <li>
        <a class="wave in dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
            <i class="icon fa fa-envelope"></i>
            @if ($contact_count)
                <span class="badge">{{$contact_count}}</span>
            @endif
            <?php //dd($contacts) ?>
        </a>
        @if ($contact_count)
        <!-- Contacts Dropdown (S) -->
        <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
            @foreach ($contacts as $contact)
            <li>
                <a href="{{URL::to('admin/view-contact/' . $contact->id)}}">
                    {{HTML::image("templates/admin/img/avatars/adam-jansen.jpg", Auth::user()->firstname, array('class' => 'message-avatar'))}}
                    <div class="message">
                        <span class="message-sender">
                            {{$contact->name}}
                        </span>
                        <span class="message-time">
                            {{$contact->created_at}}
                        </span>
                        <span class="message-subject">
                            {{$contact->subject}}
                        </span>
                        <span class="message-body">
                            {{$contact->message}}
                        </span>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
        <!-- Contacts Dropdown (E) -->
        @endif
    </li>
    <li>
        <a class="login-area dropdown-toggle" data-toggle="dropdown">
            <div class="avatar" title="View your public profile">
                {{HTML::image("templates/admin/img/avatars/adam-jansen.jpg", Auth::user()->firstname)}}
            </div>
            <section>
                <h2><span class="profile"><span>{{Auth::user()->firstname}}</span></span></h2>
            </section>
        </a>
        <!--Login Area Dropdown-->
        <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
            <li class="username"><a>{{Auth::user()->firstname}}</a></li>
            <li class="email"><a>{{Auth::user()->email}}</a></li>
            <!--Avatar Area-->
            <li>
                <div class="avatar-area">
                    {{HTML::image("templates/admin/img/avatars/adam-jansen.jpg", Auth::user()->firstname, array('class' => 'message-avatar'))}}
                    <span class="caption">Change Photo</span>
                </div>
            </li>
            <!--Avatar Area-->
            <li class="edit">
                <a href="profile.html" class="pull-left">Profile</a>
                <a href="#" class="pull-right">Setting</a>
            </li>
            <li class="dropdown-footer">
                <a href="/logout">
                    Sign out
                </a>
            </li>
        </ul>
        <!--/Login Area Dropdown-->
    </li>
    <!-- /Account Area -->
    <!--Note: notice that setting div must start right after account area list.
    no space must be between these elements-->
    </ul>
    </div>
</div>
<!-- /Account Area and Settings -->
</div>
</div>
</div>
<!-- Navigation (E) -->

<!-- Main Content (S) -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar sidebar-fixed" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input type="text" class="searchinput"/>
                <i class="searchicon fa fa-search"></i>

                <div class="searchhelper">Search anything</div>
            </div>
            <!-- Sidebar menu (S) -->
            @include('elements.menuleft')
            <!-- Sidebar menu (S) -->

        </div>
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb (S) -->
            <?php 
                $arr = explode('/', $currPage);
                $cnt = count($arr);
                $url = "/admin";
            ?>
            <div class="page-breadcrumbs breadcrumbs-fixed">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="/">Home</a>
                    </li>
                    @for ($i = 1; $i < $cnt; $i++)
                        @if ($i < $cnt - 1)
                            <?php $url .= ("/" . $arr[$i]); ?>
                            <li><a href="{{$url}}">{{$arr[$i]}}</a></li>
                        @else
                            <li class="active">{{$arr[$i]}}</li>
                        @endif
                    @endfor
                </ul>
            </div>
            <!-- Page Breadcrumb (E) -->

            <!-- Page Body (S) -->
            <div class="page-body">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                @if(count($errors))
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                @yield('content')
            </div>
            <!-- /Page Body (E) -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>
<!-- Main Content (E) -->

<!-- Basic Scripts (S) -->
{{ HTML::script('templates/admin/js/bootstrap.min.js') }}
{{ HTML::script('templates/admin/js/app.js') }}
<!-- Basic Scripts (E) -->

<!-- Related Scripts (S) -->
<!-- Related Scripts (E) -->
<script>
    $('.delete').click(function(){
        var a = confirm('Are you sure to delete it ?');
        if(a==false){
            return false;
        }
    });
</script>
</body>
</html>