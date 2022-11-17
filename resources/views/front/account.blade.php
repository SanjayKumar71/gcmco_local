@extends('front.layouts.app')
@section('content')
@php
    $user = auth()->user();
@endphp
<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/account.css') }}">
<!-- Stylesheet -->
<script src="{{ asset('front_assets/js/jquery.min.js') }}"></script>

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>ACCOUNT</h1>
        </div>
    </div>
</section>
<!-- Top Small Banner END hERE -->


<!-- Account section Start -->
<section class="account">
    <div class="container">
        <div class="account-start">
            <div class="row">

                <div class="col-md-4">
                    <div class="left-side">
                        <div class="top-heading">
                            <h3>{{ $user->first_name.' '.$user->last_name; }}</h3>
                        </div>
                        <div class="all-tabs-controller">
                            <ul class="nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="pills-account-tab" data-toggle="pill" href="#pills-account"
                                        role="tab" aria-controls="pills-account" aria-selected="true">My Profile</a>
                                </li>
                                <!-- <li class="nav-item forInnerItems">
                                    <button class="showBtn">My Appoinments</button>
                                    <div>

                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <a id="pills-Past-tab" data-toggle="pill"
                                        data-url="{{ route('users.showPastSession', $user->id) }}" href="#pills-Past"
                                        role="tab" aria-controls="pills-Past" aria-selected="false">Past Sessions</a>
                                </li>
                                <li class="nav-item">
                                    <a id="pills-Upcoming-tab" data-toggle="pill"
                                        data-url="{{ route('users.showUpcomingSession', $user->id) }}"
                                        href="#pills-Upcoming" role="tab" aria-controls="pills-Upcoming"
                                        aria-selected="false">Upcoming Sessions</a>
                                </li>
                                <li class="nav-item">
                                    <a id="pills-Cancelled-tab" data-toggle="pill"
                                        data-url="{{ route('users.showCanceledSession', $user->id) }}"
                                        href="#pills-Cancelled" role="tab" aria-controls="pills-Cancelled"
                                        aria-selected="false">Cancelled
                                        Sessions</a>
                                </li>
                                <li class="nav-item">
                                    <a id="pills-document-tab" data-toggle="pill" data-url="{{ route('users.getFileDetails', $user->id) }}" href="#pills-document" role="tab"
                                        aria-controls="pills-document" aria-selected="false">Share Document</a>
                                </li>
                                <li class="nav-item">
                                    <a id="pills-savedcard-tab" data-toggle="pill" data-url="{{ route('users.getSavedCardDetail', $user->id) }}" href="#pills-savedcard" role="tab"
                                        aria-controls="pills-savedcard" aria-selected="false">Saved Cards</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                            aria-labelledby="pills-account-tab">

                            <!-- Messages -->
                            @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible">
                                {{ session()->get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                @foreach ($errors->all() as $error)
                                {{ $error }}<br />
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <!-- /Messages -->

                            <!-- User Data -->
                            <div class="account-wrapper">
                                <div class="title">
                                    <h4>Account</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" value="{{ $user->first_name; }}" readonly
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" value="{{ $user->last_name; }}" readonly
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="tel" value="{{ $user->contact_number; }}" readonly
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" value="{{ $user->email; }}" readonly
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="button-group">
                                            <button class="btn" id="editProfileBtn">Edit Profile</button>
                                            <button class="btn changePass">Change Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /User Data -->

                            <!-- Change Passowrd -->
                            <div class="change-password-wrapper hide">
                                <div class="heading">
                                    <h4>Change Password</h4>
                                </div>
                                <form action="{{ route('change_password') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Old Password"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="new_password" placeholder="New Password"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="new_password_confirmation"
                                            placeholder="Confirm New Password" class="form-control" required>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn">Save</button>
                                        <button class="btn" type="button" id="for-back">Back</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /Change Passowrd -->

                            <!-- Edit Profile -->
                            <div class="edit-profile-wrapper hide">
                                <div class="heading">
                                    <h4>Edit Account Details</h4>
                                </div>
                                <form action="{{ route('update_detail') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="first_name" value="{{ $user->first_name; }}"
                                                    placeholder="First Name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="last_name" value="{{ $user->last_name; }}"
                                                    placeholder="Last Name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" name="contact_number"
                                                    value="{{ $user->contact_number; }}" placeholder="Phone"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" value="{{ $user->email; }}"
                                                    placeholder="Email" class="form-control" required>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="{{ $user->id; }}">
                                        <div class="col-md-12">
                                            <div class="button-group">
                                                <button class="btn">Update Profile</button>
                                                <button class="btn" type="button" id="for-edit-back">Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /Edit Profile -->

                        </div>

                        <!-- PastSession Table -->
                        <div class="tab-pane fade" id="pills-Past" role="tabpanel" aria-labelledby="pills-Past-tab">
                            <div class="session-wrapper">
                                <div class="title">
                                    <h4>Past Sessions</h4>
                                </div>
                                <div style="overflow-y:auto;height:300px;">
                                    <table class="table" id="pastSessionTable">
                                        <thead>
                                            <tr>
                                                <th class="category">Category</th>
                                                <th class="Name">Name</th>
                                                <th class="Date">Date</th>
                                                <th class="Time">Time</th>
                                                <th class="Venue">Venue</th>
                                                <!-- <th class="Inperson">Inperson/Online</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /PastSession Table -->

                        <!-- UpcomingSession Table -->
                        <div class="tab-pane fade" id="pills-Upcoming" role="tabpanel"
                            aria-labelledby="pills-Upcoming-tab">
                            <div class="session-wrapper">
                                <div class="title">
                                    <h4>Upcoming Sessions</h4>
                                </div>
                                <div style="overflow-y:auto;height:300px;">
                                    <table class="table" id="upcomingSessionTable">
                                        <thead>
                                            <tr>
                                                <th class="category">Category</th>
                                                <th class="Name">Name</th>
                                                <th class="Date">Date</th>
                                                <th class="Time">Time</th>
                                                <th class="Venue">Venue</th>
                                                <!-- <th class="Inperson">Inperson/Online</th> -->
                                                <th class="Action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /UpcomingSession Table -->

                        <!-- CancelledSession Table -->
                        <div class="tab-pane fade" id="pills-Cancelled" role="tabpanel"
                            aria-labelledby="pills-Cancelled-tab">
                            <div class="session-wrapper">
                                <div class="title">
                                    <h4>Cancelled Sessions</h4>
                                </div>
                                <div style="overflow-y:auto;height:300px;">
                                    <table class="table" id="canceledSessionTable">
                                        <thead>
                                            <tr>
                                                <th class="category">Category</th>
                                                <th class="Name">Name</th>
                                                <th class="Date">Date</th>
                                                <th class="Time">Time</th>
                                                <th class="Venue">Venue</th>
                                                <!-- <th class="Inperson">Inperson/Online</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /CancelledSession Table -->

                        <div class="tab-pane fade" id="pills-document" role="tabpanel"
                            aria-labelledby="pills-document-tab">
                            <div class="document-wrapper">
                                <div class="heading">
                                    <h4>Share Documents</h4>
                                    <button class="btn upload-document-button">Upload</button>
                                </div>
                                <div style="overflow-y:auto;height:300px;">
                                    <table class="table" id="DocumentTable">
                                        <thead>
                                            <tr>
                                                <th class="thumb">Thumb</th>
                                                <th class="Name">Name</th>
                                                <th class="Date">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="upload-document hide" id="UploadDocumentFile">
                                <div class="upload">
                                    <form action="{{ route('file.upload.post') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="heading">
                                            <h4>Upload Documents</h4>
                                        </div>
                                        <div class="form-group forUpload">
                                            <input type="file" name="file" id="addFile" class="form-control">
                                        </div>
                                        <div class="button-group">
                                            <button class="btn">Upload</button>
                                            <button class="btn" type="button" id="for-upload-back">Back</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- SavedCards Table -->
                        <div class="tab-pane fade" id="pills-savedcard" role="tabpanel"
                            aria-labelledby="pills-savedcard-tab">
                            <div class="savedcard-wrapper">
                                <div class="heading">
                                    <h4>Saved Cards</h4>
                                </div>
                                <div style="overflow-y:auto;height:300px;">
                                    <table class="table" id="savedcardTable">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;" class="brand">Brand</th>
                                                <th style="text-align: center;" class="last4">Last4</th>
                                                <th style="text-align: center;" class="Default">Default</th>
                                                <th style="text-align: center;" class="Action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /SavedCards Table -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
/* When click show past session */
$('#pills-Past-tab').on('click', function() {
    var userURL = $(this).data('url');
    $.get(userURL, function(data) {
        if (data != null) {
            $('#pastSessionTable > tbody').empty();
            $(data).each(function(index, item) {
                $(item.get_program_session).each(function(index, item) {
                    $('#pastSessionTable > tbody').append(
                        '<tr><td class="category">' + item.programs.category.title +
                        '</td><td class="Name">' + item.programs.title +
                        '</td><td class="Date">' + item.date +
                        '</td><td class="Time">' + item.start_time +
                        '</td><td class="Venue">' + item.location + '</td></tr>'
                    );
                });
            });
        }
    });
});

/* When click show upcoming session */
$('#pills-Upcoming-tab').on('click', function() {
    var userURL = $(this).data('url');
    $.get(userURL, function(data) {
        if (data != null) {
            $('#upcomingSessionTable > tbody').empty();
            $(data).each(function(index, item) {
                $(item.get_program_session).each(function(index, item) {
                    var updateURL = ("{{ route('users.CancelSession', 'edURLPath') }}").replace("edURLPath", item.id);
                    $('#upcomingSessionTable > tbody').append(
                        '<tr><td class="category">' + item.programs.category.title +
                        '</td><td class="Name">' + item.programs.title +
                        '</td><td class="Date">' + item.date +
                        '</td><td class="Time">' + item.start_time +
                        '</td><td class="Venue">' + item.location +
                        '</td><td class="Action"><a href="'+updateURL+'"><button type="button" class="btn btn-danger">Cancel</button></a></td></tr>'
                    );
                });
            });
        }
    });
});

/* When click show canceled session */
$('#pills-Cancelled-tab').on('click', function() {
    var userURL = $(this).data('url');
    $.get(userURL, function(data) {
        if (data != null) {
            $('#canceledSessionTable > tbody').empty();
            $(data).each(function(index, item) {
                $(item.get_program_session).each(function(index, item) {
                    $('#canceledSessionTable > tbody').append(
                        '<tr><td class="category">' + item.programs.category.title +
                        '</td><td class="Name">' + item.programs.title +
                        '</td><td class="Date">' + item.date +
                        '</td><td class="Time">' + item.start_time +
                        '</td><td class="Venue">' + item.location + '</td></tr>'
                    );
                });
            });
        }
    });
});

/* When click Shared Documents */
$('#pills-document-tab').on('click', function() {
    var userURL = $(this).data('url');
    $.get(userURL, function(data) {
        if (data != null) {
            $('#DocumentTable > tbody').empty();
            $(data).each(function(index, item) {
                var current_dt = new Date(item.created_at);
                
                var myArray    = item.file.split(".");
                var imgIcon    = "";
                if(myArray[1] == 'pdf')    
                    imgIcon = '<img src="{{ asset("front_assets/img/pdf.png") }}" alt="" class="img-fluid">';
                else if(myArray[1] == 'txt')
                    imgIcon = '<img src="{{ asset("front_assets/img/txt.png") }}" alt="" class="img-fluid">';
                else if(myArray[1] == 'doc')
                    imgIcon = '<img src="{{ asset("front_assets/img/doc.png") }}" alt="" class="img-fluid">';
                else if(myArray[1] == 'csv')
                    imgIcon = '<img src="{{ asset("front_assets/img/csv.png") }}" alt="" class="img-fluid">';
                else if(myArray[1] == 'ppt' || myArray[1] == 'pptx')
                    imgIcon = '<img src="{{ asset("front_assets/img/ppt.png") }}" alt="" class="img-fluid">';
                else if(myArray[1] == 'xls' || myArray[1] == 'xlsx')
                    imgIcon = '<img src="{{ asset("front_assets/img/xls.png") }}" alt="" class="img-fluid">';
                else if(myArray[1] == 'png')
                    imgIcon = '<img src="{{ asset("front_assets/img/png.png") }}" alt="" class="img-fluid">';
                else if(myArray[1] == 'jpg' || myArray[1] == 'jpeg')
                    imgIcon = '<img src="{{ asset("front_assets/img/jpg.png") }}" alt="" class="img-fluid">';

                $('#DocumentTable > tbody').append(
                    '<tr>' +
                        '<td class="thumb">'+imgIcon+'</td>' +
                        '<td class="Name"><p class="Docname">' + item.file + 
                            '<div class="button-group"><a href="'+item.download_url+'" class="lnk">Download</a></div>'+
                        '</td>' +
                        '<td class="Date">' + current_dt.toLocaleDateString() + '</td>' +
                    '</tr>'
                );
            });
        }
    });
});

/* When click Saved Cards */
$('#pills-savedcard-tab').on('click', function() {
    var userURL = $(this).data('url');
    $.get(userURL, function(data) {
        if (data != null) {
            $('#savedcardTable > tbody').empty();
            $(data).each(function(index, item) {
                var current_dt = new Date(item.created_at);
                var defaultCard = '';
                if (item.default_card == 1){ 
                    defaultCard = '<i class="fa-solid fa-circle-check"></i>';
                }
                
                var updateURL = ("{{ route('users.makeDefault', 'edURLPath') }}").replace("edURLPath", item.id);
                $('#savedcardTable > tbody').append(
                    '<tr></td><td style="text-align: center;" class="brand">' + item.card_brand +
                    '</td><td style="text-align: center;" class="last4">' + item.card_last4 +
                    '</td><td style="text-align: center;" class="Default">' + defaultCard +
                    '</td><td style="text-align: center;" class="Action"> ' +
                        '<form id="logout-form" action='+updateURL+' method="POST">@csrf'+
                            '<input type="hidden" name="stripe_source_id" value="'+ item.stripe_source_id +'">' +
                            '<button type="submit" class="btn"><span class="glyphicon glyphicon-trash">Make Default</span></button>'+
                        '</form>' +
                    '</td>' +
                    '</tr>'
                );
            });
        }
    });
});

$('#for-back').click(function() {
    $('.change-password-wrapper').addClass('hide')
    $('.account-wrapper').removeClass('hide')
});
$('#for-edit-back').click(function() {
    $('.edit-profile-wrapper').addClass('hide')
    $('.account-wrapper').removeClass('hide')
})
$('#for-upload-back').click(function() {
    $('#UploadDocumentFile').addClass('hide')
    $('.document-wrapper').removeClass('hide')
})
</script>
<style>
    #DocumentTable,#savedcardTable,#pastSessionTable,#upcomingSessionTable,#canceledSessionTable thead th {
        position: sticky;
        top: 0;
        background-color: white;
      }
</style>
<!-- Account  End here -->

@endsection