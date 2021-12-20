<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/dashmix.app.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.alert').delay(9000).slideUp(600)
    });
</script>

<!-- Page JS Plugins -->
<script src="{{asset('/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('/js/pages/tables_datatables.js')}}"></script>

@stack('js_after')
