<!--=====  Start About Section  =====-->
<div id="about" class="about__container">
    <div class="about__content container">
        <div class="row">
            <div class="about__content-details col-md-6 col-xs-12">
                <div class="about__title">
                    <h1 class="heading">{{ $about -> title }}</h1>
                </div>
                <div class="about__text">
                    <p>
                        {{ $about -> description }}
                    </p>
                </div>
                <div class="btn__group btn__download">
                    <a href="#">
                        <i class="fab fa-google-play"></i> Google
                        Play
                    </a>
                    <a href="#">
                        <i class="fab fa-apple"></i> App Store
                    </a>
                </div>
            </div>
            <div class="about__content-img col-md-6 col-xs-12">
                <img src=" {{ URL::asset('website/assets/images/hero-5-img.png') }} " alt="" />
            </div>
        </div>
    </div>
</div>
<!--=====  End About Section  =====-->
