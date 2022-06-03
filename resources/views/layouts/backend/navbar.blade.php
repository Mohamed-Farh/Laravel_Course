<!--=================================
         preloader -->

<div id="pre-loader">
    <img alt="" src="{{ asset('Backend/images/pre-loader/loader-01.svg') }}">
</div>

<!--=================================
 preloader -->


<!--=================================
 header start-->

<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img alt="" src="{{ asset('Backend/images/logo-white.png') }}"></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img alt="" src="{{ asset('Backend/images/logo-icon-light.png') }}"></a>
    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
            <a class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"
               id="button-toggle"><i
                    class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        <li class="nav-item">
            <div class="search">
                <a class="search-btn not_click" href="javascript:void(0);"></a>
                <div class="search-box not-click">
                    <input class="not-click form-control" name="search" placeholder="Search" type="text"
                           value="">
                    <button class="search-button" type="submit"><i class="fa fa-search not-click"></i></button>
                </div>
            </div>
        </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item fullscreen">
            <a class="nav-link" href="#" id="btnFullscreen"><i class="ti-fullscreen"></i></a>
        </li>
        <li class="nav-item dropdown ">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link top-nav" data-toggle="dropdown"
               href="#"
               role="button">
                <i class="ti-bell"></i>
                <span class="badge badge-danger notification-status"> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                <div class="dropdown-header notifications">
                    <strong>Notifications</strong>
                    <span class="badge badge-pill badge-warning">05</span>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">New registered user <small
                        class="float-right text-muted time">Just
                        now</small> </a>
                <a class="dropdown-item" href="#">New invoice received <small
                        class="float-right text-muted time">22
                        mins</small> </a>
                <a class="dropdown-item" href="#">Server error report<small class="float-right text-muted time">7
                        hrs</small> </a>
                <a class="dropdown-item" href="#">Database report<small class="float-right text-muted time">1
                        days</small> </a>
                <a class="dropdown-item" href="#">Order confirmation<small class="float-right text-muted time">2
                        days</small> </a>
            </div>
        </li>
        <li class="nav-item dropdown ">
            <a aria-expanded="true" aria-haspopup="true" class="nav-link top-nav" data-toggle="dropdown"
               href="#"
               role="button"> <i class=" ti-view-grid"></i> </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-big">
                <div class="dropdown-header">
                    <strong>Quick Links</strong>
                </div>
                <div class="dropdown-divider"></div>
                <div class="nav-grid">
                    <a class="nav-grid-item" href="#"><i class="ti-files text-primary"></i><h5>New Task</h5></a>
                    <a class="nav-grid-item" href="#"><i class="ti-check-box text-success"></i><h5>Assign
                            Task</h5>
                    </a>
                </div>
                <div class="nav-grid">
                    <a class="nav-grid-item" href="#"><i class="ti-pencil-alt text-warning"></i><h5>Add
                            Orders</h5>
                    </a>
                    <a class="nav-grid-item" href="#"><i class="ti-truck text-danger "></i><h5>New Orders</h5>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown mr-30">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-pill user-avatar"
               data-toggle="dropdown"
               href="#" role="button">
                <img alt="avatar" src="images/profile-avatar.jpg">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">Michael Bean</h5>
                            <span>michael-bean@mail.com</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>Activity</a>
                <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>Messages</a>
                <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
                <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects <span
                        class="badge badge-info">6</span> </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
                <a class="dropdown-item" href="#"><i class="text-danger ti-unlock"></i>Logout</a>
            </div>
        </li>
    </ul>
</nav>

<!--=================================
 header End-->
