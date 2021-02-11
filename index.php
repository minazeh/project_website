<?php require './template/header.php'; ?>

<div class="intro-overlay">

    <div class="logo-wrapper">

        <img src="img/toolbox-logo.jpg" alt="">

    </div>

    <div class="text-wrapper">

        <p>
            SEND AN AUSPICIOUS<br>CHINESE NEW YEAR COUPLET<br>
            <small>Customise your own festive greeting and send it to your love ones</small>
        </p>

        <a href="#" class="custom-button get-started">GET STARTED</a>

    </div>

    <div class="clearfix"></div>

</div>

<div class="intro-overlay animation-1" style="display: none;">

    <video id="video_anim_1" style="position: fixed; min-height:100%; min-width: 100%; right: 0; bottom: 0;">
        <source src="img/cny-1.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>


</div>

<div class="container-fluid hidden" id="main-system">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-9 col-md-12 col-lg-9 col-xl-9 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="main-logo-wrapper">

                    <img src="img/toolbox-logo.jpg" alt="">

                </div>
                <!-- <p>Customise your own festive greeting card and send it your loved ones!</p> -->
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Select A Couplet</strong></li>
                        <li id="personal"><strong>Customise An Auspicious Message</strong></li>
                        <li id="payment"><strong>Send Your Blessings</strong></li>
                        <li id="confirm"><strong>Huat Ah!</strong></li>
                    </ul>

                    <fieldset>

                        <div class="form-card">

                            <div class="row mt-5">

                                <ul class="gif-selection">

                                    <li class="flip-item">
                                        <div class="flip-holder">
                                            <img class="gif-item freezeGIF front" data-val="card-1" data-status="false" src="./img/card-template-1.png" alt="">
                                            <img src="template/ecard-template/ecard-template-1.png" class="back" alt="">
                                        </div>
                                    </li>
                                    <li class="flip-item">
                                        <div class="flip-holder">
                                            <img class="gif-item freezeGIF front" data-val="card-2" data-status="false" src="./img/card-template-2.png" alt="">
                                            <img src="template/ecard-template/ecard-template-2.png" class="back" alt="">
                                        </div>
                                    </li>
                                    <li class="flip-item">
                                        <div class="flip-holder">
                                            <img class="gif-item freezeGIF front" data-val="card-3" data-status="false" src="./img/card-template-3.png" alt="">
                                            <img src="template/ecard-template/ecard-template-3.png" class="back" alt="">
                                        </div>
                                    </li>
                                </ul>

                                <ul class="gif-selection">

                                    <li class="flip-item">
                                        <div class="flip-holder">
                                            <img class="gif-item freezeGIF front" data-val="card-4" data-status="false" src="./img/card-template-4.png" alt="">
                                            <img src="template/ecard-template/ecard-template-4.png" class="back" alt="">
                                        </div>
                                    </li>
                                    <li class="flip-item">
                                        <div class="flip-holder">
                                            <img class="gif-item freezeGIF front" data-val="card-5" data-status="false" src="./img/card-template-5.png" alt="">
                                            <img src="template/ecard-template/ecard-template-5.png" class="back" alt="">
                                        </div>
                                    </li>

                                </ul>

                            </div>

                        </div>

                        <input type="button" name="next" class="next action-button btnNext1" value="Next" />

                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Customise AN AUSPICIOUS Message</h2>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6" id="stage-parent">

                                    <div id="container"></div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="receiver" class="form-label">TO (Draggable)</label>
                                        <input type="text" placeholder="Recipient Name" class="form-control" id="receiver">
                                    </div>

                                    <div class="">
                                        <label for="message" class="form-label">MESSAGE (Draggable)</label>
                                        <textarea name="message" placeholder="Type Your Auspicious Message" id="message" cols="30" rows="4"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="receiver" class="form-label">FROM (Draggable)</label>
                                        <input type="text" placeholder="Your Name" class="form-control" id="sender">
                                    </div>

                                    <h6>Drag and drop to your eCard</h6>
                                    <br>

                                    <?php $image = new Image();
                                    $image->show_stickers_in_slider(); ?>

                                </div>

                            </div>

                            <div class="clearfix"></div>

                            <br>
                            <br>

                        </div> <input type="button" name="next" class="next action-button save_canvas" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row justify-content-center">
                                <div class="col-7">
                                    <h2 class="fs-title text-center">sender and recipient DETAILS</h2>
                                </div>

                            </div>

                            <div class="row justify-content-center">

                                <div class="col-6 hidden tempprev">

                                    <img src="" id="temp_prev" alt="">

                                </div>

                                <div class="col-6 rec_field">
                                    <label class="fieldlabels">Salutation</label>
                                    <select name="salutation" class="form-control" id="salutation">
                                        <option value="Mr">Mr</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Mrs">Mrs</option>
                                    </select>
                                    <br>
                                    <label class="fieldlabels">Sender Name</label>
                                    <input type="text" id="sender_name" class="form-control" name="sender_name">
                                    <label class="fieldlabels">Sender Email</label>
                                    <input type="email" id="sender_email" class="form-control" name="sender_email">
                                    <label class="fieldlabels">Recipient Email</label>
                                    <input type="email" id="recipient_email" class="form-control" name="recipient_email">
                                </div>
                            </div>

                        </div>
                        <input type="button" name="next" class="next action-button hidden submitBtn" value="Send" />
                        <input type="button" name="next" class="action-button preview_card " value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="fs-title end-title">HOW WOULD YOU LIKE TO SEND YOUR BLESSINGS?:</h2>
                                </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-12 share-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-sms"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-envelope"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>

                                    </ul>

                                    <a href="#" class="action-button-previous last-prev">PREVIOUS</a>
                                    <a href="#" class="resetBtn">SEND ANOTHER COUPLET</a>

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