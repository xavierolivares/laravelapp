@extends('master')

@section('title', 'Contact Form')
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
            width:576px;
        }

        /* Centre the form within the page */
        form {
            margin:0 auto;
            width:459px;
        }

        /* Style the text boxes */
        input, textarea {
            width:439px;
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
    <header class="body">
    </header>

    <section class="body">
        <h1>Contact Me</h1>
        <form method="post" action="{{url('/contact')}}">
            <label>Name</label>
            <input name="name" placeholder="Type Here">
                    
            <label>Email</label>
            <input name="email" type="email" placeholder="Type Here">
                    
            <label>Message</label>
            <textarea name="message" placeholder="Type Here"></textarea>
            
            <label>*What is 2+2? (Anti-spam)</label>
            <input name="human" placeholder="Type Here">

            <input id="submit" name="submit" type="submit" value="Submit">               
        </form>

    </section>

    <footer class="body">
    </footer>
@endsection

<!-- Reference - http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/ -->

