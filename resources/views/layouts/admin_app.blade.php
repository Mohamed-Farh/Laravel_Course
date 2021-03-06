<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>

    @include('layouts.backend.head')


</head>

<body>

    <div class="wrapper">

            @include('layouts.backend.navbar')

        <div class="container-fluid">
            <div class="row">

                @include('layouts.backend.sidebar')

                <div class="content-wrapper">

                    @yield('content')

                    @include('layouts.backend.footer')

                </div>

            </div>

        </div>

        @include('layouts.backend.footerScripts')


    </div>


</body>

</html>
