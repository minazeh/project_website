<?php require './template/header.php'; ?>
<?php require_once 'class.mysql.php'; ?>

<!-- PHP CODESS -->
<?php $data = new Mysql(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-darkest">
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

    <div class="text-wrapper">

        <div class="small">DEAR</div>

        <p class="name">
            <?php echo $data->get_data($_GET['perm_id'], 'recipient_name'); ?>
        </p>

        <div class="logo-wrapper viewer">

            <img style="max-width: 200px;" src="img/prev-<?php echo $data->get_data($_GET['perm_id'], 'image_type'); ?>.png" alt="">

        </div>

        <div class="fortune-text">
            You Have A Fortune Cookie From
        </div>

        <p class="name sender-name mt-2">
            <?php echo $data->get_data($_GET['perm_id'], 'sender_name'); ?>
        </p>

        <a href="javascript:void(0);" class="custom-button get-started">CRACK IT!</a>

    </div>

    <div class="clearfix"></div>

</div>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-5 col-12">

            <div class="viewer-gif-wrapper">

                <div class="gif-image-wrapper ">

                    <video id="play_vid" width="520" height="520" playsinline>
                        <source src="img/e-<?php echo $data->get_data($_GET['perm_id'], 'image_type'); ?>.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>

                <div class="gif-image-wrapper text-center gif-card" style="display: none;">

                    <img src="<?php echo $data->get_data($_GET['perm_id'], 'image_url'); ?>" alt="">

                </div>

                <a href="javascript:void(0);" class="custom-button hidden play-video-button">Play Video</a>
                <a href="https://www.toolart.sg/custom-greetings/" class="custom-button  hidden play-video-button">Send A Fortune Cookie</a>


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
            $('#main-system').hide();
            $('.intro-overlay').fadeOut();
            setTimeout(function() {
                $('#main-system').fadeIn();
                $('#play_vid').trigger('play');
            }, 500)
        });

        $('#play_vid').on('ended', function() {
            $('.gif-card').fadeIn();

            setTimeout(function() {
                $('.play-video-button').removeClass('hidden');
            }, 1000);

        });

        $('.play-video-button').click(function() {

            $('.gif-card').hide();
            $('#play_vid').trigger('play');

        });

    })(jQuery);
</script>

</body>

</html>