@if(session('success'))
    <script>
        $(function () {
            toastr.success("",  '{{session('success')}}');
        });
    </script>
@endif

@if(session('danger'))
    <script>
        $(function () {
            toastr.error("",  '{{session('danger')}}');
        });
    </script>
@endif

@if(session('info'))
    <script>
        $(function () {
            toastr.info("",  '{{session('info')}}');
        });
    </script>
@endif

@if(session('warning'))
    <script>
        $(function () {
            toastr.warning("",  '{{session('warning')}}');
        });
    </script>
@endif

