<!-- JAVASCRIPT -->
<!-- Map JS -->
{{--<script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>--}}

<!-- Vendor JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset ('assets/admin/assets/js/vendor.bundle.js')}}"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{{--{!! Toastr::message() !!}--}}

<!-- Theme JS -->
<script src="{{asset('assets/admin/assets/js/theme.bundle.js')}}"></script>

<script>
    function globalDelete(url) {
        $('#globalDeleteModal form').attr('action',url);
        $('#globalDeleteModal').modal('show');
    }
    //<----------- Showing the password------------------------------>//
    function toggePassword()
    {
        var upass = document.getElementById('upass');
        var toggleBtn = document.getElementById('toggleBtn');
        if (upass.type == "password")
        {
            upass.type = "text";
            toggleBtn.value = "Hide password";
        }
        else
        {
            upass.type = "Password";
            toggleBtn.value = "Show the password";
        }
    }

</script>
<script>
    function publish(bool,url) {
        $.post(`${url}`,{
            _token : '{{ csrf_token() }}',
            status : (bool) ? 1 : 0
        },function (e) {
            console.log(e);
        })
    }
</script>

@stack('js')
