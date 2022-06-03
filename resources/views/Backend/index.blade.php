@extends('layouts.admin_app')

@section('content')


    <div class="content-wrapper">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="mb-0"> Dashboard</h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                                    <li class="breadcrumb-item"><a class="default-color" href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- widgets -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                  <span class="text-danger">
                    <i aria-hidden="true" class="fa fa-bar-chart-o highlight-icon"></i>
                  </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">Visitors</p>
                                            <h4>65,650</h4>
                                        </div>
                                    </div>
                                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                        <i aria-hidden="true" class="fa fa-exclamation-circle mr-1"></i> 81% lower
                                        growth
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                  <span class="text-warning">
                    <i aria-hidden="true" class="fa fa-shopping-cart highlight-icon"></i>
                  </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">Orders</p>
                                            <h4>656</h4>
                                        </div>
                                    </div>
                                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                        <i aria-hidden="true" class="fa fa-bookmark-o mr-1"></i> Total sales
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                  <span class="text-success">
                    <i aria-hidden="true" class="fa fa-dollar highlight-icon"></i>
                  </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">Revenue</p>
                                            <h4>$65656</h4>
                                        </div>
                                    </div>
                                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                        <i aria-hidden="true" class="fa fa-calendar mr-1"></i> Sales Per Week
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                  <span class="text-primary">
                    <i aria-hidden="true" class="fa fa-twitter highlight-icon"></i>
                  </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">Followers</p>
                                            <h4>62,500+</h4>
                                        </div>
                                    </div>
                                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                        <i aria-hidden="true" class="fa fa-repeat mr-1"></i> Just Updated
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Orders Status widgets-->
                    <div class="row">
                        <div class="col-xl-4 mb-30">
                            <div class="card card-statistics h-100">
                                <!-- action group -->
                                <div class="btn-group info-drop">
                                    <button aria-expanded="false" aria-haspopup="true"
                                            class="dropdown-toggle-split text-muted"
                                            data-toggle="dropdown" type="button"><i class="ti-more"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                                        <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View all</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Market summary</h5>
                                    <h4>$50,500 </h4>
                                    <div class="row mt-20">
                                        <div class="col-4">
                                            <h6>Apple</h6>
                                            <b class="text-info">+ 82.24 % </b>
                                        </div>
                                        <div class="col-4">
                                            <h6>Instagram</h6>
                                            <b class="text-danger">- 12.06 % </b>
                                        </div>
                                        <div class="col-4">
                                            <h6>Google</h6>
                                            <b class="text-warning">+ 24.86 % </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="scrollbar-x text-center" id="sparkline2"></div>
                            </div>
                        </div>
                        <div class="col-xl-8 mb-30">
                            <div class="card h-100">
                                <div class="btn-group info-drop">
                                    <button aria-expanded="false" aria-haspopup="true"
                                            class="dropdown-toggle-split text-muted"
                                            data-toggle="dropdown" type="button"><i class="ti-more"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                                        <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View all</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-block d-md-flexx justify-content-between">
                                        <div class="d-block">
                                            <h5 class="card-title">Site Visits Growth </h5>
                                        </div>
                                        <div class="d-flex">
                                            <div class="clearfix mr-30">
                                                <h6 class="text-success">Income</h6>
                                                <p>+584</p>
                                            </div>
                                            <div class="clearfix  mr-50">
                                                <h6 class="text-danger"> Outcome</h6>
                                                <p>-255</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="morris-area" style="height: 320px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 mb-30">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Customer Feedback </h5>
                                    <div class="row mb-30">
                                        <div class="col-md-6">
                                            <div class="clearfix">
                                                <p class="mb-10 float-left">Positive</p>
                                                <i class="mb-10 text-success float-right fa fa-arrow-up"> </i>
                                            </div>
                                            <div class="progress progress-small">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                                     class="skill2-bar bg-success" role="progressbar"
                                                     style="width: 70%"></div>
                                            </div>
                                            <h4 class="mt-10 text-success">8501</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="clearfix">
                                                <p class="mb-10 float-left">Negative</p>
                                                <i class="mb-10 text-danger float-right fa fa-arrow-down"> </i>
                                            </div>
                                            <div class="progress progress-small">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30"
                                                     class="skill2-bar bg-danger" role="progressbar"
                                                     style="width: 30%"></div>
                                            </div>
                                            <h4 class="mt-10 text-danger">3251</h4>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper" style="width: 100%; margin: 0 auto;">
                                        <div id="canvas-holder">
                                            <canvas id="canvas3" width="550"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="tab nav-border" style="position: relative;">
                                        <div class="d-block d-md-flex justify-content-between">
                                            <div class="d-block w-100">
                                                <h5 class="card-title">Best Sellers</h5>
                                            </div>
                                            <div class="d-block d-md-flex nav-tabs-custom">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a aria-controls="months" aria-selected="true"
                                                           class="nav-link active show"
                                                           data-toggle="tab" href="#months" id="months-tab"
                                                           role="tab"> Months</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a aria-controls="year" aria-selected="false" class="nav-link"
                                                           data-toggle="tab"
                                                           href="#year" id="year-tab" role="tab">Year </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div aria-labelledby="months-tab" class="tab-pane fade active show"
                                                 id="months"
                                                 role="tabpanel">
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/05.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Supercharge your motivation</h6>
                                                        <p class="sm-mb-5 d-block">I truly believe Augustine’s words are
                                                            true. </p>
                                                        <span class="mb-0">by - <b
                                                                class="text-info">PotenzaUser</b></span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-primary mb-0"><b>45,436</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-secondary mb-0"><b>$05,236</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/02.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Helen keller a teller seller</h6>
                                                        <p class="sm-mb-5 d-block">We also know those epic stories,
                                                            those
                                                            modern.</p>
                                                        <span class="mb-0">by - <b
                                                                class="text-warning">WebminUser</b> </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-success mb-0"><b>23,462</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-danger mb-0"><b>$166</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/03.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">The other virtues practice</h6>
                                                        <p class="sm-mb-5 d-block">One of the most difficult aspects of
                                                            achieving. </p>
                                                        <span class="mb-0">by - <b
                                                                class="text-danger">TheCorps</b> </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-warning mb-0"><b>5,566</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-info mb-0"><b>$4,126</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/04.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">You will begin to realise</h6>
                                                        <p class="sm-mb-5 d-block">Remind yourself you have nowhere to
                                                            go
                                                            except. </p>
                                                        <span class="mb-0">by - <b
                                                                class="text-success">PGSinfotech</b> </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-dark mb-0"><b>5,446</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-success mb-0"><b>$436</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-labelledby="year-tab" class="tab-pane fade" id="year"
                                                 role="tabpanel">
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/09.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Walk out 10 years into</h6>
                                                        <p class="sm-mb-5 d-block">Understanding the price and having
                                                            the
                                                            willingness to pay. </p>
                                                        <span class="mb-0">by - <b
                                                                class="text-danger">TheZayka</b> </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-dark mb-0"><b>12,549</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="theme-color mb-0"><b>$1,656</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/06.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Step out on to the path</h6>
                                                        <p class="sm-mb-5 d-block">Success to you and then pull it out
                                                            when
                                                            you are.</p>
                                                        <span class="mb-0">by - <b
                                                                class="text-info">CarDealer</b> </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-primary mb-0"><b>1,366</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-secondary mb-0"><b>$4,536</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/07.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Briefly imagine that you</h6>
                                                        <p class="sm-mb-5 d-block">Motivators for your personality and
                                                            your
                                                            personal goals. </p>
                                                        <span class="mb-0">by - <b
                                                                class="text-success">SamMartin</b> </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-success mb-0"><b>465</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-danger mb-0"><b>$499</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img alt="" class="img-fluid" src="images/blog/08.jpg">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">You continue doing what</h6>
                                                        <p class="sm-mb-5 d-block">The first thing to remember about
                                                            success
                                                            is that. </p>
                                                        <span class="mb-0">by - <b
                                                                class="text-warning">Cosntro</b> </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-warning mb-0"><b>4,456</b></h5>
                                                        <span>Sales</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-info mb-0"><b>$6,485</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Best Selling Items</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-20">
                                            <div class="media">
                                                <div class="position-relative">
                                                    <img alt="" class="img-fluid mr-15 avatar-small"
                                                         src="images/item/01.png">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0">Car dealer <span
                                                            class="float-right text-danger"> 8,561</span>
                                                    </h6>
                                                    <p>Automotive WordPress Theme </p>
                                                </div>
                                            </div>
                                            <div class="divider dotted mt-20"></div>
                                        </li>
                                        <li class="mb-20">
                                            <div class="media">
                                                <div class="position-relative clearfix">
                                                    <img alt="" class="img-fluid mr-15 avatar-small"
                                                         src="images/item/02.png">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0">Webster <span
                                                            class="float-right text-warning"> 6,213</span>
                                                    </h6>
                                                    <p>Multi-purpose HTML5 Template </p>
                                                </div>
                                            </div>
                                            <div class="divider dotted mt-20"></div>
                                        </li>
                                        <li class="mb-20">
                                            <div class="media">
                                                <div class="position-relative">
                                                    <img alt="" class="img-fluid mr-15 avatar-small"
                                                         src="images/item/03.png">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0">The corps <span
                                                            class="float-right text-success"> 2,926</span>
                                                    </h6>
                                                    <p> Multi-Purpose WordPress Theme </p>
                                                </div>
                                            </div>
                                            <div class="divider dotted mt-20"></div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="position-relative clearfix">
                                                    <img alt="" class="img-fluid mr-15 avatar-small"
                                                         src="images/item/04.png">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0">Sam martin <span
                                                            class="float-right text-warning">6,213 </span>
                                                    </h6>
                                                    <p>Personal vCard Resume WordPress Theme </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-30">
                            <div class="card h-100">
                                <div class="btn-group info-drop">
                                    <button aria-expanded="false" aria-haspopup="true"
                                            class="dropdown-toggle-split text-muted"
                                            data-toggle="dropdown" type="button"><i class="ti-more"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                                        <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View all</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Site Visits Growth </h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-danger">Income</h6>
                                            <p class="text-danger">+584</p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-info">Outcome</h6>
                                            <p class="text-info">-255</p>
                                        </div>
                                    </div>
                                    <div id="morris-line" style="height: 320px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="p-4 text-center bg" style="background: url({{ asset('backend/images/bg/01.jpg') }});">
                                    <h5 class="mb-70 text-white position-relative">Michael Bean </h5>
                                    <div class="btn-group info-drop">
                                        <button aria-expanded="false" aria-haspopup="true"
                                                class="dropdown-toggle-split text-white" data-toggle="dropdown"
                                                type="button"><i
                                                class="ti-more"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i> Add
                                                task</a>
                                            <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i>
                                                Edit
                                                Profile</a>
                                            <a class="dropdown-item" href="#"><i class="text-success ti-user"></i> View
                                                Profile</a>
                                            <a class="dropdown-item" href="#"><i class="text-secondary ti-info"></i>
                                                Contact
                                                Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body text-center position-relative">
                                    <div class="avatar-top">
                                        <img alt="" class="img-fluid w-25 rounded-circle " src="images/team/13.jpg">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mt-30">
                                            <b>Files Saved</b>
                                            <h4 class="text-success mt-10">1582</h4>
                                        </div>
                                        <div class="col-sm-4 mt-30">
                                            <b>Memory Used </b>
                                            <h4 class="text-danger mt-10">58GB</h4>
                                        </div>
                                        <div class="col-sm-4 mt-30">
                                            <b>Spent Money</b>
                                            <h4 class="text-warning mt-10">352,6$</h4>
                                        </div>
                                    </div>
                                    <div class="divider mt-20"></div>
                                    <p class="mt-30">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
                                    <p class="mt-10">michael@webmin.com</p>
                                    <div class="social-icons color-icon mt-20">
                                        <ul>
                                            <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social-github"><a href="#"><i class="fa fa-github"></i></a></li>
                                            <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a>
                                            </li>
                                            <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="calendar-main mb-30">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-12 sm-mb-30">
                                        <a class="btn btn-primary btn-block m-t-20" data-target="#add-category"
                                           data-toggle="modal"
                                           href="#">
                                            <i class="fa fa-plus pr-2"></i> Create New
                                        </a>
                                        <div class="m-t-20" id="external-events">
                                            <br>
                                            <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                            <div class="external-event bg-success fc-event">
                                                <i class="fa fa-circle mr-2 vertical-middle"></i>New Theme Release
                                            </div>
                                            <div class="external-event bg-info fc-event">
                                                <i class="fa fa-circle mr-2 vertical-middle"></i>My Event
                                            </div>
                                            <div class="external-event bg-warning fc-event">
                                                <i class="fa fa-circle mr-2 vertical-middle"></i>Meet manager
                                            </div>
                                            <div class="external-event bg-danger fc-event">
                                                <i class="fa fa-circle mr-2 vertical-middle"></i>Create New theme
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div id="calendar"></div>
                                <div class="modal" id="event-modal" role="dialog" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add New Event</h5>
                                                <button aria-label="Close" class="close" data-dismiss="modal"
                                                        type="button">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body p-20"></div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-dismiss="modal" type="button">Close
                                                </button>
                                                <button class="btn btn-success save-event" type="button">Create event
                                                </button>
                                                <button class="btn btn-danger delete-event" data-dismiss="modal"
                                                        type="button">Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Add Category -->
                                <div class="modal" id="add-category" role="dialog" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add a category</h5>
                                                <button aria-hidden="true" class="close" data-dismiss="modal"
                                                        type="button">
                                                    &times;
                                                </button>
                                            </div>
                                            <div class="modal-body p-20">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" name="category-name"
                                                                   placeholder="Enter name" type="text"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white"
                                                                    data-placeholder="Choose a color..."
                                                                    name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-dismiss="modal" type="button">Close
                                                </button>
                                                <button class="btn btn-success save-category" data-dismiss="modal"
                                                        type="button">Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=================================
                     wrapper -->

                    <!--=================================
                     footer -->

                    <footer class="p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center text-md-left">
                                    <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>.
                                        <a href="#"> Webmin </a> All Rights Reserved.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="text-center text-md-right">
                                    <li class="list-inline-item"><a href="#">Terms & Conditions </a></li>
                                    <li class="list-inline-item"><a href="#">API Use Policy </a></li>
                                    <li class="list-inline-item"><a href="#">Privacy Policy </a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>

                </div><!-- main content wrapper end-->


@endsection