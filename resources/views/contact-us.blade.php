@extends('master')
@section('title', 'Contact Us')

@section('content')
    <style>
        label {
            display:block;
            margin-top:20px;
            letter-spacing:2px;
        }
        
        /* Centre the page */
        .body {
            display:block;
            margin:0 auto;
            width: auto;
        }

        /* Centre the form within the page */
        form {
            margin:0 auto;
            width: auto;
        }

        /* Style the text boxes */
        input, textarea {
            width:500px;
            height:27px;
            background:#efefef;
            border:1px solid #dedede;
            padding:10px;
            margin-top:3px;
            font-size:0.9em;
            color:#3a3a3a;
            -moz-border-radius:5px;
            -webkit-border-radius:5px;
            border-radius:5px;
        }
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            input, textarea {
                width:150px;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            input, textarea {
                width:250px;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            input, textarea {
                width:350px;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            input, textarea {
                width:450px;
            }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            input, textarea {
                width:600px;
            }
        }

        textarea {
            height:213px;
            background:url(images/textarea-bg.jpg) right no-repeat #efefef;
        }
        input:focus, textarea:focus {
            border:1px solid #97d6eb;
        }
        #submit {
            width:127px;
            height:38px;
            /* background:url(https://www.freepngimg.com/thumb/submit_button/25432-3-submit-button-file-thumb.png); */
            background-color:orange;
            color: #FFFFFF;
            /* text-indent:-9999px; */
            border:none;
            margin-top:20px;
            cursor:pointer;
        }
        #submit:hover {
            opacity:.9;
        }
    </style>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
<section class="body">                       
    <form method="post" action="{{ route('contactus.store') }}">
        {{ csrf_field() }}
        <h3>Contact Us</h3>
        <div>
            <div>
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name *"  required />
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Your Email *"  required />
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject *"  />
                    @if ($errors->has('subject'))
                        <span class="help-block">
                            <strong>{{ $errors->first('subject') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div>
                <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                    <label>Message</label>
                    <textarea name="message" class="form-control" placeholder="Your Message *" required></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <input id="submit" type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send Message" />  
            </div>
        </div>
    </form>
@endsection
