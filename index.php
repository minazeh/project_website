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

                                    <li>
                                        <img class="gif-item freezeGIF" data-val="card-1" data-status="false" src="./img/card-template-1.png" alt="">
                                    </li>
                                    <li>
                                        <img class="gif-item freezeGIF" data-val="card-2" data-status="false" src="./img/card-template-2.png" alt="">
                                    </li>
                                    <li>
                                        <img class="gif-item freezeGIF" data-val="card-3" data-status="false" src="./img/card-template-3.png" alt="">
                                    </li>
                                   
                                </ul>

                                <ul class="gif-selection">

                                    <li>
                                        <img class="gif-item freezeGIF" data-val="card-4" data-status="false" src="./img/card-template-4.png" alt="">
                                    </li>
                                    <li>
                                        <img class="gif-item freezeGIF" data-val="card-5" data-status="false" src="./img/card-template-5.png" alt="">
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
                                    <h2 class="fs-title">Customise AN AUSPICIOUS Message</h2>
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

                                    <h6>Drag and drop to your eCard</h6>
                                    <br>

                                    <?php $image = new Image();
                                    $image->show_stickers_in_slider(); ?>

                                </div>

                            </div>

                            <div class="clearfix"></div>

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
                                
                                <div class="col-6">
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
                        <input type="button" name="next" class="next action-button submitBtn" value="Submit" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Confirmation:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 of 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong></strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Sent Your eCard!</h5>
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