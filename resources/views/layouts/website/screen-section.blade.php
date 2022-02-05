<!--=====  Start App Screen Section  =====-->
<div id="app-screen" class="app-screen__container">
    <div class="container">
        <div class="app-screen__header">
            <h2>{{ $screen -> title }}</h2>
            <p>
                {{ $screen -> description }}
            </p>
        </div>
    </div>
    <div class="app-screen">
        <div class="container">
            <div class="owl-carousel" dir="ltr">
                <div>
                    <img src=" {{ URL::asset('website/assets/images/slide1.png') }} " alt="" />
                </div>
                <div>
                    <img src=" {{ URL::asset('website/assets/images/slide5.png') }} " alt="" />
                </div>
                <div>
                    <img src=" {{ URL::asset('website/assets/images/slide4.png') }} " alt="" />
                </div>
                <div>
                    <img src=" {{ URL::asset('website/assets/images/slide3.png') }} " alt="" />
                </div>
                <div>
                    <img src=" {{ URL::asset('website/assets/images/slide2.png') }} " alt="" />
                </div>
            </div>
            <div class="mobile__frame">
                <img src=" {{ URL::asset('website/assets/images/mockup.png') }} " alt="" />
            </div>
        </div>
    </div>
</div>
<!--=====  End App Screen Section  =====-->
