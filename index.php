<?php require './template/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-darkest">
    <div class="container">
        <a class="navbar-brand m-2" href="javascript:void(0);">
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

        <img src="img/landing-gif.gif" alt="">

    </div>

    <div class="text-wrapper">

        <p>
            Send A Personalised Auspicious Greeting & A Fortune Cookie!
        </p>

        <a href="javascript:void(0);" class="custom-button get-started">LET’S GET CRACKING</a>

    </div>

    <div class="clearfix"></div>

</div>

<div class="intro-overlay hidden animation-processing" style="top: 0;">

    <div class="logo-wrapper">

        <img src="img/fortune-cookie.png" alt="">

    </div>

    <div class="text-wrapper">

        <p>
            Processing your eCard please wait...
        </p>

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
                        <li class="active" id="account" style="color: black;">Pick A<br>Fortune Cookie</li>
                        <li id="personal" style="color: black;">Customise<br>Your Greeting</li>
                        <li id="payment" style="color: black;">Receiver<br>& Sender Details</li>
                        <li id="confirm" style="color: black;">Share<br>Your Fortune</li>
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
                                <div class="col-md-7 col-12">
                                    <h2 class="fs-title" style="text-align:left;">CUSTOMISE YOUR GREETING</h2>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6">

                                    <div id="stage-parent">
                                        <div id="container"></div>
                                    </div>

                                </div>

                                <div class="col-md-6 col-12">

                                    <div class="d-lg-none d-md-none d-xs-block">

                                        <span class="form-label">Tap and drag stickers on your Card</span>

                                        <br>

                                        <?php $image = new Image();
                                        $image->show_stickers_in_slider_click(); ?>

                                    </div>

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

                                    <div class="d-none d-md-block d-lg-block">

                                        <span class="form-label">Drag and drop stickers to your Card</span>

                                        <br>

                                        <?php $image = new Image();
                                        $image->show_stickers_in_slider(); ?>

                                    </div>


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
                                <div class="col-md-7 col-12">
                                    <h2 class="fs-title" style="text-align:left;">RECEIVER & SENDER DETAILS</h2>
                                </div>

                            </div>

                            <div class="row justify-content-center tempprev">

                                <div class="col-md-6 col-12  ">


                                    <img src="" id="temp_prev" alt="">

                                </div>

                                <div class="col-md-6 col-12 rec_field">

                                    <div class="alert alert-fields alert-danger hidden" role="alert">
                                        <strong>All fields are required.</strong>
                                    </div>
                                    <div class="alert alert-email alert-danger hidden" role="alert">
                                        <strong>You have entered an invalid email address.</strong>
                                    </div>

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
                                    <h2 class="fs-title" style="text-transform: capitalize;"><strong>How Would You Like To Send Your Fortune Cookie?</strong></h2>
                                </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-12 share-icons">
                                    <ul>
                                        <li>
                                            <a href="#" id="whatsappLink"><i class="fab fa-whatsapp"></i></a>
                                            <span>Whatsapp</span>
                                        </li>
                                        <li>
                                            <a href="#" id="smsLink"><i class="fas fa-sms"></i></a>
                                            <span>Message</span>
                                        </li>
                                        <li>
                                            <a href="#" id="mailLink"><i class="fas fa-envelope"></i></a>
                                            <span>Email</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-link"></i></a>
                                            <span>Link</span>
                                        </li>
                                        <li>
                                            <a href="#" id="facebookLink"><i class="fab fa-facebook-f"></i></a>
                                            <span>Facebook</span>
                                        </li>
                                        <li>
                                            <a href="#" id="twitterLink"><i class="fab fa-twitter"></i></a>
                                            <span>Twitter</span>
                                        </li>

                                    </ul>

                                    <a href="javascript:void(0);" class="resetBtn">SEND ANOTHER FORTUNE COOKIE</a>

                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Copy Link</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" id="urlLink">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark" onclick="myFunctionz()">Copy Link</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Save your eCard</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="color: black;">You are about to save your eCard. Would you like to proceed?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Get Back</button>
                <button type="button" class="btn-save btn btn-dark">Proceed</button>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunctionz() {
        /* Get the text field */
        var copyText = document.getElementById("urlLink");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
    }
</script>

<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="./js/vendor/freezeframe.js/packages/freezeframe/dist/freezeframe.min.js"></script>
<script src="js/plugins.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/multi-step.js"></script>
<script src="js/main.js"></script>


</body>

</html>