{{--
============================================================================
* COPYRIGHT (C) 2013 - 2014 DOU Networks. All rights reserved
* File     : Menu left
* Author   : Luc Duong
* Created  : 23:30 - Sep 05, 2014
============================================================================
--}}

<ul class="nav sidebar-menu">
    <!--Dashboard (S) -->
    <li <?php if ($currPage == 'admin') echo 'class="mn active"'; ?>>
        <a href="{{URL::to('admin')}}">
            <i class="menu-icon glyphicon glyphicon-home"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
    </li>
    <!--Dashboard (E) -->

    <!-- Articles (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Articles </span>

            <i class="menu-expand"></i>
        </a>

        <ul class="submenu">
            <li <?php if ($currPage == 'admin/articles') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/articles')}}">
                    <span class="menu-text">Articles</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-article') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-article')}}">
                    <span class="menu-text">Add New</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Articles (E) -->

    <!-- About (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-table"></i>
            <span class="menu-text"> Abouts </span>

            <i class="menu-expand"></i>
        </a>

        <ul class="submenu">
            <li <?php if ($currPage == 'admin/abouts') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/abouts')}}">
                    <span class="menu-text">Abouts</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-about') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-about')}}">
                    <span class="menu-text">Add About</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- About (S) -->

    <!-- Contacts (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-envelope-o"></i>
            <span class="menu-text"> Contact </span>
            <i class="menu-expand"></i>
        </a>

        <ul class="submenu">
            <li <?php if ($currPage == 'admin/info') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/info')}}">
                    <span class="menu-text">Contact Infomation</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/contacts') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/contacts')}}">
                    <span class="menu-text">Contacts</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/compose-msg') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/compose-msg')}}">
                    <span class="menu-text">Compose Message</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Contacts (E) -->

    <!-- Categories (S) -->
    <!-- <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon glyphicon glyphicon-paperclip"></i>
            <span class="menu-text"> Categories </span>

            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li <?php if ($currPage == 'admin/categories') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/categories')}}">
                    <span class="menu-text">Categories</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-category') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-category')}}">
                    <span class="menu-text">Add New</span>
                </a>
            </li>
        </ul>
    </li> -->
    <!-- Categories (E) -->

    <!-- Users (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Users </span>

            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li <?php if ($currPage == 'admin/users') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/users')}}">
                    <span class="menu-text">Users</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-user') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-user')}}">
                    <span class="menu-text">Add New</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Users (E) -->   

    <!-- Sliders (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-picture-o"></i>
            <span class="menu-text"> Sliders </span>

            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li <?php if ($currPage == 'admin/sliders') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/sliders')}}">
                    <span class="menu-text">Sliders</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-slider') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-slider')}}">
                    <span class="menu-text">Add New</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Sliders (E) -->  

    <!-- Menus (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-list-ul"></i>
            <span class="menu-text"> Menus </span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li <?php if ($currPage == 'admin/menus') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/menus')}}">
                    <span class="menu-text">Menus</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-menu') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-menu')}}">
                    <span class="menu-text">Add New</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Menus (E) -->  

    <!-- Jobs (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-suitcase"></i>
            <span class="menu-text"> Jobs </span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li <?php if ($currPage == 'admin/job-type') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/job-type')}}">
                    <span class="menu-text">Job Type</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/jobs') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/jobs')}}">
                    <span class="menu-text">Jobs</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-job') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-job')}}">
                    <span class="menu-text">Add New</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Jobs (E) -->

    <!-- Products (S) -->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-suitcase"></i>
            <span class="menu-text"> Products </span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li <?php if ($currPage == 'admin/products') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/products')}}">
                    <span class="menu-text">Products</span>
                </a>
            </li>
            <li <?php if ($currPage == 'admin/add-product') echo 'class="mn active"'; ?>>
                <a href="{{URL::to('admin/add-product')}}">
                    <span class="menu-text">Add New</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Products (E) -->

    <!-- Subscribes (S) -->
    <li <?php if ($currPage == 'admin/subscribes') echo 'class="mn active"'; ?>>
        <a href="{{URL::to('admin/subscribes')}}">
            <i class="menu-icon fa fa-heart"></i>
            <span class="menu-text"> Subscribers </span>
        </a>
    </li>
    <!-- Subscribes (E) --> 
</ul>