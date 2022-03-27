@extends('layouts.app')

@section('content')
<section id="contact" class="py-5">
    <div class="container">
        <h1 class="text-capitalize color-primary mb-5 wow fadeIn animated">contact us</h1>
        <?php if(isset($error)) {
            echo $error;
        }?>
        <?php if(isset($flag)) {
            echo $flag;
        }?>
        <form method="post" action="/" id="contactForm" name="contactForm">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-lx-7">
                    <div class="form-group mb-3 wow fadeInRight animated">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0" name="fullname" id="name" placeholder="Name" value="<?php if(isset($error) && isset($_REQUEST['fullname'])) echo $_REQUEST['fullname']; ?>">
                    </div>
                    <div class="form-group mb-3 wow fadeInRight animated">
                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0 rounded-0" name="email" id="email" placeholder="Email" value="<?php if(isset($error) && isset($_REQUEST['email'])) echo $_REQUEST['email']; ?>">
                    </div>
                    <div class="form-group mb-3 wow fadeInRight animated">
                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0 rounded-0" name="office_address" id="office_address" placeholder="Office Address" value="<?php if(isset($error) && isset($_REQUEST['office_address'])) echo $_REQUEST['office_address']; ?>">
                    </div>
                    <div class="form-group mb-3 wow fadeInRight animated">
                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0 rounded-0" name="mobile" id="mobile" placeholder="Contact Number" value="<?php if(isset($error) && isset($_REQUEST['mobile'])) echo $_REQUEST['mobile']; ?>">
                    </div>
                    <div class="form-group mb-3 wow fadeInRight animated">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0" name="subject" id="subject" placeholder="Subject" value="<?php if(isset($error) && isset($_REQUEST['subject'])) echo $_REQUEST['subject']; ?>">
                    </div>
                    <div class="form-group mb-3 wow fadeInRight animated">
                        <textarea class="form-control border-top-0 border-right-0 border-left-0 rounded-0" style="resize: none;" name="message" id="message" rows="5" placeholder="Message"><?php if(isset($error) && isset($_REQUEST['message'])) echo $_REQUEST['message']; ?></textarea>
                    </div>
                    <a href="#" class="background-primary btn text-uppercase text-white px-5 border-radius-20px hvr-grow" onclick='$("#contactForm").submit();'>Send</a>
                </div>
            </div>
            <div class="offset-5"></div>
        </form>
    </div>
</section>
@endsection
