<?php require './template/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand m-2" href="#">
            <img src="img/toolart-logo.png" alt="" width="217" height="44" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">

                </li>
            </ul>
            <ul class="navbar-nav mb-2 mr-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="https://www.toolart.sg/product-category/product/">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://toolart.sg/contact-us/">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://toolart.sg/workshops/">WORKSHOP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="intro-overlay">

    <div class="logo-wrapper">

        <img src="img/fortune-cookie.png" alt="">

    </div>

    <div class="text-wrapper">

        <p>
            Send A Personalised Auspicious Greeting & A Fortune Cookie!
        </p>

        <a href="#" class="custom-button get-started">LET’S GET CRACKING</a>

    </div>

    <div class="clearfix"></div>

</div>

<div class="container-fluid hidden" id="main-system">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-9 col-md-12 col-lg-9 col-xl-9 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <!-- <p>Customise your own festive greeting card and send it your loved ones!</p> -->
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Pick A<br>Fortune Cookie</strong></li>
                        <li id="personal"><strong>Customise<br>Your Greeting</strong></li>
                        <li id="payment"><strong>Receiver<br>& Sender Details</strong></li>
                        <li id="confirm"><strong>Share<br>Your Fortune</strong></li>
                    </ul>

                    <fieldset>

                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="fs-title">SELECT A FORTUNE FLAVOUR</h2>
                                </div>

                            </div>

                            <div class="row mt-2">

                                <ul class="gif-selection">

                                    <li class="flip-item">
                                        <img class="gif-item freezeGIF front" data-val="card-1" data-status="false" src="./img/card-template-1.png" alt="">
                                        <img class="rays hidden" data-val="card-1" src="./img/rays.png" alt="">
                                    </li>
                                    <li class="flip-item">
                                        <img class="gif-item freezeGIF front" data-val="card-2" data-status="false" src="./img/card-template-2.png" alt="">
                                        <img class="rays hidden" data-val="card-1" src="./img/rays.png" alt="">
                                    </li>

                                </ul>

                                <ul class="gif-selection">
                                    <li class="flip-item">
                                        <img class="gif-item freezeGIF front" data-val="card-3" data-status="false" src="./img/card-template-3.png" alt="">
                                        <img class="rays hidden" data-val="card-1" src="./img/rays.png" alt="">
                                    </li>
                                    <li class="flip-item">
                                        <img class="gif-item freezeGIF front" data-val="card-4" data-status="false" src="./img/card-template-4.png" alt="">
                                        <img class="rays hidden" data-val="card-1" src="./img/rays.png" alt="">
                                    </li>
                                    <li class="flip-item">
                                        <img class="gif-item freezeGIF front" data-val="card-5" data-status="false" src="./img/card-template-5.png" alt="">
                                        <img class="rays hidden" data-val="card-1" src="./img/rays.png" alt="">
                                    </li>

                                </ul>

                            </div>

                        </div>

                        <input type="button" name="next" class="next action-button" value="Next" />

                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title" style="text-align:left;">CUSTOMISE YOUR GREETING</h2>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6" id="stage-parent">

                                    <div id="container"></div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="receiver" class="form-label">TO</label>
                                        <input type="text" placeholder="Recipient Name" class="form-control" id="receiver">
                                    </div>

                                    <div class="">
                                        <label for="message" class="form-label">MESSAGE</label>
                                        <textarea name="message" placeholder="Type Your Auspicious Message" id="message" cols="30" rows="4"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="receiver" class="form-label">FROM</label>
                                        <input type="text" placeholder="Your Name" class="form-control" id="sender">
                                    </div>

                                    <span class="form-label">Drag and drop to your Card</span>

                                    <br>

                                    <?php $image = new Image();
                                    $image->show_stickers_in_slider(); ?>

                                    <a href="javascript:void(0);" class="custom-button prevBtn" style="float:left; margin-top: 0;">PREVIOUS</a>
                                    <a href="javascript:void(0);" class="custom-button  nextBtn" style="float:left; margin-left: 15px; min-width: 130px; margin-top: 0;">NEXT</a>

                                </div>

                            </div>

                            <div class="clearfix"></div>

                            <br>
                            <br>

                        </div>
                        <input type="button" name="next" class="next action-button save_canvas hidden nextTrigger" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous hidden prevTrigger" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title" style="text-align:left;">RECEIVER & SENDER DETAILS</h2>
                                </div>

                            </div>

                            <div class="row justify-content-center">

                                <div class="col-6  tempprev">

                                    <img src="" id="temp_prev" alt="">

                                </div>

                                <div class="col-6 rec_field">
                                    <label class="fieldlabels">Recipient Name</label>
                                    <input type="text" id="recipient_name" class="form-control" name="recipient_name">
                                    <label class="fieldlabels">Recipient Email</label>
                                    <input type="email" id="recipient_email" class="form-control" name="recipient_email">
                                    <br>
                                    <label class="fieldlabels">Sender Name</label>
                                    <input type="text" id="sender_name" class="form-control" name="sender_name">
                                    <label class="fieldlabels">Sender Email</label>
                                    <input type="email" id="sender_email" class="form-control" name="sender_email">
                                    <br><br>
                                    <a href="javascript:void(0);" class="custom-button prevBtn1" style="float:left; margin-top: 0;">PREVIOUS</a>
                                    <a href="javascript:void(0);" class="custom-button  nextBtn1" style="float:left; margin-left: 15px; min-width: 130px; margin-top: 0;">NEXT</a>

                                </div>
                            </div>

                        </div>
                        <input type="button" name="next" class="next action-button hidden submitBtn nextTrigger1" value="Send" />
                        <input type="button" name="previous" class="previous action-button-previous hidden prevTrigger1" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="fs-title" style="text-transform: capitalize;"><strong>How Would You Like To Send Your<br>Fortune Cookie?</strong></h2>
                                </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-12 share-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                                            <span>Whatsapp</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-sms"></i></a>
                                            <span>Message</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-envelope"></i></a>
                                            <span>Email</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                            <span>Link</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <span>Facebook</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <span>Twitter</span>
                                        </li>

                                    </ul>

                                    <a href="#" class="action-button-previous last-prev">PREVIOUS</a>
                                    <a href="#" class="resetBtn">SEND ANOTHER FORTUNE COOKIE</a>

                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require './template/footer.php'; ?>