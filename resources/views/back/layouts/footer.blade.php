<footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.

</footer>
@yield('js')
</div>
<!-- End Page wrapper  -->

</div>

<!-- End Wrapper -->

<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{asset('back/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{asset('back/dist/js/jquery-ui.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('back/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('back/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('back/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('back/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('back/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('back/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('back/dist/js/custom.min.js')}}"></script>
<!-- this page js -->
<script src="{{asset('back/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('back/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('back/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('back/dist/js/jquery.ui.touch-punch-improved.js')}}"></script>
<!-- this page js -->
<script src="{{asset('back/assets/libs/moment/min/moment.min.js')}}"></script>
<script src="{{asset('back/assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('back/dist/js/pages/calendar/cal-init.js')}}"></script>
<!-- Charts js Files -->
<script src="{{asset('back/assets/libs/flot/excanvas.js')}}"></script>
<script src="{{asset('back/assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('back/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('back/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('back/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('back/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('back/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('back/dist/js/pages/chart/chart-page-init.js')}}"></script>



<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
@toastr_js
@toastr_render
@yield('js')
</body>

</html>
