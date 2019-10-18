
@extends('layouts_template.main')
@section('content')
    <div class="page-content-wrapper sm-top">
        <div class="contact-page-content">
            <div class="contact-info-wrapper">
                <div class="container">
                    <div class="row mtn-30">
                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-ios-location-outline"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Our Location</h4>
                                    <p>(800) 123 456 789 / (800) 123 456 789
                                        {{$settings->email}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-iphone"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Contact us Anytime</h4>
                                    <p>Mobile: {{$settings->hotline}} <br>
                                    Fax: 123 456 789</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-ios-email-outline"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Write Some Words</h4>
                                    <p>Support24/7@example.com
                                        info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper sm-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form-content">
                                <h2>Get In Touch</h2>

                                <div class="contact-form-wrap">
                                    <form action="//whizthemes.com/mail-php/raju/gariongso/mail.php" method="post" id="contact-form">
                                        <div class="contact-form-inner">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="name">name</label>
                                                        <input type="text" name="name" id="name" placeholder="Name" required />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="email">email</label>
                                                        <input type="email" name="email" id="email" placeholder="Email" required />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="subject">subject</label>
                                                        <input type="text" name="subject" id="subject" placeholder="Subject" required />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="message">message</label>
                                                        <textarea name="message" id="message" cols="30" rows="8" placeholder="Write Message" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="input-item">
                                                        <button class="btn btn-brand">Send a Message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Form Submission Notification -->
                                        <div class="form-message"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <h3>Bản đồ</h3>
               <iframe class="map_content" src="{{$settings->map}}" style= width="100%"; height="50%"></iframe>
               <style type="text/css">
                   .map_content{
                    width: 100%;
                    height: 400px;
                    padding-top: 10px;
                   }
               </style>  
        </div>
    </div>
    <!--== End Page Content Wrapper ==-->

    <!--== Start Footer Area Wrapper ==-->
   
    <!--== End Footer Area Wrapper ==-->

    <!-- Scroll Top Button -->
    <button class="btn-scroll-top"><i class="ion-chevron-up"></i></button>



    <!--== Start Responsive Menu Wrapper ==-->
    <aside class="off-canvas-wrapper off-canvas-menu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner">
            <!-- Start Off Canvas Content -->
            <div class="off-canvas-content">
                <div class="off-canvas-header">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="close-btn">
                        <button class="btn-close"><i class="ion-android-close"></i></button>
                    </div>
                </div>

                <!-- Content Auto Generate Form Main Menu Here -->
                <div class="res-mobile-menu mobile-menu">

                </div>
            </div>
        </div>
    </aside>
@endsection

