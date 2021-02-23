<?php require './template/header.php'; ?>
<?php require_once 'class.mysql.php'; ?>

<!-- PHP CODESS -->
<?php $data = new Mysql(); ?>

<div class="intro-overlay viewer">

    <div class="logo-wrapper">

        <img src="img/main-logo.png" alt="">

    </div>

    <div class="text-wrapper">

        <div class="small">DEAR</div>

        <p class="name">
            <?php echo $data->get_data($_GET['perm_id'], 'recipient_name'); ?>
        </p>

        <p class="name sender-name mt-2">
            You Have A Festive Greeting From <?php echo $data->get_data($_GET['perm_id'], 'sender_name'); ?>
        </p>

        <a href="javascript:void(0);" class="custom-button get-started">OPEN</a>

    </div>

    <div class="clearfix"></div>

</div>
<div class="intro-overlay animation-1" style="display: none;">

    <video id="video_anim_1" playsinline style="position: fixed; min-height:100%; min-width: 100%; left: 50%; transform: translate(-50%, 0); bottom: 0;">
        <source src="img/full_vid.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="skip" style="position: fixed; bottom: 20px;  right: 20px;">
        <a href="javascript:void(0);" style="text-decoration: none; color: gray;">SKIP</a>
    </div>

</div>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-6 col-12">

            <div class="viewer-gif-wrapper">


                <div class="gif-image-wrapper text-center gif-card" style="display: none; position: relative;">
                    <br>
                    <br>
                    <img style="width: 100%;" src="<?php echo $data->get_data($_GET['perm_id'], 'image_url');
                                                    ?>" alt="">

                    <div class="btn-holders">
                        <a href="https://www.toolart.sg/demo/sentosa-greeting/" class="custom-button  play-video-button">Send Your Couplet</a>
                        <a href="javascript:void(0);" class="custom-button play-video-button btn-animate-1">Play Video</a>
                    </div>

                </div>




            </div>

        </div>



    </div>

</div>

<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>

<script>
    (function($) {

        $('.get-started').click(function() {
            $('#main-system').removeClass('hidden');
            $('.intro-overlay').fadeOut();
            setTimeout(function() {
                $('#main-system').fadeIn();
                $('.gif-card').fadeIn();
            }, 500)
        });

        $('.btn-animate-1').click(function() {
            $('.animation-1').fadeIn();
            $('#video_anim_1').trigger('play');
        });

        $('.skip > a').click(function() {
            $('.animation-1').fadeOut();
            $('#video_anim_1').trigger('pause');
        });

        $('#video_anim_1').on('ended', function() {

            $('.animation-1').fadeOut();

        });



    })(jQuery);
</script>

</body>

</html>