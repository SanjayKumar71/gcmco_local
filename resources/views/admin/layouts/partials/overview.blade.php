<div class="header">
    <div class="container-fluid">

        <!-- Body -->
        <div class="header-body">
            <div class="row align-items-end">
                <div class="col">

                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                        Overview
                    </h6>

                    <!-- Title -->

                    @if(Breadcrumbs::render('admin.category.create'))
                        {{ Breadcrumbs::render('admin.category.create') }}
                    @else
                        <h1 class="header-title">
                            {{ $pageTitle }}
                        </h1>
                    @endif
                </div>

            </div> <!-- / .row -->
        </div> <!-- / .header-body -->

    </div>
</div> <!--  -->



{{--<div class="row">--}}
{{--    <div class="col-md-12">--}}
{{--        <!-- BEGIN PAGE TITLE & BREADCRUMB-->--}}
{{--        <h3 class="page-title">{{ $pageTitle }} <small></small></h3>--}}
{{--    {{ Breadcrumbs::render('admin.category.index') }}--}}
{{--    <!-- END PAGE TITLE & BREADCRUMB-->--}}
{{--    </div>--}}
{{--</div>--}}
