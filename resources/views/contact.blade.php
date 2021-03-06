@extends('master')
@section('title', 'Contact')

@section('style')
<!-- Contact Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<section class="body container contact-form">
    <form method="post" action="{{ route('contactus.store') }}">
        {{ csrf_field() }}
        <h1>Have questions? Send us an email.</h1>
        <div>
            <div>
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <!-- <label>Name</label> -->
                    <input type="text" name="name" class="form-control" placeholder="Your Name *"  required />
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <!-- <label>Email</label> -->
                    <input type="email" name="email" class="form-control" placeholder="Your Email *"  required />
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                    <!-- <label>Message</label> -->
                    <textarea name="message" class="form-control" placeholder="Your Message *" required></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
            <div class="form-group submit-group">
                <input id="submit" type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send Message" />  
                @if (Session::has('success'))
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
                @endif
            </div>
        </div>
    </form>
    @if (Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
    @endif
</section>
@endsection
