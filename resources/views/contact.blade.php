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
            <div class="form-group">
                <input id="submit" type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send Message" />  
            </div>
        </div>
    </form>
    @if (Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
    @endif
</section>
@endsection
