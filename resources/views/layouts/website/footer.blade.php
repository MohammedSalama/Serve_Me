<!------------------------ Start footer Section --------------------------->
<footer>
    <div class="footer__container">
        <div class="container">
            <div class="footer_content">
                <a class="footer__logo" href="#"><img src=" {{ URL::asset('website/assets/images/logo.png') }} " alt=""/></a>
                <div class="btn__group">
                    <a href="#"><i class="fab fa-google-play"></i> Google Play</a>
                    <a href="#"><i class="fab fa-apple"></i> App Store</a>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="copyright__footer">
                    <div>
                                <span>
                                    جميع الحقوق محفوظه ل
                                    <a href="{{ route('serve') }}">إخـدمـنـى</a>
                                </span>
                    </div>
                    <a href="{{ route('serve') }}"><img src=" {{ URL::asset('website/assets/images/logo1.png') }} " alt=""/></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--==================== SCROLL TOP ====================-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="fa fa-arrow-up scrollup__icon"></i>
</a>
<!------------------------ End footer Section ----------------------------->
