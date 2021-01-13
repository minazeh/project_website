<?php require './template/header.php'; ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-9 col-md-12 col-lg-9 col-xl-9 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Toolbox Design E-Card</h2>
                <!-- <p>Customise your own festive greeting card and send it your loved ones!</p> -->
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Select your eCard</strong></li>
                        <li id="personal"><strong>Customise</strong></li>
                        <li id="payment"><strong>Enter recipient details</strong></li>
                        <li id="confirm"><strong>Confirmation</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>

                        <div class="form-card">

                            <div class="row">

                                <div class="col-7">

                                    <h2 class="fs-title">Select Your Card</h2>

                                </div>

                                <div class="col-5">

                                    <h2 class="steps">Step 1 of 4</h2>

                                </div>

                            </div> 

                            <div class="row">

                                <div class="col-md-4">

                                    <img class="freezeGIF freezeGIF_1" data-val="card-1" data-status="false" src="./img/ecard-template-gif-1.gif" alt="">

                                </div>

                                <div class="col-md-4">

                                    <img class="freezeGIF freezeGIF_2" data-val="card-2" src="./img/ecard-template-gif-2.gif" alt="">

                                </div>

                                <div class="col-md-4">

                                    <img class="freezeGIF freezeGIF_3" data-val="card-3" src="./img/ecard-template-gif-3.gif" alt="">

                                </div>

                                    
                            </div>

                        </div> 

                        <input type="button" name="next" class="next action-button" value="Next" />
    
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Customise your eCard</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 of 4</h2>
                                </div>
                            </div> 
                            <div class="row">

                                <div class="col-md-6" id="stage-parent">

                                    <div id="container"></div>

                                </div>
                                
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="receiver" class="form-label">Receiver</label>
                                        <input type="text" class="form-control" id="receiver">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <input type="text" class="form-control" id="message">
                                    </div>

                                    <div class="mb-3">
                                        <label for="receiver" class="form-label">Sender</label>
                                        <input type="text" class="form-control" id="sender">
                                    </div>

                                    <h6>Drag and drop to your eCard</h6>
                                    <br>
                                
                                    <?php $image = new Image(); $image->show_stickers_in_slider(); ?>
                                
                                </div>

                            </div>
                            
                            <div class="clearfix"></div>

                        </div> <input type="button" name="next" class="next action-button save_canvas" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Enter sender and recipient:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 of 4</h2>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-6">

                                    <img src="" id="temp_prev" alt="">

                                </div>
                                <div class="col-6">
                                    <label class="fieldlabels">Salutation</label> 
                                    <select name="salutation" class="form-control" id="salutation">
                                        <option value="Mr">Mr</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Mrs">Mrs</option>
                                    </select>
                                    <br>
                                    <label class="fieldlabels">Sender Name</label> 
                                    <input type="text" id="sender_name"  class="form-control" name="sender_name">
                                    <label class="fieldlabels">Sender Email</label> 
                                    <input type="email" id="sender_email" class="form-control" name="sender_email">
                                    <label class="fieldlabels">Recipient Email</label> 
                                    <input type="email" id="recipient_email"  class="form-control" name="recipient_email">
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