
{{--<div class="card-footer">--}}
{{--    <div class="row align-items-center">--}}
{{--        <div class="col">--}}

{{--            <!-- Input -->--}}
{{--            <textarea class="form-control form-control-flush form-control-auto" data-autosize rows="1" placeholder="Create a task"></textarea>--}}

{{--        </div>--}}
{{--        <div class="col-auto">--}}

{{--            <!-- Button -->--}}


{{--        </div>--}}
{{--    </div> <!-- / .row -->--}}
{{--</div>--}}
{{--</div>--}}

</div>
</div> <!-- / .row -->
</div>

</div><!-- / .main-content -->

{{--Delete Modal--}}
<div class="modal" id="globalDeleteModal" tabindex="-1" role="dialog" data-bs-toggle="modal">
    <form method="post">
        @csrf

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    {{--                        <span aria-hidden="true">&times;</span>--}}
                    </button>
                </div>
                <div class="modal-body">
                    <p>Do you want to delete it?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </form>
</div>
{{--Delete Modal--}}


<!-- JAVASCRIPT -->
<!-- Map JS -->
{{--<script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>--}}

{{--<!-- Vendor JS -->--}}
{{--<script src="{{asset('assets/admin/assets/js/vendor.bundle.js')}}"></script>--}}

{{--<!-- Theme JS -->--}}
{{--<script src="{{('assets/admin/assets/js/theme.bundle.js')}}"></script>--}}

<script>
    // function globalDelete(url) {
    //     $('#globalDeleteModal form').attr('action',url);
    //     $('#globalDeleteModal').modal('show');
    // }

</script>
