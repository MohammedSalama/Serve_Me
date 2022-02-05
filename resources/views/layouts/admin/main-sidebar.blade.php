<!-- Left Sidebar start-->
<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">HOME</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{ URL::route('admin_dashboard') }}">Reload</a> </li>
                    <li> <a href="{{ URL::route('serve') }}">Website</a> </li>
                </ul>
            </li>
            <!-- menu title -->
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Settings </li>
            <!-- menu item Elements-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                    <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Settings</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="elements" class="collapse" data-parent="#sidebarnav">
                    <li><a href="{{ URL::route('serve.index') }}">Signed</a></li>
                    <li><a href="{{ URL::route('slider.index') }}">Sliders</a></li>
                    <li><a href="{{ URL::route('about.index') }}">About Us</a></li>
                    <li><a href="{{ URL::route('screen.index') }}">Screen Section</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- Left Sidebar End-->
