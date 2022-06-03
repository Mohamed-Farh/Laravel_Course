@extends('layouts.admin_app')

@section('content')

    <!--=============Start content============== -->
    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0">{{__('الأقسام')}}</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        <li class="breadcrumb-item"><a class="default-color" href="{{ route('admin.dashboard.index') }}">{{__('الرئيسية')}}</a></li>
                        <li class="breadcrumb-item active">{{__('الأقسام')}}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--=============End content============== -->

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
