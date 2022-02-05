<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src=" {{ URL::asset('admin/images/pre-loader/loader-01.svg') }} " alt="">
    </div>

    <!--=================================
     preloader -->


   @include('layouts.admin.main-header')

    <!--=================================
     Main content -->

    <div class="container-fluid">
        <div class="row">
          @include('layouts.admin.main-sidebar')

            <!--=================================
           wrapper -->

            <div class="content-wrapper">
                @yield('content')

                <!--=================================
                 wrapper -->

               @include('layouts.admin.footer')
            </div><!-- main content wrapper end-->
        </div>
    </div>
</div>

<!--=================================
 footer -->



@include('layouts.admin.script')
</body>
</html>
