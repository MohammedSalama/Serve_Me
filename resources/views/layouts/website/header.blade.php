<!------------------------ Start header Section --------------------------->
<nav class="navbar">
    <div class="nav-right">
        <a class="logo" href="#">
            <img src=" {{ URL::asset('website/assets/images/logo.png') }} " alt="logo" />
        </a>
        <ul class="nav__links">
            <li><a class="active" href="#">الصفحة الرئيسية</a></li>
            <li><a href="#about">من نحن</a></li>
            <li><a href="#features">مميزات التطبيق</a></li>
            <li><a href="#app-screen">شاشات التطبيق</a></li>
            <li><a href="#">تواصل معنا</a></li>
        </ul>
    </div>
    <div class="nav__bars"><i class="fa fa-bars"></i></div>
    <div class="social__group nav-left">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</nav>

<header>
    <div class="container">
        <div class="header__content">
            <div class="row">
                <div class="header__content-details col-md-6 col-xs-12">
                    <div class="header__title">
                        <h1>{{ $slider -> title }}</h1>
                    </div>
                    <div class="header__text">
                        <p>
                            {{ $slider -> description }}
                        </p>
                    </div>
                    <div class="btn__group">
                        <a href="#"
                        ><i class="fab fa-google-play"></i> Google
                            Play
                        </a>
                        <a href="#"
                        ><i class="fab fa-apple"></i> App Store
                        </a>
                    </div>
                </div>
                <div class="header__content-img col-md-6 col-xs-12">
                    <img src=" {{ URL::asset('website/assets/images/hero-1-img.png') }} " alt="" />
                </div>
            </div>
        </div>
    </div>
</header>

<div class="before"></div>

<!-- sidebar -->
<div class="side__bar">
    <span class="close__sidebar"><i class="fa fa-times"></i></span>
    <a href="#">
        <img src=" {{ URL::asset('website/assets/images/logo.png') }} " alt="logo" />
    </a>
    <ul class="side__bar-links">
        <li><a href="index.html" class="navLink">الرئيسيه</a></li>
        <li><a href="#" class="navLink">من نحن</a></li>
        <li><a href="#" class="navLink">مميزات التطبيق</a></li>
        <li><a href="#" class="navLink">شاشات التطبيق</a></li>
        <li><a href="#" class="navLink">تواصل معنا</a></li>
    </ul>
    <div class="social__group">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</div>
<!------------------------ End header Section ----------------------------->
