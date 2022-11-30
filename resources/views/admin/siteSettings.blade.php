@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
        <!-- BEGIN PAGE CONTENT-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    @include('admin.partials.errors')

                    <!-- BEGIN SAMPLE FORM card-->
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{ route('admin.site-settings.update', $records->id) }}"
                                class="form-horizontal" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="form-group">
                                    <label for="site_title" class="col-md-2 control-label">Site Title *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="site_title" maxlength="190"
                                            value="{{ old('site_title', $records->site_title) }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="contact_email" class="col-md-2 control-label">Contact Email *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="contact_email" maxlength="190"
                                            value="{{ old('contact_email', $records->contact_email) }}"
                                            class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="contact_phone" class="col-md-2 control-label">Contact Phone</label>
                                    <div class="col-md-4">
                                        <input type="text" name="contact_phone" maxlength="190"
                                            value="{{ old('contact_phone', $records->contact_phone) }}"
                                            class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-md-2 control-label">Address</label>
                                    <div class="col-md-4">
                                        <input type="text" name="address" maxlength="190"
                                            value="{{ old('address', $records->address) }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="facebook" class="col-md-2 control-label">FaceBook URL</label>
                                    <div class="col-md-4">
                                        <input type="text" name="facebook" maxlength="190"
                                            value="{{ old('facebook', $records->facebook) }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="instagram" class="col-md-2 control-label">Instagram URL</label>
                                    <div class="col-md-4">
                                        <input type="text" name="instagram" maxlength="190"
                                            value="{{ old('instagram', $records->instagram) }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="newsletter" class="col-md-2 control-label">Newsletter</label>
                                    <div class="col-md-4">
                                    <textarea name="newsletter" maxlength="65000" class="form-control"
                                            rows="3">{{ old('newsletter', $records->newsletter) }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="copyright" class="col-md-2 control-label">Copyright Line</label>
                                    <div class="col-md-4">
                                    <textarea name="copyright" maxlength="65000" class="form-control"
                                            rows="3">{{ old('copyright', $records->copyright) }}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="logo" class="col-md-2 control-label">Logo </label>
                                    <div class="col-md-4">
                                        @if ($records->logo != '' && file_exists(uploadsDir() . $records->logo))
                                            <img src="{!! uploadsUrl($records->logo) !!}" alt="" title="Logo"
                                                class="img-responsive"/><br>
                                        @endif
                                        <input type="file" name="logo" class="form-control"/>
                                        <input type="hidden" name="previous_logo" value="{{ $records->logo }}"/>
                                        <small><em>
                                                <strong>Recommended width:</strong> up to 150 pixels<br/>
                                                <strong>Recommended height:</strong> 60-80 pixels
                                            </em></small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer_logo" class="col-md-2 control-label">Footer Logo </label>
                                    <div class="col-md-4">
                                        @if ($records->footer_logo != '' && file_exists(uploadsDir() . $records->footer_logo))
                                            <img src="{!! uploadsUrl($records->footer_logo) !!}" alt="" title="footer_Logo"
                                                class="img-responsive"/><br>
                                        @endif
                                        <input type="file" name="footer_logo" class="form-control"/>
                                        <input type="hidden" name="previous_footer_logo" value="{{ $records->footer_logo }}"/>
                                        <small><em>
                                                <strong>Recommended width:</strong> up to 150 pixels<br/>
                                                <strong>Recommended height:</strong> 60-80 pixels
                                            </em></small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn btn-success" id="save" value="Save">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM card-->

                </div>
            </div>

        </div>

@endsection
