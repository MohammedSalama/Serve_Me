<!--=================================
 jquery -->

<!-- jquery -->
<script src=" {{ URL::asset('admin/js/jquery-3.3.1.min.js') }} "></script>

<!-- plugins-jquery -->
<script src=" {{ URL::asset('admin/js/plugins-jquery.js') }} "></script>

<!-- plugin_path -->
<script type="text/javascript">var plugin_path = '{{ asset('admin/js') }}/';</script>

<script>var plugin_path = 'js/';</script>

<!-- chart -->
<script src=" {{ URL::asset('admin/js/chart-init.js') }} "></script>

<!-- calendar -->
<script src=" {{ URL::asset('admin/js/calendar.init.js') }} "></script>

<!-- charts sparkline -->
<script src=" {{ URL::asset('admin/js/sparkline.init.js') }} "></script>

<!-- charts morris -->
<script src=" {{ URL::asset('admin/js/morris.init.js') }} "></script>

<!-- datepicker -->
<script src=" {{ URL::asset('admin/js/datepicker.js') }} "></script>

<!-- sweetalert2 -->
<script src=" {{ URL::asset('admin/js/sweetalert2.js') }} "></script>

<!-- toastr -->
@yield('js')
<script src=" {{ URL::asset('admin/js/toastr.js') }} "></script>

<!-- validation -->
<script src=" {{ URL::asset('admin/js/validation.js') }} "></script>

<!-- lobilist -->
<script src=" {{ URL::asset('admin/js/lobilist.js') }} "></script>

<!-- custom -->
<script src=" {{ URL::asset('admin/js/custom.js') }} "></script>
