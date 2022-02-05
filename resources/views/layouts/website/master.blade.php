<!DOCTYPE html>
<html lang="ar" dir="rtl">
@include('layouts.website.head')

<body>
@include('layouts.website.header')

<!------------------------ Start content Section --------------------------->
<main>
    @include('layouts.website.start-section')

    @include('layouts.website.features')

   @include('layouts.website.screen-section')

   @include('layouts.website.email')
</main>
<!------------------------ End content Section ----------------------------->

@include('layouts.website.footer')

@include('layouts.website.script')
</body>
</html>
