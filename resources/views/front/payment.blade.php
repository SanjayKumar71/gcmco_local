@extends('front.layouts.app')
@section('content')

@php
    $user_id = Auth::user()->id;
    $userCardDetail = App\Models\UserCard::where('user_id','=',$user_id)->get();
@endphp
<script src="https://js.stripe.com/v3/"></script>
<script>
    var publishedKey = "pk_test_51M0NjoI2QVW7rb59a6uwikRds6KYbxpsNlkpeQxlmlGfXpRR4QjPNE8kracngyWE3wAaCyB8sU0SveAJPsXHaFdf00LPyyW4Ko";
    var stripe = Stripe(publishedKey);
    var elements = stripe.elements();
</script>
<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/book-now.css') }}">
<!-- Stylesheet -->

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>BOOK NOW</h1>
        </div>
    </div>
</section>
<!-- Top Small Banner END hERE -->


<!-- Form section Start -->
<section class="form-section payment-sec">
    <div class="container">
        <div class="form-start">
            <div class="row">
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="col-md-10 mx-auto">
                    <div class="form-start mt-5 program-detail">
                        <div class="form-heading">
                            <span>Program Details</span>
                        </div>
                        
                        @if( isset($programs) )
                        <div class="form-box">
                            <div class="discount-details">
                                <h3 class="title">{{ $programs->sub_title }}</h3>
                                <b>{{ $programs->third_sub_title }}</b>
                                <div class="off-div">
                                    <h3>${{ $programs->price }} <span class="light">/ {{ $programs->off_in_percent }}% off</span></h3>
                                </div>
                                <div class="details">
                                    <span class="date">{{ \Carbon\Carbon::parse($programSession->date)->format('F jS Y') }}</span>
                                    <span class="time">{{ \Carbon\Carbon::parse($programSession->start_time)->format('h:i A') }} - {{ \Carbon\Carbon::parse($programSession->end_time)->format('h:i A') }}</span>
                                    <span class="location"><a><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $programSession->location }}</a></span>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                    <div class="form-start mb-5 pymnt-box">
                        <div class="form-heading">
                            <span>Payment</span>
                        </div>
                        <div class="form-box">
                            <form action="{{route('checkout')}}" method="post" id="payment-form">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="program_session_id" value="{{ $programSession->id }}">
                                <div class="payment-details">
                                    <!-- <div class="form-group">
                                        <input type="text" placeholder="Card Number" class="form-control">
                                    </div> -->

                                    <div class="form-group col-md-6">
                                        <span>Saved Cards: </span>
                                        <select name="saved_card" id="saved_card" style="height: auto!important;" class="form-control">
                                            @if(count($userCardDetail) > 0)
                                                @foreach($userCardDetail as $key => $val)
                                                    <option value="{{ $val->id }}" {{ ( $val->default_card == 1) ? 'selected' : '' }}> {{ $val->card_last4 }} </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div id="card-errors" role="alert">
                                        <br/>
                                        <input type="checkbox" name="new_card_checkbox" id="new_card_checkbox">
                                        <span>Add New Card</span>
                                    </div>

                                    <br/>
                                        
                                    <div class="form-group" id="card_field_div">
                                        <div id="card-element"></div>
                                        <div id="card-errors" role="alert"></div>
                                    </div>

                                    <div class="card-type">
                                        <label class="card-container">
                                            <input type="radio" checked="checked" hidden name="radio">
                                            <span class="checkmark">
                                                <figure><img src="{{ asset('front_assets/img/pymnt1.png') }}" class="img-fluid"></figure>
                                            </span>
                                        </label>
                                        <label class="card-container">
                                            <input type="radio" name="radio" hidden>
                                            <span class="checkmark">
                                                <figure><img src="{{ asset('front_assets/img/pymnt2.png') }}" class="img-fluid"></figure>
                                            </span>
                                        </label>
                                        <label class="card-container">
                                            <input type="radio" name="radio" hidden>
                                            <span class="checkmark">
                                                <figure><img src="{{ asset('front_assets/img/pymnt3.png') }}" class="img-fluid"></figure>
                                            </span>
                                        </label>
                                        <label class="card-container">
                                            <input type="radio" name="radio" hidden>
                                            <span class="checkmark">
                                                <figure><img src="{{ asset('front_assets/img/pymnt4.png') }}" class="img-fluid"></figure>
                                            </span>
                                        </label>
                                        <label class="card-container">
                                            <input type="radio" name="radio" hidden>
                                            <span class="checkmark">
                                                <figure><img src="{{ asset('front_assets/img/pymnt5.png') }}" class="img-fluid"></figure>
                                            </span>
                                        </label>
                                    </div>

                                </div>
                                <div class="button-group">
                                    <button class="btn" type="submit" class="btn btn-primary" data-toggle="modal" id="paynowbtn">Pay Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- data-target="#thankYouModal" -->
<!-- Form section End here -->

<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="thankYouModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title">Confirm Payment</h4>
                <a href="{{ route('index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 302 50">
                    <text id="x" fill="#fff" font-size="150" font-family="OpenSans-Bold, Open Sans" font-weight="700">
                        <tspan x="0" y="32">x</tspan>
                    </text>
                </svg>
                </a>

            </div>
            <div class="modal-body">
                <div class="thankyou_box">
                    @if( isset($programs) )
                        <div class="title-wrapper">
                            <h3>THANK YOU</h3>
                            <p>FOR CHOOSING OUR PROGRAM</p>
                        </div>
                        <div class="programs">
                            <h3>Program Details</h3>
                            <h4>{{ $programs->sub_title }}</h4>
                            <b>{{ $programs->third_sub_title }}</b>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Thank You Modal -->

@endsection

@push('js')

    @if(Session::has('success_payment'))
        <script>
            $(function() {
                $('#thankYouModal').modal('show');
            });
        </script>
    @endif

    <script>
        // Set up Stripe.js and Elements to use in checkout form
        var elements = stripe.elements();
        var style = {
            base: {
                color: "#32325d",
            }
        };
        
        var card = elements.create("card", {hidePostalCode: true, style: style });
        card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
        });
        

        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            if($('#card-element').length){
                event.preventDefault();
                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        // Inform the customer that there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            }
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

        $("input[name$='new_card_checkbox']").click(function() {
            var newCardRadio = $(this).val();
            
            if ($('#new_card_checkbox').is(":checked"))
            {
                card.mount('#card-element');
            }
            else{
                card.unmount('#card-element');
            }
        });
    </script>
@endpush