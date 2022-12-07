@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/where_most_needed.css') }}">
<!-- Css Stylesheet -->


<!-- where most needed page start here -->
<section class="where_most_need_page">
    <div class="container">
        <section class="where_most_sec">
            <div class="orange_header">
                <a href="{{ route('index') }}">Home</a>
                <span>/</span>
                <a href="#">{{ $data->title }}</a>
            </div>
            <div class="where_most_content">
                <h1>{{ $data->title }}</h1>
                <p>
                    {{ $data->description }}
                </p>

                <div class="form_start">

                    @if(session()->has('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session()->get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @php session()->forget('error'); @endphp
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @php session()->forget('success'); @endphp
                    @endif

                    <form action="{{ route('store') }}" method="POST" id="payment-form">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="campaign_id">

                        <div class="text-center">
                            @if( isset($donationTypeData) )
                                @foreach($donationTypeData as $key => $val )
                                    <input type="radio" name="the_package" value="{{ $val->title }}" hidden class="all_package" id="no{{++$key}}">
                                    <label for="no{{$key}}">
                                        <div class="boxx">
                                            <span>{{ $val->title }}</span>
                                        </div>
                                    </label>
                                @endforeach
                            @endif
                        </div>

                        <div class="black_select text-center">
                            <div class="row">

                                @if( isset($donationAmountData) )
                                    @foreach($donationAmountData as $key2 => $val )
                                    <div class="col-md-4">
                                        <div class="black_box">
                                            <input type="radio" name="the_package2" value="{{ $val->amount }}" hidden class="all_package" id="no{{++$key}}">
                                            <label for="no{{$key}}">
                                                <div class="boxx">
                                                    <span>{{ $val->amount }}</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif

                                <div class="col-md-4">
                                    <div class="black_box">
                                        <input type="radio" name="the_package2" hidden class="all_package" id="no{{++$key}}">
                                        <label for="no11">
                                            <div class="boxx">
                                                <span>
                                                    $<input type="text" name="other_amount" value="" placeholder="Other amount in $">
                                                </span>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                        <div class="">
                                            <div class="input-group mb-2 mt-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <input type="email" required name="email" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Email *">
                                            </div>
                                        </div>
                            </div>

                            <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" required class="form-control" id="inputphone" placeholder="Phone *"
                                                name="phoneno">
                                        </div>
                            </div>

                            <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" required class="form-control" id="inputfirt" name="firstname"
                                                placeholder="First Name">
                                        </div>
                            </div>

                            <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputlast" name="lastname"
                                                placeholder="Last Name">
                                        </div>
                            </div>

                            <div class="col-md-12">
                                        <div class="form-group ">
                                            <input type="checkbox" name="the_check" id="add_filed" value="">

                                            <span><label for="add_filed"> I am donating on behalf of an organization.</label></span>
                                            <label for="add_filed" class="d-block">
                                                <input type="text" class="form-control hidden_field" id="organisation"
                                                    name="organisation" placeholder="Organization Name">
                                            </label>
                                        </div>
                            </div>

                            <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputStreet" name="inputStreet"
                                                placeholder="Street Address">
                                        </div>
                            </div>

                            <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" required class="form-control" id="inputCity" name="inputCity"
                                                placeholder="City">
                                        </div>
                            </div>
                                    
                            <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" required class="form-control" id="inputState" name="inputState"
                                                placeholder="State">
                                        </div>
                            </div>

                            <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" required class="form-control" id="inputCountry" name="inputCountry"
                                                placeholder="Country">
                                        </div>
                            </div>

                            <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputZip" name="inputZip"
                                                placeholder="Zip Code">
                                        </div>
                            </div>

                            <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="accountdetail">Select Payment Method</label>
                                            <select class="form-control see_payment" id="accountdetail">
                                                <option value="Card">Card</option>
                                            </select>
                                        </div>
                            </div>

                            <div class="col-md-12" id="the_card">
                                        <div class="form-group">
                                            <label for="">Credit / Debit Card</label>
                                            <!-- <input type="text" class="form-control" id="inputCardno" name="inputCardno"
                                                placeholder="Card Number"> -->

                                            <div class="form-group" id="card_field_div">
                                                <div id="card-element" style="border: 2px solid lightgray; border-radius:5px; padding: 10px;"></div>
                                                <div id="card-errors" role="alert"></div>
                                            </div>

                                        </div>
                            </div>

                            <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for=""></label>
                                            <textarea class="form-control" maxlength="255" name="description"
                                                id="donation_comments"></textarea>
                                        </div>
                            </div>

                            <div class="col-md-12" id="the_card">
                                        <div class="form-group">
                                            <button type="submit" class="submit_btn">Donate</button>
                                        </div>
                            </div>

                        </div>
                    </form>
            
                </div>
                
            </div>
        </section>
    </div>
</section>
<!-- where most needed page end here -->

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('pk_test_51M0NjoI2QVW7rb59a6uwikRds6KYbxpsNlkpeQxlmlGfXpRR4QjPNE8kracngyWE3wAaCyB8sU0SveAJPsXHaFdf00LPyyW4Ko');
    var elements = stripe.elements();
    var style = {
        base: {
            fontSize: '16px',
            color: '#32325d',
            height: '2rem',
        },
    };

    var card = elements.create('card', {hidePostalCode: true});
    card.mount('#card-element');
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        stripe.createToken(card).then(function (result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                stripeTokenHandler(result.token);
            }
        });
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

</script>

@endsection